<?php
namespace Lab51\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
    $builder
        ->setAction($options['action'])
        ->add('name','text')
        ->add('password','text')
        ->add('email','text')
        ->add('save','submit',array('label'=>'register'));
    }

    public function getName(){
        return 'register';
    }
    
}