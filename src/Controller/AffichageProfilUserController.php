<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Photos;
use App\Entity\Prestataire;
use App\Entity\Prestation;
use App\Form\InscriptionPrestataireType;
use App\Form\PhotoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AffichageProfilUserController extends AbstractController
{
    /**
     * @Route("/affichage/profil/prestataire/{id}")
     */

    public function AffichagePrestataire()
    {
        /**
         * Requête GET pour afficher les données archivées Prestataire en BDD
         */

        $em = $this->getDoctrine()->getManager();

        $repositoryPrestaraire = $em->getRepository(Prestataire::class);
        $repositoryPhotos = $em->getRepository(Photos::class);
        $repositoryPrestations = $em->getRepository(Prestation::class);

        $prestataire = $repositoryPrestaraire->findAll();
        $prestatairePhotos = $repositoryPhotos->findAll();
        $prestatairePrestations = $repositoryPrestations->findAll();

        return $this->render(
            '/affichage_profil/prestataire.html.twig',
            [
                'prestataire' => $prestataire,
                'prestataire_photos' => $prestatairePhotos,
                'prestataire_prestations' => $prestatairePrestations,
            ]
        );


        /**
         * Requête POST pour modifier les données Prestataire en BDD via une modale (cf.fichier Twig)
         */
        $prestataire = new Prestataire();
        $prestatairePhotos= new Photos();
        $prestatairePrestations = new Prestation() ;

        $form = $this->createForm(InscriptionPrestataireType::class, $prestataire);
                $this->createForm(PhotoType::class,$prestatairePhotos);
                $this->createForm(PrestationType::class,$prestatairePrestations);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if ($form->isValid()) {

                $prestataire->setAvatar();
                $prestataire->setNomEntreprise();
                $prestataire->setLieuPrestation();
                $prestataire->setDescriptionEntreprise();
                $prestataire->setAdresseEntreprise();
                $prestataire->setVilleEntreprise();
                $prestataire->setCpEntreprise();
                $prestataire->setTelEntreprise();


                $prestatairePhotos->setNom();

                $prestatairePrestations->setNom();

                $em = $this->getDoctrine()->getManager();
                $em->persist($prestataire);
                $em->persist($prestatairePhotos);
                $em->persist($prestatairePrestations);
                $em->flush();


                $this->addFlash(
                    'success',
                    'Vos données sont mises à jour.'
                );

                return $this->render(
                    '/affichage_profil/prestataire.html.twig',
                    [
                        'prestataire' => $prestataire
                    ]
                );

            }

        }
    }

    /**
     * @Route("/affichage/profil/client/{id}")
     */

    public function AffichageClient()
    {
        /**
         * Requête GET pour afficher les données archivées Client en BDD
         */

        $em = $this->getDoctrine()->getManager();
        $repositoryClient = $em->getRepository(Client::class);
        $client = $repositoryClient->findAll();

        return $this->render(
            '/affichage_profil/client.html.twig',
            [
                'client' => $client
            ]
        );

        /**
         * Requête POST pour modifier les données Client en BDD
         */
        $client = new Client();

        $form = $this->createForm(Client::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $client->("En attente");

                $this->addFlash(
                    'success',
                    'Votre inscription est en cours de validation'
                );

                return $this->render(
                    '/affichage_profil/client.html.twig',
                    [
                        'client' => $client
                    ]
                );

            }
        }
    }


}








