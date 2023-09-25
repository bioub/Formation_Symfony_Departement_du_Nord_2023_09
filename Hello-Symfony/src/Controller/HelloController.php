<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route("/hello/{name}", requirements: ['name' => '[a-zA-Z]+'])]
    public function world($name): Response
    {
        $response = new Response();

        $response->setStatusCode(200);
        $response->setContent("Hello, $name !");
        $response->headers->set('Content-type', 'text/plain');

        return $response;
    }


}