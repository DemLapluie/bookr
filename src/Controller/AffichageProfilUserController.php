<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Photos;
use App\Entity\Prestataire;
use App\Entity\Prestation;
use App\Form\InscriptionPrestataireType;
use App\Form\PhotoType;
use App\Form\PrestationType;
use App\Form\ProfilPrestataireType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AffichageProfilUserController extends AbstractController
{
    /**
     * @Route("/profil/prestataire/")
     */

    public function affichagePrestataire()
    {
        /**
         * Requête GET pour afficher les données archivées Prestataire en BDD
         */

        $em = $this->getDoctrine()->getManager();

        $repository= $em->getRepository(ProfilPrestataireType::class, $prestataire);
        $prestataire = $repository->findAll();

        $prestataire->getAvatar();
        $prestataire->getAdresseEntreprise();
        $prestataire->getVilleEntreprise();
        $prestataire->getCpEntreprise();
        $prestataire->getTelEntreprise();
        $prestataire->getDescriptionEntreprise();
        $prestataire->getPhoto();
        $prestataire->getPrestation();
        $prestataire->getJour();
        $prestataire->getHoraires();


        return $this->render(
            '/affichage_profil/fiche_prestataire/ficheprestataire.html.twig',
            [
                'prestataire' => $prestataire,

            ]
        );

    }

    /**
     * @Route("/modficationprofil/prestataire/")
     */
    public function modificationProfilPrestataire() {

        /**
         * Requête POST pour modifier les données Prestataire en BDD via une modale (cf.fichier Twig)
         */
        $prestataire = $this->getUser();

        $form = $this->createForm(InscriptionPrestataireType::class, $prestataire);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if ($form->isValid()) {

                $prestataire->setAvatar();
                $prestataire->setDescriptionEntreprise();


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
     * @Route("/modification/photos")
     */
    public function gestionPhotos() {



        $prestataire->setPhoto();




        return $this->render(
            '/affichage_profil/fiche_prestataire/photos.html.twig',
            [
                'prestataire' => $prestataire,

            ]
        );
    }

    /**
     * @Route("/modification/photos")
     */
    public function gestionPrestations() {




        $prestataire->setPhoto();



        return $this->render(
            '/affichage_profil/fiche_prestataire/prestataions.html.twig',
            [
                'prestataire' => $prestataire,

            ]
        );
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
                //$client->();

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








