<?php

namespace Lab51\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Lab51\UserBundle\Entity\User;
use Lab51\UserBundle\Form\Type\RegisterType;

/*
 * this controller manages actions such as register, login, logout
 */
class UserController extends Controller
{
    public function indexAction(Request $request)
    {
        $id = $this->getId($request);
        $user = $this->getDoctrine()
        ->getRepository('Lab51UserBundle:User')
        ->find($id);
        $friends = $user->getMyFriends()->toArray();
        return $this->render('Lab51UserBundle:User:index.html.twig', array('user' => $user, 'friends'=>$friends));
    }
    
    public function loginAction(Request $request){
        // set up new, empty User object for form
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('email', 'text')
            ->add('password', 'text')
            ->add('save', 'submit', array('label' => 'login'))
            ->getForm();

        //if form was send
        $form->handleRequest($request);
        if ($form->isValid()) { //check if it is valid

            //get user from DB
            $repository = $this->getDoctrine()
            ->getRepository('Lab51UserBundle:User');
            $user_db = $repository->findOneByEmail($user->getEmail()); //we search for user based on email send in form

            if($user_db){
                $user_db_pass = $user_db->getPassword();
                $user_form_pass = $user->getPassword();
                //compare passwords
                if($user_db_pass==$user_form_pass){
                    $this->setSession($user->getEmail());
                    return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
                }
            } else{
                // to do
            }
        }

        //if form wasn't send, load form
        return $this->render('Lab51UserBundle:User:login.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function logoutAction(Request $request){
        $session = $request->getSession();
        $session->set('name','');
        $session->set('id','');
        return $this->redirect($this->generateUrl('homepage'));
    }

    public function registerAction(Request $request){
        $user = new User();
        $action_url = $this->generateUrl('lab51_user_register_process');    
        $options = array('action'=>$action_url);
        $form = $this->createForm(new RegisterType(), $user, $options);
  
        return $this->render('Lab51UserBundle:User:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function registerProcessAction(Request $request){
        $new_user = new User();
        $form = $this->createForm(new RegisterType(), $new_user);
        $form->handleRequest($request);
        if ($form->isValid()) { //check if it is valid
            $em = $this->getDoctrine()->getManager();
            $em->persist($new_user);
            $em->flush();
            $this->setSession($new_user->getEmail());

            if($request->get('invitation')){
                $invitation_id = $request->get('invitation');
                $invitation = $this->getDoctrine()->getRepository('Lab51UserBundle:Invitation')->find($invitation_id);
                $first_user = $invitation->getUser();
                $this->addFriend($first_user, $new_user);
                $this->addParticipant($new_user, $invitation->getChallengeId());
            }

            return $this->redirect($this->generateUrl('lab51_user_homepage'));
        }
    }

    public function addParticipant($user, $challenge_id){
        $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($challenge_id);
        $user->addGroup($challenge);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return true;
    }

    private function addFriend($user, $friend){
        $user->addMyFriend($friend);
        $friend->addMyFriend($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->persist($friend);
        $em->flush();
        return true;
    }

    private function setSession($email){
        //get user from DB
        $repository = $this->getDoctrine()
            ->getRepository('Lab51UserBundle:User');
        $user_db = $repository->findOneByEmail($email); //we search for user based on email send in form
        session_destroy();
        $session = new Session();
        $session->start();
        $session->set('name', $user_db->getName());
        $session->set('id', $user_db->getId());
        return true;
    }

    private function getId(Request $request){
        $session = $request->getSession();
        $id = $session->get('id');
        return $id;
    }
}
