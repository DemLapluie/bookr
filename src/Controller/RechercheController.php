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
     * @Route("/recherche/prestataire", name="recherche_presta")
     */
    public function recherchePresta(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Prestataire::class);

        /*$test = $repo->find(1);
        dump($test);*/

        $prestataires = null;

        $form = $this->createForm( RechercheType::class);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $data = $form->getData();
            dump($data);
            if (!empty($data['jour'])) {
                $data['jour'] = date('N', strtotime($data['jour']));
            }
            $prestataires = $repo->search($data);
            dump($prestataires);



        }
        return $this->render('recherche/recherch_presta.html.twig', [
            'prestataires' =>$prestataires,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/recherche/prestataire/resultat/{profession}")
     */
    public function afficheCatProfession(Request $request, $professsion)
    {
        $repo = $this->getDoctrine()->getRepository(Prestataire::class, $professsion);

        $prestataires = null;

        $form = $this->createForm( RechercheType::class);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            dump($data);
            if (!empty($data['jour'])) {
                $data['jour'] = date('N', strtotime($data['jour']));
            }
            $prestataires = $repo->searchProfession($data);
            dump($prestataires);



        }
        return $this->render('recherche/recherch_presta.html.twig', [
            'prestataires' =>$prestataires,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/recherche/prestataire/resultat")
     */
    /*public function afficheResult(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Prestataire::class);
        $data = $request->query->get('recherche');
        dump($data);
        if (!empty($data['jour'])) {
            $data['jour'] = date('N', strtotime($data['jour']));
        }
        $prestataires = $repo->search($data);
        dump($prestataires);

        return $this->render('recherche/result.html.twig', ['prestataires' => $prestataires]);
    }*/
}
