<?php

namespace App\Form;

use App\Entity\Prestataire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

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
                        'placeholder' => 'Nom de l\'entreprise',
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
                        'placeholder' => 'Code Postal',
                    ]
                ])
            ->add(
                'tel_entreprise',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Téléphone',
                    ]
                ])
            ->add(
                'lieu_prestation',
                ChoiceType::class,
                [
                    'label' => 'choix realisation prestataire',
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
                        'placeholder' => 'Statut de validation',
                    ]
                ])
            ->add(
                'cni',
                FileType::class,
                [
                    'attr' => [
                        'placeholder' => 'Pièce d\'identité',
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
                        'placeholder' => 'Sélectionner une image',
                    ]
                ]
                )
            ->add(
                'jour',
                DateType::class,
                [
                    'attr' => [
                        'placeholder' => 'Téléphone',
                    ]
                ])
            ->add(
                'profession',
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
            'data_class' => Prestataire::class,
        ]);
    }
}
