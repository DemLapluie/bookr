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
     * @Route("/inscription/prestataire")
     */
    public function register(Request $request){

        $prestataire = new Prestataire();

        $form = $this->createForm( InscriptionPrestataireType::class, $prestataire);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){
                $prestataire -> setCertification("En attente");

                $this->addFlash(
                    'success',
                    'Votre inscription est en cours de validation'
                );
                return $this->redirectToRoute('app_index_index');
            }else{
                $this->addFlash(
                    'error',
                    'zerazerazera'
                );
            }
        }

        return $this->render('security/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
