<?php
namespace Lab51\ChallengeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//usun
class InvitationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            //->setAction($options['action'])
            ->add('friends_name', 'text')
            ->add('email', 'text')
            ->add('challenge_id', 'hidden')
            ->add('save', 'button', array('label' => 'send invitation', 'attr'=>array('onclick'=>'sendInv()')));
    }

    public function getName(){
        return 'invitation';
    }

}