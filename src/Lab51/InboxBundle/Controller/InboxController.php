<?php
namespace Lab51\InboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Lab51\UserBundle\Entity\User;
use Lab51\InboxBundle\Entity\Message;
use Symfony\Component\HttpFoundation\Session\Session;
use Lab51\InboxBundle\Form\Type\MessageType;

/*
 * user can send message to his friends. Also when someone will invite his friend, then
 * info about invitation will be in inbox. For now inbox is very basic, needs to be
 * improved
 */

class InboxController extends Controller
{
    // show messages
    public function indexAction(Request $request)
    {           
        $id = $this->getId($request);
        $user = $this->getDoctrine()
        ->getRepository('Lab51UserBundle:User')
        ->find($id);

        $messages = $this->getDoctrine()
        ->getRepository('Lab51InboxBundle:Message')
        ->findBy(array('user'=>$user));
       
        return $this->render('Lab51InboxBundle:Inbox:index.html.twig', array('messages' => $messages));
    }

    // show one message
    public function showAction($message_id){
        if($message_id){
            $msg = $this->getDoctrine()->getRepository('Lab51InboxBundle:Message')->find($message_id);
            $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($msg->getUser());

            return $this->render('Lab51InboxBundle:Inbox:show.html.twig', array('msg' => $msg, 'user'=>$user));        
        }
    }

    // create new message
    public function createAction(Request $request){
        $message = new Message();
        $id = $this->getId($request);
        $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($id);
        $friends = $user->getMyFriends();

        $action_url = $this->generateUrl('lab51_inbox_process_message');
        $options = array('action'=>$action_url);
        $form = $this->createForm(new MessageType(), $message, $options);

        return $this->render('Lab51InboxBundle:Inbox:create.html.twig', array('friends'=>$friends, 'form' => $form->createView()));        
    }

    // after post, add new message to DB (so "send" it)
    public function processAction(){
        $request = $this->get('request');
        $form_data = $request->get('message');
        $message = new Message();
        $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($form_data['user']);
        $message->setContent($form_data['content']);
        $message->setDate(new \DateTime('today'));
        $message->setSenderId($this->getId($request));
        $message->setUser($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($message);
        $em->flush();
        return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
    }

    // delete msg.
    public function deleteAction($message_id){
        $message = $this->getDoctrine()
            ->getRepository('Lab51InboxBundle:Message')
            ->find($message_id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($message);
        $em->flush();
        return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
    }
    
    private function getId(Request $request){ //przeniesc do service
        $session = $request->getSession();
        $id = $session->get('id');
        return $id;
    }

}
