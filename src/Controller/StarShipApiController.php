<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as ControllerAbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarShipApiController extends ControllerAbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $starships=[
            new Starship(
                1,
                'something something',
                'garden',
                'jean-luc',
                'under construction',
            ),
            new Starship(
                2,
                'something something',
                'garden',
                'James',
                'fixed',
            ),
            new Starship(
                3,
                'something something',
                'garden',
                'jean-luc',
                'taken over by',
            ),
        ];
        // $starships = [
        //     [
        //         'name' => 'something something',
        //         'class' => 'garden',
        //         'captain' => 'jean-luc',
        //         'status' => 'under construction',
        //     ],
        //     [
        //         'name' => 'something something',
        //         'class' => 'Latte',
        //         'captain' => 'James',
        //         'status' => 'under construction',
        //     ],
        //     [
        //         'name' => 'something something',
        //         'class' => 'garden',
        //         'captain' => 'jean-luc',
        //         'status' => 'taken over by',
        //     ],
        // ];
// internally $this->json()  uses the PHP json_encode() and that fnction canot handle private properties so the output is 
// [
//     {},
//     {},
//     {}
// ]
        return $this->json($starships);
    }
}
