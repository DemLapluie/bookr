<?php

namespace App\Controller;

use App\Entity\Prestataire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AffichagePrestataireController extends AbstractController
{
    /**
     * @Route("/affichage/prestataire/{id}")
     */
    public function affichagePrestataire($id)
    {

        $em = $this->getDoctrine()->getManager();
        $prestataire = $em->find(Prestataire::class, $id);

        return $this->render('affichage_prestataire/index.html.twig',
            [
                'prestataire' => $prestataire,
            ]
        );
    }
}
