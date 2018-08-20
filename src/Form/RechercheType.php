<?php

namespace App\Form;

use App\Entity\Prestataire;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'nom_entreprise',
                 TextType::class
                ,
                  [
                      'attr' => [
                        'placeholder' => 'Nom'
                      ]
                  ]
             )
            ->add(
                'adresse_entreprise',
                 TextType::class,
                  [
                      'attr' => [
                      'placeholder' => 'Adresse'
                      ]
                  ]
            )
            ->add(
                'ville_entreprise',
                TextType::class,
                [
                    'attr' => [
                    'placeholder' => 'Ville'
                    ]
                ]
                )
            ->add(
                'cp_entreprise',
                TextType::class,
                [
                    'attr' => [
                    'placeholder' => 'Code postal'
                    ]
                ]
                )
            ->add(
                'tel_entreprise',
                TextType::class,
                [
                    'attr' => [
                    'placeholder' => 'Telephone'
                     ]
                ]
                )
            ->add(
                'lieu_prestation',
                ChoiceType::class,
                [
                    'attr' => [
                    'placeholder' => 'Lieu de prestation'
                    ]
                ]
                )
            ->add(
                'numero_siret',
                TextType::class,
                [
                    'attr' => [
                    'placeholder' => 'Numero Siret'
                    ]
                ]
                )

            ->add(
                'certification',
                TextType::class,
                [
                    'attr' => [
                    'placeholder' => 'certification'
                    ]
                ]
                )
            ->add(
                'cni',
                TextType::class,
                [
                    'attr' => [
                    'placeholder' => 'CNI'
                    ]
                ]
            )
            ->add(
                'description_entreprise',
                 TextareaType::class,
                [
                    'attr' => [
                    'placeholder' => 'Numero Siret'
                    ]
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestataire::class,
        ]);
    }
}
