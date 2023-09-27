<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Manager\ContactManager;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contacts')]
class ContactController extends AbstractController
{
    #[Route(methods: ['GET'])]
    public function index(ContactRepository $repository): Response
    {
        $entities = $repository->findBy([], limit: 100);

        return $this->render('contact/index.html.twig', [
            'contacts' => $entities,
        ]);
    }

    #[Route('/add', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        // $request->getSession()->set('token', '12143FDGDTG');
        return $this->render('contact/create.html.twig');
    }

    #[Route('/{id}', requirements: ["id" => "[1-9][0-9]*"], methods: ['GET'])]
    public function show($id, ContactRepository $repository): Response
    {
        $entity = $repository->find($id);

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
