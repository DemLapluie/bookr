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
        $form = $this->createForm(RechercheType::class);

        return $this->render('recherche/index.html.twig', [
            'controller_name' => 'RechercheController',
            'form' => $form->createView()
        ]);
    }
}
