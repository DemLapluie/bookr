<?php

namespace App\Controller;


use App\Entity\Prestataire;
use App\Form\InscriptionPrestataireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionPrestataireController extends AbstractController
{

    /**
     * @Route("/inscription/prestataire/")
     */
    public function prestIndex ()
    {
        return $this->render(
            'inscription_prestataire/index.html.twig'
        );
    }

    /**
     * @Route("/inscription/prestataire/form")
     */
    public function prestFormulaire (Request $request){

        $prestataire = new Prestataire();

        $form = $this->createForm( InscriptionPrestataireType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($prestataire);
                $em->flush();

                $prestataire -> setCertification("En attente");

                $em = $this->getDoctrine()->getManager();
                $em->persist($prestataire);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Votre inscription est en cours de validation'
                );

                return $this->render('inscription_prestataire/validation.html.twig');
            }else{
                $this->addFlash(
                    'error',
                    'zerazerazera'
                );
            }
        }

        return $this->render('inscription_prestataire/formulaire.html.twig', [

            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/inscription/prestataire/validation")
     */
    public function prestValid ()
    {
        return $this->render(
            'inscription_prestataire/validation.html.twig'
        );
    }
}
