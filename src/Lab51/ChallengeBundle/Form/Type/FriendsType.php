<?php
namespace Lab51\ChallengeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FriendsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('availability', 'choice', array(
            'choices'   => array(
                'morning'   => 'Morning',
                'afternoon' => 'Afternoon',
                'evening'   => 'Evening',
            ),
            'multiple'  => true,
        ));
    }

    public function getName(){
        return 'friends';
    }

}


