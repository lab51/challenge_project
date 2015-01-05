<?php
namespace Lab51\ChallengeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ResultAjaxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('result', 'text')
            ->add('challenge_id', 'hidden')                
            ->add('save', 'button', array('label' => 'add result', 'attr'=>array('onclick'=>'addResult()')));
    }

    public function getName(){
        return 'result';
    }

}