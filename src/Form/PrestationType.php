<?php

namespace App\Form;

use App\Entity\Prestation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Nom de la prestation ?',
                    ]
                ]
                )
            ->add('prix',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Prix ? (€)',
                    ]
                ]
                )
            ->add('duree',
                TimeType::class,
                array(
                    'label' => 'Durée ?',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)')
                ))
            ->add('categorie',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Catégorie de la prestation ?',
                    ]
                ])
            ->add('description',
                    TextareaType::class,
                    [
                        'attr' => [
                            'placeholder' => 'Décrivez votre prestation...',
                        ]
                    ]
                )
            ->add('prestataire',
                HiddenType::class
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestation::class,
        ]);
    }
}
