<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starShipCount = 456;

        $myShip = [
            'name' => 'something something',
            'class' => 'garden',
            'captain' => 'jean-luc',
            'status' => 'under construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarShips' => $starShipCount,
            'myShip' => $myShip,
        ]);
    }
}
