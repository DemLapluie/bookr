<?php

namespace App\Form;

use App\Entity\Prestataire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionPrestataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_entreprise')
            ->add('adresse_entreprise')
            ->add('ville_entreprise')
            ->add('cp_entreprise')
            ->add('tel_entreprise')
            ->add('lieu_prestation')
            ->add('numero_siret')
            ->add('certification')
            ->add('cni')
            ->add('description_entreprise')
            ->add('profession')
            ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestataire::class,
        ]);
    }
}
