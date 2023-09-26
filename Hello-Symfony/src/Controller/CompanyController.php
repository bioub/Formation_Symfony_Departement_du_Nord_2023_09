<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
    #[Route('/companies')]
    public function index(CompanyRepository $repository): Response
    {
        $entities = $repository->findAll();

        return $this->render('company/index.html.twig', [
            'companies' => $entities,
        ]);
    }
}
