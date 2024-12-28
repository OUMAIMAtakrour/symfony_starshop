<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homePgae(): Response
    {
        return new Response('<strong>Starshop</strong>: something that is supposed to make sense');
    }
}
