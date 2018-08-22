<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('civilite',
            // select sur une entité Doctrine
            ChoiceType::class,
            [
                'choices'  => [
                    'Mme' => 'Mme',
                    'M.' => 'M.'
                ],
                'expanded' => true
            ])
            ->add('nom',
            TextType::class,
            [
                'attr' => [
                    'placeholder' => 'Nom',
                ]
            ]
            )
            ->add('prenom',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Prénom',
                    ]
                ])

            ->add('date_de_naissance',
                BirthdayType::class, array
                    (
                        'format' => 'dd-MM-yyyy',
                        'years'=> range(1918,2000),
                        'placeholder' => array(
                            'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année',

                        )
                )
            )
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
            ->add('pseudo',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Pseudo',
                    ]

                ])
            ->add('plainPassword',
                // 2 champs qui doivent avoir la meme valeur..
                RepeatedType::class,
                [
                    // ..de type password
                    'type' => PasswordType::class,
                    // Options du premier des deux champs
                    'first_options' => [
                        'attr' => [
                            'placeholder' => 'Mot de passe'
                        ],
                    ],
                    // Options du second des deux champs
                    'second_options' => [
                        'attr' => [
                            'placeholder' => 'Confirmation du mot de passe'
                        ],
                    ],
                    'invalid_message' => 'la confirmation ne correspond pas au mot de passe'
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
