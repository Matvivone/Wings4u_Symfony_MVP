<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title')
            ->add('Country')
            ->add('Responsible')
            ->add('Content_status')
            ->add('Video_status');
    }

}