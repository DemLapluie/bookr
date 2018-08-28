<?php

namespace App\Form;

use App\Entity\Horaires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
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
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'lundi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                )
                )
            ->add(
                'mardi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'mardi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'mercredi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'mercredi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'jeudi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'jeudi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'vendredi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'vendredi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'samedi_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'samedi_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'dimanche_ouverture',
                TimeType::class,
                array('label' => 'ouverture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
                    )
                ))
            ->add(
                'dimanche_fermeture',
                TimeType::class,
                array('label' => 'fermeture',
                    'required' => false,
                    'placeholder' => array(
                        'hour' => 'Heure(s)',
                        'minute' => 'Minute(s)'
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
