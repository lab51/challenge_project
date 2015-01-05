<?php
namespace Lab51\ChallengeBundle\Controller;
use Lab51\UserBundle\Entity\Invitation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Lab51\UserBundle\Entity\User;
use Lab51\ChallengeBundle\Entity\Challenge;
use Lab51\ChallengeBundle\Form\Type\InvitationType;
use Lab51\ChallengeBundle\Form\Type\ResultAjaxType;
/*
 * Controller to manage challenges. This is most important part of application.
 * After login to the app, user can create, edit or delete his own challenges.
 * He can also invite other people to his challenge (done in separate controller).
 * The main idea is to do many of these actions (add result, send invitation,...)
 * from main panel with challenges
 */

class ChallengeController extends Controller
{
    public function indexAction(Request $request)
    {
    	$session = $request->getSession();
        $id = $session->get('id');

        $user = $this->getDoctrine()
        ->getRepository('Lab51UserBundle:User')
        ->find($id);

        // get challenges where user participate, so not only created by him
        // but also where he was invited
        $challenges = $user->getGroups()->toArray();

        // we need friends list so we can send invitation to them
        // this form is in popup
        $friends = $user->getMyFriends();
        $invitation = new Invitation(); //for invitation form
        $options = [];
        $form = $this->createForm(new InvitationType(), $invitation, $options);

        //second form to add result (also popup)
        $form_result = $this->createForm(new ResultAjaxType());

        return $this->render('Lab51ChallengeBundle:Challenge:index.html.twig', array(
            'user' => $user, 'challenges' => $challenges, 'friends'=>$friends, 'form' => $form->createView(),
            'form_result' => $form_result->createView()
            ));
    }


    /*
     * display forms to create new action,
     * after POST add data to DB
     */
    public function createAction(Request $request){

        $challenge = new Challenge();
        $form = $this->createFormBuilder($challenge) // to do - move to Form Type
            ->add('challenge_name', 'text')
            ->add('challenge_description', 'textarea', array('attr' => array('rows'=>'4')))
            ->add('save', 'submit', array('label' => 'login'))
            ->getForm();

        // if form was send
        $form->handleRequest($request);
        if ($form->isValid()) { //check if it is valid
            $user = $this->getDoctrine()->getRepository('Lab51UserBundle:User')->find($this->getId($request));
            if($user) {
                $challenge->setUser($user);
                $user->addGroup($challenge);
                $em = $this->getDoctrine()->getManager();
                $em->persist($challenge);
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
            }
        }

        return $this->render('Lab51ChallengeBundle:Challenge:create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    // edit challenge
    public function editAction(Request $request, $challenge_id){
        $challenge = $this->getDoctrine()->getRepository('Lab51ChallengeBundle:Challenge')->find($challenge_id);

        if($challenge) { //TO DO -> CHECK OWNER OF CHALLENGE
            $form = $this->createFormBuilder($challenge) // to do - move to Form Type
                ->add('challenge_name', 'text')
                ->add('challenge_description', 'textarea', array('attr' => array('rows'=>'4')))
                ->add('save', 'submit', array('label' => 'update'))
                ->getForm();

            $form->handleRequest($request);
            if ($form->isValid()) { //check if it is valid
                $em = $this->getDoctrine()->getManager();
                $em->persist($challenge);
                $em->flush();
                return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
            }

            return $this->render('Lab51ChallengeBundle:Challenge:edit.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }

    // delete challenge
    public function deleteAction($challenge_id){
        $challenge = $this->getDoctrine()
            ->getRepository('Lab51ChallengeBundle:Challenge')
            ->find($challenge_id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($challenge);
        $em->flush();
        return $this->redirect($this->generateUrl('lab51_challenge_homepage'));
    }

    // to do - move and register as service
    private function getId(Request $request){
        $session = $request->getSession();
        $id = $session->get('id');
        return $id;
    }

}
