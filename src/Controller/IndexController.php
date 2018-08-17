<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render(
            'index/index.html.twig'
        );
    }

    /**
     * @Route("/accueil")
     */
    public function accueil()
    {
        return $this->render(
            'index/accueil.html.twig'
        );
    }
}
