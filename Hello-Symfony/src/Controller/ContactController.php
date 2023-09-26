<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contacts')]
class ContactController extends AbstractController
{
    #[Route(methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig');
    }

    #[Route('/add', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        return $this->render('contact/create.html.twig');
    }

    #[Route('/{id}', requirements: ["id" => "[1-9][0-9]*"], methods: ['GET'])]
    public function show($id): Response
    {
        return $this->render('contact/show.html.twig');
    }

    #[Route('/{id}/delete', requirements: ["id" => "[1-9][0-9]*"], methods: ['GET', 'POST'])]
    public function delete($id): Response
    {
        return $this->render('contact/delete.html.twig');
    }

    #[Route('/{id}/update', requirements: ["id" => "[1-9][0-9]*"], methods: ['GET', 'POST'])]
    public function update($id): Response
    {
        return $this->render('contact/update.html.twig');
    }
}
