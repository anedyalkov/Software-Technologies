<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //TODO: Implement me...
        $builder
            ->add('title', TextType::class)
            ->add('comments', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        //TODO: Implement me...
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Task'
        ));
    }
}
