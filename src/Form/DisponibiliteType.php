<?php

namespace App\Form;

use App\Entity\Disponibilite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DisponibiliteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'lundi_ouverture',
                TimeType::class,
                 array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'lundi_Fermeture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                )
                )
            ->add(
                'mardi_ouverture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'mardi_fermeture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'mercredi_ouverture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'mercredi_fermeture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'jeudi_ouverture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'jeudi_fermeture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'vendredi_ouverture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'vendredi_fermeture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'samedi_ouverture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'samedi_fermeture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'dimanche_ouverture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'dimanche_fermeture',
                TimeType::class,
                array(
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add('prestataire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Disponibilite::class,
        ]);
    }
}
