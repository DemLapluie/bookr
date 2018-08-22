<?php

namespace App\Form;

use App\Entity\Prestataire;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionPrestataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'nom_entreprise',
                 TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Nom',
                    ]
                ]
                )
            ->add(
                'adresse_entreprise',
                 TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Adresse',
                    ]
                ] )
            ->add(
                'ville_entreprise',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Ville',
                    ]
                ]
                )
            ->add(
                'cp_entreprise',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Code postale',
                    ]
                ])
            ->add(
                'tel_entreprise',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Telephone',
                    ]
                ])
            ->add(
                'lieu_prestation',
                ChoiceType::class,
                [
                    'choices'  => [
                        'Chez le client' => 'Chez le client',
                        'Chez le prestataire' => 'Chez le prestataire',
                        'En salon/institut' => 'En salon/institut'
                    ],
                    'expanded' => true,
                    'multiple' => true
                ])
            ->add(
                'numero_siret',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'N° SIRET',
                    ]
                ]
                )
            ->add(
                'certification',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Status de validation',
                    ]
                ])
            ->add(
                'cni',
                FileType::class,
                [
                    'attr' => [
                        'placeholder' => 'Numero CNI',
                    ]
                ])
            ->add(
                'description_entreprise',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Description entreprise',
                    ]
                ])
            ->add(
                'avatar',
                FileType::class,
                [
                    'attr' => [
                        'placeholder' => 'Uploader votre photo de profil',
                    ]
                ]
                )
            ->add(
                'profession',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Telephone',
                    ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestataire::class,
        ]);
    }
}
