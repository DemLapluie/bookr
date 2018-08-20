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


        return $this->render('security/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
