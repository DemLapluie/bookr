<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class SecurityController
 * @package App\Controller
 */
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
        /* inscription*/

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

                $client
                    ->setPassword($mdp);


                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Votre compte a bien été créé.'
                );

                return $this->redirectToRoute('app_index_accueil');
            }else{
                $this->addFlash(
                    'error',
                    'le formulaire contient des erreurs.'
                );
            }
        }

        return $this->render(
            'security/register.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/connexion")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        // traitement du formulaire par Security
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if (!empty($error)) {
            $this->addFlash('error', 'Identifiants incorrects');
        }

        return $this->render(
            'security/login.html.twig',
            [
                'last_username' => $lastUsername
            ]
        );
    }
}


