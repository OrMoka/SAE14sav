<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GrandControlleurController extends AbstractController
{
    /**
     * @Route("/grandcontrolleur", name="grand_controlleur")
     */
    public function index(): Response
    {
        return $this->render('grand_controlleur/index.html.twig');
    }
    /**
     * @Route("/Accueil", name="accueil")
     */
	public function home(): Response
	{
		return $this->render('grand_controlleur/Accueil.html.twig');
	}
    /**
     * @Route("/CV", name="cv")
     */
	public function CV(): Response
	{
		return $this->render('souspage/CV.html.twig');
	}
	/**
     * @Route("/Portfolio", name="folio")
     */
	public function port(): Response
	{
		return $this->render('souspage/Folio.html.twig');
	}
    /**
     * @Route("/AdministrerS1", name="adminS1")
     */
	public function admin1(): Response
	{
		return $this->render('souspage/amdininistrerpre.html.twig');
	}
    /**
     * @Route("/ConnecterS1", name="connectS1")
     */
	public function connecter1(): Response
	{
		return $this->render('souspage/connecterpre.html.twig');
	}
    /**
     * @Route("/ProgrammationS1", name="progS1")
     */
	public function prog1(): Response
	{
		return $this->render('souspage/programmerrpre.html.twig');
	}
    /**
     * @Route("/Passion", name="passion")
     */
	public function passion(): Response
	{
		return $this->render('souspage/Passion.html.twig');
	}

}
