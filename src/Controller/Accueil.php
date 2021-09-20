<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Accueil extends AbstractController
{
  /**
   * @Route("/", name="root")
   */
  public function index(): Response
  {
    return $this->render("accueil/accueil.html.twig", [
      'title'
    ]);
  }
}
