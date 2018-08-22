<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription")
     */
    public function register(
        Request $request,
        UserPasswordEncoderInterface $passwordEncoder
    )
    {
        $client = new Client();
        $form = $this->createForm(InscriptionType::class, $client);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){
                // Encode le mdp à partir de la config encoders
                // pour l'objet Client à partir de son mot de pass en clair reçu dan sle formualire
                $mdp = $passwordEncoder->encodePassword(
                    $client,
                    $client->getPlainPassword()
                );

                $client->setMdp($mdp);

                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();

                $this->addFlash(
                    'success',
                    'azerazerazerazer'
                );
                return $this->redirectToRoute('app_index_index');
            }else{
                $this->addFlash(
                    'error',
                    'zerazerazera'
                );
            }
        }

        return $this->render('security/prestataire.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
