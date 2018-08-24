<?php

namespace App\Form;

use App\Entity\Prestataire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'jour',
                TextType::class,[
                'attr' => [
                    'placeholder' => 'Jour',
                ]
            ])
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
                    'placeholder' => 'Lieu ?',
                    'choices'  => [
                        'Chez le client' => 'Chez le client',
                        'Chez le prestataire' => 'Chez le prestataire',
                        'En salon/institut' => 'En salon/institut'
                    ],
                ])
<<<<<<< HEAD
            ->add(
                'profession',
                ChoiceType::class,
                array(
                    'placeholder'=>'Type d\'activité',
                    'choices'  => array(
                        'Coiffeur' => 'Coiffeur',
                        'Barbier' => 'Barbier',
                        'Prothésiste Ongulaire' => 'Prothésiste Ongulaire',
                        'MakeUp Artist' => 'MakeUp Artist',
                        'Expert/Styliste du Regard' => 'Expert/Styliste du Regard',
                    )
                ))
=======
            ->add('profession',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' => 'Téléphone',
                    ]
                ])
            ->add('jour', HorairesType::class)
>>>>>>> dev_demmy
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}
