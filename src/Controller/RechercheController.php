<?php

namespace App\Controller;

use App\Entity\Prestataire;
use App\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/recherche/prestataire")
     */
    public function recherchePresta(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Prestataire::class);

        $test = $repo->find(1);
        dump($test);

        $form = $this->createForm( RechercheType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $data = $form->getData();
            dump($data);
            $data['jour']  = date('N', strtotime($data['jour']));
            $prestataires = $repo->search($data);
            dump($prestataires);

        }
        return $this->render('recherche/recherch_presta.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
