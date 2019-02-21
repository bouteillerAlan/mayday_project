<?php

namespace App\Form;

use App\Entity\BlogCategories;
use App\Entity\BlogContent;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogContentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_categorie', EntityType::class, [
                'class' => BlogCategories::class,
                'choice_label' => 'name',
                'multiple' => false
            ])
            ->add('status')
            ->add('title')
            ->add('content')
            ->add('author')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BlogContent::class,
            'translation_domain' => 'forms'
        ]);
    }
}
