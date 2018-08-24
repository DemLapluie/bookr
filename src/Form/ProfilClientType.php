<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Pseudo',
                    ]
                ])
            ->add('avatar',
                FileType::class,
                [
                    'attr' => [
                        'placeholder' => 'Sélectionner une image',
                    ]
                ])
            ->add('description',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Décrivez-vous...',
                    ]
                ])
            ->add('adresse',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Adresse',
                    ]
                ])
            ->add('ville',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Ville',
                    ]
                ])
            ->add('cp',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Code Postal',
                    ]
                ])
            ->add('email',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Email',
                    ]

                ])
            ->add('tel',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Téléphone',
                    ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
