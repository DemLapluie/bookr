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
            ->add('lundi_ouverture')
            ->add('lundi_Fermeture')
            ->add('mardi_ouverture')
            ->add('mardi_fermeture')
            ->add('mercredi_ouverture')
            ->add('mercredi_fermeture')
            ->add('jeudi_ouverture')
            ->add('jeudi_fermeture')
            ->add('vendredi_ouverture')
            ->add('vendredi_fermeture')
            ->add('samedi_ouverture')
            ->add('samedi_fermeture')
            ->add('dimanche_ouverture')
            ->add('dimanche_fermeture')
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
