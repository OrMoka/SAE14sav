<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GrandControlleurController extends AbstractController
{
    /**
     * @Route("/grand/controlleur", name="grand_controlleur")
     */
    public function index(): Response
    {
        return $this->render('grand_controlleur/index.html.twig');
    }
    /**
     * @Route("/", name="home")
     */
	public function home(): Response
	{
		return $this->render('grand_controlleur/Accueil.html.twig');
	}
	
}
