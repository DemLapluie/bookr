<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionPrestataireController extends AbstractController
{
    /**
     * @Route("/inscription/prestataire", name="inscription_prestataire")
     */
    public function index()
    {
        return $this->render('inscription_prestataire/index.html.twig', [
            'controller_name' => 'InscriptionPrestataireController',
        ]);
    }
}
