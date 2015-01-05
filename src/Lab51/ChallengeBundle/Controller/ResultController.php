<?php
namespace Lab51\ChallengeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Lab51\UserBundle\Entity\User;
use Lab51\ChallengeBundle\Entity\Result;
use Symfony\Component\HttpFoundation\Response;

class ResultController extends Controller
{
   public function indexAction($challenge_id, Request $request){ //show results for this challenge

       $auth = 0;
       $user_id = $this->getId($request);

       $challenge = $this->getDoctrine()
           ->getRepository('Lab51ChallengeBundle:Challenge')
           ->find($challenge_id);
       $challenge_owner = $challenge->getUser();
       $em = $this->getDoctrine()->getManager();
       $query = $em->createQuery(
           'SELECT c, r, u FROM Lab51ChallengeBundle:Result r
            JOIN r.challenge c
            JOIN r.user u
            WHERE c.id=:id AND u.id =:u_id')
           ->setParameter('id', $challenge_id)
           ->setParameter('u_id', $user_id);
       //verification for options

       if($user_id==$challenge_owner->getId()){
           $auth = 1;
       }

       $results = $query->getResult();
       return $this->render('Lab51ChallengeBundle:Result:index.html.twig', array('results' => $results, 'challenge' => $challenge, 'auth'=>$auth));

   }

   public function createResultAction($challenge_id, Request $request){
       $result = new Result();
       $form = $this->createFormBuilder($result)
           ->add('result', 'text')
           ->add('date', 'date')
           ->add('save', 'submit', array('label' => 'add_result'))
           ->getForm();

       //if form was send

       $form->handleRequest($request);
       if ($form->isValid()) { //check if it is valid
           $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($challenge_id);
           $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($this->getId($request));
           if($challenge && $user) {
               $result->setChallenge($challenge);
               $result->setUser($user);
               $em = $this->getDoctrine()->getManager();
               $em->persist($result);
               $em->flush();
               return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
           }
       }

       return $this->render('Lab51ChallengeBundle:Result:create.html.twig', array(
           'form' => $form->createView(),
       ));

   }

   public function editResultAction($result_id, Request $request){
       $result = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Result')->find($result_id);

       if($result) { //TO DO -> CHECK OWNER OF CHALLENGE
           $form = $this->createFormBuilder($result)
               ->add('result', 'text')
               ->add('date', 'date')
               ->add('save', 'submit', array('label' => 'update'))
               ->getForm();

           $form->handleRequest($request);
           if ($form->isValid()) { //check if it is valid
               $em = $this->getDoctrine()->getManager();
               $em->persist($result);
               $em->flush();
               return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
           }

           return $this->render('Lab51ChallengeBundle:Result:edit.html.twig', array(
               'form' => $form->createView(),
           ));
       }
   }

   public function createAjaxResultAction(){
        $isAjax = $this->get('Request')->isXMLHttpRequest();
        if ($isAjax) {
            $request = $this->get('request');
            
            $result = new Result();
            $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($this->getId($request));
            $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($request->get('challenge_id'));
           
            $result->setChallenge($challenge);
            $result->setDate(new \DateTime('today'));
            $result->setResult($request->get('result'));
            $result->setUser($user);
            //now we can add it to db
            $em = $this->getDoctrine()->getManager();
            $em->persist($result);
            $em->flush();

            return new Response();
        }
        return new Response('This is not ajax!', 400);       
   }
   
   public function deleteResultAction($result_id){
       $result = $this->getDoctrine()
           ->getRepository('Lab51ChallengeBundle:Result')
           ->find($result_id);
       $em = $this->getDoctrine()->getManager();
       $em->remove($result);
       $em->flush();
       return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
   }

    public function ladderAction($challenge_id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT c, r, u FROM Lab51ChallengeBundle:Result r
            JOIN r.challenge c
            JOIN r.user u
            WHERE c.id=:id
            ORDER BY r.result DESC'
        )->setParameter('id', $challenge_id);

        $results = $query->getResult();

        $auth = 0;
        $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($challenge_id);
        $user_id = $this->getId($request);
        $challenge_owner = $challenge->getUser();

        if($user_id==$challenge_owner->getId()){
            $auth = 1;
        }


        return $this->render('Lab51ChallengeBundle:Result:ladder.html.twig', array('results' => $results, 'challenge'=>$challenge, 'auth'=>$auth));
    }

    private function getId(Request $request){ //przeniesc do service
        $session = $request->getSession();
        $id = $session->get('id');
        return $id;
    }
}