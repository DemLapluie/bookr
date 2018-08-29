<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Photos;
use App\Entity\Prestataire;
use App\Entity\Prestation;
use App\Form\PhotoType;
use App\Form\PrestationType;
use App\Form\ProfilClientType;
use App\Form\ProfilPrestataireType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AffichageProfilUserController extends AbstractController
{

    /**
     * @Route("/modificationprofil/prestataire/", name="modification_profil_prestataire")
     */
    public function modificationProfilPrestataire(Request $request) {

        /**
         * Requête POST pour modifier les données Prestataire en BDD via une modale (cf.fichier Twig)
         */
        $prestataire = $this->getUser()->getPrestataire();
        $originalImage = null;

        if(!is_null($prestataire->getAvatar())){
            $originalImage = $prestataire->getAvatar() ;
        }

        if (!empty($originalImage)) {
            $prestataire->setAvatar(
                new  File($this->getParameter('upload_dir') . $originalImage)
            );
        }

        //dump($prestataire->getHoraires());
        $form = $this->createForm(ProfilPrestataireType::class, $prestataire, ['validation_groups' => ['Static','Prestataire']]);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if ($form->isValid()) {

                /**
                 * @var UploadedFile|null
                 */
                $image = $prestataire->getAvatar() ;

                if(!is_null($image)){
                    $filename = uniqid() . '.' . $image->guessExtension();
                    $image->move(
                        $this->getParameter('upload_dir'),
                        $filename
                    );

                    $prestataire->setAvatar($filename);
                    if (!is_null($originalImage)){
                        unlink($this->getParameter('upload_dir') . $originalImage);
                    }
                }else{
                    $prestataire->setAvatar($originalImage);
                }


                $em = $this->getDoctrine()->getManager();
                $em->persist($prestataire);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Vos données sont mises à jour.'
                );
            }
        }
        return $this->render(
            '/affichage_profil/prestataire.html.twig',
            [
                'prestataire' => $prestataire,
                'form'  => $form->createView(),
                'original_image'  => $originalImage
            ]
        );
    }



    /**
     * @Route("/modificationprofil/photos/", name="modification_profil_photos")
     */
    public function gestionDesPhotos(Request $request) {

        $prestataire = $this->getUser()->getPrestataire();

        $photo = new Photos();

        $form = $this->createForm(PhotoType::class, $photo);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if ($form->isValid()) {

                $image = $photo->getNom() ;

                if(!is_null($image)){
                    $filename = uniqid() . '.' . $image->guessExtension();
                    $image->move(
                        $this->getParameter('upload_dir'),
                        $filename
                    );

                    $photo->setNom($filename);
                    $photo->setPrestataire($prestataire);

                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($photo);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Votre photo est ajoutée à votre profil'
                );

            }
        }
        return $this->render(
            '/affichage_profil/fiche_prestataire/photos.html.twig',
            [
                'form'  => $form->createView(),
                'prestataire' => $prestataire,

            ]

        );
    }


    /**
     * @Route("/modificationprofil/prestations/", name="modification_profil_prestations")
     */
    public function gestionDesPrestations(Request $request) {

        $prestations = $this->getUser()->getPrestataire()->getPrestation();

        $prestation = new Prestation();
        $form = $this->createForm(PrestationType::class, $prestation);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if ($form->isValid()) {

                $prestation->getPrestation();
                $em = $this->getDoctrine()->getManager();
                $em->persist($prestation);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Votre prestation est ajoutée à votre profil.'
                );

            }
        }
        return $this->render(
            '/affichage_profil/fiche_prestataire/prestations.html.twig',[
                'prestations' => $prestations,
                'form'  => $form->createView()
            ]

        );
    }


    /**
     * @Route("/profil/client")
     */

    public function affichageClient(
        Request $request
    )
    {

        $em = $this->getDoctrine()->getManager();

        $client = $this->getUser();
        $originalImage = null;


        if(!is_null($client->getAvatar())){
            // le nom du fichier venant de la bdd
            $originalImage = $client->getAvatar() ;

        }

        if (!empty($originalImage)) {
            $client->setAvatar(
                new  File($this->getParameter('upload_dir') . $originalImage)
            );
        }

        $form = $this->createForm(ProfilClientType::class, $client);
        $form->handleRequest($request);


        if($form->isSubmitted()){

            if ($form->isValid()) {


                /**
                 * @var UploadedFile|null
                 */
                $image = $client->getAvatar() ;


                if(!is_null($image)){
                    $filename = uniqid() . '.' . $image->guessExtension();
                    $image->move(
                        $this->getParameter('upload_dir'),
                        $filename
                    );

                    $client->setAvatar($filename);
                    if (!is_null($originalImage)){
                        unlink($this->getParameter('upload_dir') . $originalImage);
                    }
                }else{
                    $client->setAvatar($originalImage);
                }

                $em->persist($client);
                $em->flush();

                // message de confirmation
                $this->addFlash(
                    'success',
                    'Les modifications on bien été enregistrées'
                );
                // redirection vers la page de Liste
                return $this->redirectToRoute('app_affichageprofiluser_affichageclient');


            }else{
                $this->addFlash(
                    'error',
                    'Erreur'
                );
            }

        }

        return $this->render(
            '/affichage_profil/client.html.twig',
            [
                'client' => $client,
                'form'  => $form->createView(),
                'original_image'  => $originalImage
            ]
        );
    }


}








