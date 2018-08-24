<?php

namespace App\Form;

use App\Entity\Prestataire;
use App\Form\HorairesType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilPrestataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            'description_entreprise',
            TextType::class,
            [
            'attr' => [
            'placeholder' => 'Description entreprise',
            ]
            ])


            ->add(
                'jour',
                ChoiceType::class,
                array(
                    'choices'  => array(
                        'Lundi' => '1',
                        'Mardi' => '2',
                        'Mercredi' => '3',
                        'Jeudi' => '4',
                        'Vendredi' => '5',
                        'Samedi' => '6',
                        'Dimanche' => '7',
                    ),
                    'expanded' => true,
                    'multiple' => true
                ))

            ->add(
                'horaires',
                HorairesType::class
                )


            /*->add(
                'nom',
                PhotoType::class, array(
                        'nom',TextType::class,
                    [
                        'attr' => [
                            'placeholder' => 'Ajouter une photo',
                        ]
                    ])
            )

            ->add(
                'prestation',
                PrestationType::class, array(
                    'nom', TextType::class,
                    [
                        'attr' => [
                            'placeholder' => 'Ajouter une prestation',
                        ]
                    ])
            )
            */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestataire::class,
        ]);
    }
}
