<?php
namespace Lab51\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//usun
class InvitationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
    $builder
        ->add('friends_name', 'text')
        ->add('email', 'text')
        ->add('save', 'submit', array('label' => 'send invitation'));
    }

    public function getName(){
        return 'invitation';
    }
    
}