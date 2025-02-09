<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
  #[Route('/')]
  public function homepage()
  {

    $starshipCount = 457;
    $myShip = [
      'name' => 'Star Shop Name',
      'class' => 'Garden',
      'status' => 'In Progress',
    ];
    return $this->render('main/homepage.html.twig', [
      'numberOfStarShips' => $starshipCount,
      'myship' => $myShip
    ]);
  }
}
