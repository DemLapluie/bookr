<?php

namespace App\Controller;


use App\Entity\Prestataire;
use App\Form\InscriptionPrestataireType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionPrestataireController extends AbstractController
{

    /**
     * @Route("/inscription/prestataire/")
     */
    public function inscriptionPrestataire()
    {
        return $this->render(
            'inscription_prestataire/index.html.twig'
        );
    }

    /**
     * @Route("/inscription/prestataire/form/", name="inscription_prestataire_form")
     */
    public function prestFormulaire (Request $request){

        $prestataire = new Prestataire();
        $prestataire->setClient($this->getUser());

        $form = $this->createForm( InscriptionPrestataireType::class, $prestataire, ['validation_groups' => ['Static','Prestataire']]);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){

                /**
                 * @var UploadedFile|null
                 */
                $image = $prestataire->getCni() ;

                if(!is_null($image)){
                    $filename = uniqid() . '.' . $image->guessExtension();
                    $image->move(
                        $this->getParameter('upload_dir'),
                        $filename
                    );

                    $prestataire->setCni($filename);

                }

                $prestataire -> setCertification("En attente");

                $em = $this->getDoctrine()->getManager();
                $em->persist($prestataire);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Votre inscription est en cours de validation'
                );

                return $this->redirectToRoute('inscription_validation');
            }else{
                $this->addFlash(
                    'error',
                    'Le formulaire contient des erreurs'
                );
            }
        }

        return $this->render('inscription_prestataire/formulaire.html.twig', [

            'form' => $form->createView(),
            'prestataire' => $prestataire
        ]);
    }

    /**
     * @Route("/validation", name="inscription_validation")
     */
    public function prestValid ()
    {
        dump($this->getUser());

        $prestataire= $this->getUser()->getPrestataire();

        return $this->render(
            'inscription_prestataire/validation.html.twig',[
                'prestataire' => $prestataire
            ]
        );
    }
}
