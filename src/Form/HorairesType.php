<?php

namespace App\Form;

use App\Entity\Horaires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HorairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'lundi_ouverture',
                TimeType::class,
                 array('label' => 'ouverture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'lundi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                )
                )
            ->add(
                'mardi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'mardi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'mercredi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'mercredi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'jeudi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'jeudi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'vendredi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'vendredi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'samedi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'samedi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'dimanche_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'placeholder' => array(
                        'hour' => 'Hour',
                        'minute' => 'Minute'
                    )
                ))
            ->add(
                'dimanche_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'placeholder' => array(
                        'hour' => 'Heure',
                        'minute' => 'Minute'
                    )
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Horaires::class,
        ]);
    }
}
