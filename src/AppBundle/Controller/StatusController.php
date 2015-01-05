<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;


class StatusController extends Controller
{
/*
 * status ctrl manages the right sidebar where are info about friends and challenges
 * right sidebar is common for all templates so methods from StatusController are registered
 * as services
 */
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }


    public function getFriends(){
        $friends = null;
        $request = $this->container->get('request');
        $session = $request->getSession();
        if($session) {
            $id = $session->get('id');
            if($id) {
                $user = $this->getDoctrine()
                    ->getRepository('Lab51UserBundle:User')
                    ->find($id);
                $friends = $user->getMyFriends()->toArray();
            }
        }
        return $friends;
    }

    public function getChallenges(){ //where user participate so created by him or where he was invited
        $challenges = null;
        $request = $this->container->get('request');
        $session = $request->getSession();
        if($session) {
            $id = $session->get('id');
            if($id) {
                $user = $this->getDoctrine()
                    ->getRepository('Lab51UserBundle:User')
                    ->find($id);
                $challenges = $user->getGroups()->toArray();
            }
        }
        return $challenges;
    }
}
