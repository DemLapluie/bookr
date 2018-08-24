<?php

namespace App\Form;

use App\Entity\Prestataire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cp_entreprise',
                   TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Code Postal',
                    ]
                ])
            ->add('lieu_prestation',
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
            ->add('profession',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Téléphone',
                    ]
                ])
            ->add('jour', HorairesType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestataire::class,
        ]);
    }
}
