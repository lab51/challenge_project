<?php
namespace Lab51\InboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->setAction($options['action'])
            ->add('content', 'textarea', array('attr' => array('rows'=>'4')))
            ->add('save', 'submit', array('label' => 'send message'));
    }

    public function getName(){
        return 'message';
    }

}