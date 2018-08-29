<?php
namespace App\Form;
use App\Entity\Prestataire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'Sélectionner une image (logo, photo)',
                    ]
                ]
            )
            ->add(
                'adresse_entreprise',
                TextType::class,
                [
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'Adresse',
                    ]
                ] )
            ->add(
                'ville_entreprise',
                TextType::class,
                [
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'Ville',
                    ]
                ]
            )
            ->add(
                'cp_entreprise',
                TextType::class,
                [
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'Code Postal',
                    ]
                ])
            ->add(
                'tel_entreprise',
                TextType::class,
                [
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'Téléphone',
                    ]
                ])
            ->add(
                'description_entreprise',
                TextareaType::class,
                [
                    'attr' => [
                        'placeholder' => 'Expliquer en quelques mots votre activité...',
                    ]
                ])
            ->add(
                'jour',
                ChoiceType::class,
                array(
                    'required' => false,
                    'label' => 'Jour(s) et Horaires d\'ouverture :',
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

            ->add('horaires',
                HorairesType::class)

            ->add(
                'profession',
                ChoiceType::class,
                array(
                    'required' => false,
                    'label' => 'Profession',
                    'choices'  => array(
                        'Coiffeur' => 'Coiffeur',
                        'Barbier' => 'Barbier',
                        'Prothésiste Ongulaire' => 'Prothésiste Ongulaire',
                        'MakeUp Artist' => 'MakeUp Artist',
                        'Expert/Styliste du Regard' => 'Expert/Styliste du Regard',
                    ),
                    'expanded' => true,
                    'multiple' => true
                ))
            ->add(
                'lieu_prestation',
                ChoiceType::class,
                array(
                    'required' => false,
                    'label' => 'Lieu de réalisation de la prestation',
                    'choices'  => array(
                        'Chez le client' => 'Chez le client',
                        'Chez le prestataire' => 'Chez le prestataire',
                        'En salon/institut' => 'En salon/institut'),
                    'expanded' => true,
                    'multiple' => true
                ))

        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestataire::class,
        ]);
    }
}
