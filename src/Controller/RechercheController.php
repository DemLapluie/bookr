<?php

namespace App\Controller;

use App\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche")
     */
    public function index()
    {
        $form = $this->createForm( RechercheType::class);

        return $this->render('recherche/index.html.twig', [
            'form' => $form->createView(),
            ]);

    }

    /**
     * @Route("/recherche/presta")
     */
    public function recherchePresta()
    {
        return $this->render('recherche/prestataire.html.twig');
    }
}
