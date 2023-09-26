<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contacts')]
class ContactController extends AbstractController
{
    #[Route(methods: ['GET'])]
    public function index(): Response
    {
        /** @var Contact[] $entities */
        $entities = [
            (new Contact())->setId(1)->setFirstname('Bill')->setLastname('Gates'),
            (new Contact())->setId(2)->setFirstname('Steve')->setLastname('Jobs'),
        ];

        return $this->render('contact/index.html.twig', [
            'contacts' => $entities,
        ]);
    }

    #[Route('/add', methods: ['GET', 'POST'])]
    public function create(): Response
    {
        return $this->render('contact/create.html.twig');
    }

    #[Route('/{id}', requirements: ["id" => "[1-9][0-9]*"], methods: ['GET'])]
    public function show($id): Response
    {
        $entity = (new Contact())->setId($id)->setFirstname('Bill')->setLastname('Gates');
        return $this->render('contact/show.html.twig', [
            'contact' => $entity
        ]);
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
