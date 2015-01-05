<?php
namespace Lab51\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Lab51\UserBundle\Entity\Invitation;
use Lab51\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Lab51\UserBundle\Form\Type\RegisterType;
use Lab51\ChallengeBundle\Form\Type\InvitationType;
use Lab51\InboxBundle\Entity\Message;

/*
 * user can invite friend to his/her challenge. He can invite new people
 * (who are not his friend) or invite people from list of his friend
 */

class InvitationController extends Controller
{

    /*
     * invitation when people are not on our friend list
     * this is an AJAX call
     */
    public function inviteFriendAction(){
        $isAjax = $this->get('Request')->isXMLHttpRequest();
        if ($isAjax) {
            $request = $this->get('request');

            $invitation = new Invitation();
            $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($this->getId($request));

            $invitation->setVerification($this->generateValidationCode());
            $invitation->setUser($user);
            $invitation->setStatus(0);
            $invitation->setEmail($request->get('email'));
            $invitation->setFriendsName($request->get('friends_name'));
            $invitation->setChallengeId($request->get('challenge_id'));
            //now we can add it to db
            $em = $this->getDoctrine()->getManager();
            $em->persist($invitation);
            $em->flush();

            $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($invitation->getChallengeId());

            //time to send email - call to private method in this class
            $this->sendMail($user->getEmail(), $user->getName(), $invitation->getFriendsName(),
                $challenge->getChallengeName(), $invitation->getVerification(), $invitation->getId());

            return new Response(); //return 200
        }
        return new Response('This is not ajax!', 400);
    }

    /*
     * when user click link in email with invitation, he goes to url like
     * confirm-invitation?id=23&code=242423 -> id is an id of invitation,
     * code is to verify that this is the right person. Then with GET we 
     * get id and code, compare with data in DB. If it's ok, we show the
     * register form (with action set to the RegisterProcess in UserCtrl).
     * User simply have to register a new account.
     */
    
    public function confirmInvitationAction(Request $request){
        $id = $request->get('id');
        $code = $request->get('code');
        if($id && $code){
            $invitation = $this->getDoctrine()->getRepository('Lab51UserBundle:Invitation')->find($id);
            if($invitation){
                $code_db = $invitation->getVerification(); // so we can check if code from DB and email is the same
                if($code==$code_db){
                    //form for registration - start
                    $user = new User();
                    $action_url = $this->generateUrl('lab51_user_register_process');    
                    $options = array('action'=>"$action_url?invitation=$id");
                    $form = $this->createForm(new RegisterType(), $user, $options);
                    //form end
                    return $this->render('Lab51UserBundle:Invitation:confirm.html.twig', array(
                     'name'=> $invitation->getFriendsName(), 'email'=>$invitation->getEmail(),'form' => $form->createView()
                    ));         
                }
            }
        } else {
            return $this->redirect($this->generateUrl('lab51_homepage'));
        }
    }

    // -----------------------------------------------------------------------------------------------------
    // inviting friend from a list to a challenge
    // another option to send invitation

    public function inviteFriendFromListAction(){
        $isAjax = $this->get('request')->isXMLHttpRequest();
        if ($isAjax) {
            $request = $this->get('request');
            
            
            $friend = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($request->get('friend_id'));
            $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($request->get('challenge_id'));
            $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($request->get('user_id'));
            $friend_name = $user->getName();
            $user_name = $user->getName();
            $challenge_name = $challenge->getChallengeName();
            $challenge_id = $challenge->getId();
            $friend_id = $friend->getId();
            $user_id = $user->getId();
            $content = "Hi $friend_name.\r\nYour friend $user_name wants to invite you to his/her new challenge: $challenge_name. Simply click link below to join challenge:\r\n\r\n
            http://127.0.0.1:8000/accept-challenge?challenge=".$challenge_id."&user=".$friend_id."&owner=".$user_id."";

            $msg = new Message();
            $msg->setUser($friend);
            $msg->setContent($content);
            $msg->setDate(new \DateTime('today'));
            $msg->setSenderId($request->get('user_id'));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($msg);
            $em->flush();

            return new Response();
        }
        // +SEND MAIL
         return new Response('This is not ajax!', 400);
        //} // end of form prepare and send

    }

    // when challenge was accepted, we need to update DB
    public function acceptChallengeAction(Request $request){
        $challenge_id = $request->get('challenge');
        $user_id = $request->get('user');
        if($user_id && $challenge_id){
            $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($user_id);            
            $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($challenge_id);            

            $user->addGroup($challenge);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
 
        } else {
            return $this->redirect($this->generateUrl('lab51_homepage'));
        }
    }

    /*
     * private method to send email with invitation to friend, values and code is
     * self-explanatory. Used by inviteFriendAction
     */
    private function sendMail($mail, $owner_name, $friends_name, $challenge_name, $validation_code, $invitations_id){
        $to      = $mail;
        $subject = "$owner_name wants to invite you to his challenge";
        $message = "Hi $friends_name.\r\nYour friend $owner_name created a challenge $challenge_name and he wants to invite you to participate.\r\n
         To participate, click link below and fill short form\r\n\r\n
         http://127.0.0.1:8000/confirm-invitation?id=".$invitations_id."&code=".$validation_code."
          \r\n\r\nYou will have to register an account, but easy - it's all free.\r\n\r\nHope you will like this challenge. Good luck.\r\n
          Team howtough.com";
        $headers = 'From: info@howtough.com' . "\r\n" .
            'Reply-To: ifo@howtough.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
    }

    /*
     * method to generate validation code when invitation to a friend is send
     */
    private function generateValidationCode(){
        $temp = [];
        for($i=0;$i<6;$i++){
            $randVal = rand(0,9);
            array_push($temp, $randVal);
        }
        $validationCode = implode("",$temp);
        return $validationCode;
    }

    private function getId(Request $request){ //przeniesc do service
        $session = $request->getSession();
        $id = $session->get('id');
        return $id;
    }
    
    private function getName(Request $request){ //przeniesc do service
        $session = $request->getSession();
        $name = $session->get('name');
        return $name;
    }
}