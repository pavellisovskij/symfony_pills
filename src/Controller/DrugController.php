<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrugController extends AbstractController
{
    /**
     * @Route("/drug", name="drug")
     */
    public function index(): Response
    {


        return $this->render('drug/index.html.twig', [
            'controller_name' => 'DrugController',
        ]);
    }
}
