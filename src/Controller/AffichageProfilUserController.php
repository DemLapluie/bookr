<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Photos;
use App\Entity\Prestataire;
use App\Entity\Prestation;
use App\Form\InscriptionPrestataireType;
use App\Form\PhotoType;
use App\Form\ProfilClientType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AffichageProfilUserController extends AbstractController
{
    /**
     * @Route("/profil/prestataire/{id}")
     */

    public function affichagePrestataire()
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
                    'Erreuraagarg'
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








