<?php

namespace App\Form;

use App\Entity\BlogContent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_cat')
            ->add('status')
            ->add('created_at')
            ->add('title')
            ->add('content')
            ->add('author')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BlogContent::class,
        ]);
    }
}
