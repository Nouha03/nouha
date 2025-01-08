<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TemplateController extends AbstractController
{
    #[Route('/template', name: 'app_template')]
    public function index(): Response
    {
       $text = "Hello This is Home";
       $tabYear=[2020,2021,2022,2023];
        return $this->render('template/index.html.twig', [
            "text"=> $text,
            "years"=>$tabYear
        ]);
    }
}
