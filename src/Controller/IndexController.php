<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #routage par attribut
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return new Response(content: "Hello World !");
    }
    #[Route('/about/{entier}', name: 'app_about', requirements:['entier' => '\d+'])]
    public function about(int $entier = 1): Response
    {
        return new Response( content: "Hello " .$entier);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return new Response(content: "Welcome to Contact!");
    }
    #[Route('/dummy', name: 'app_dummy')]
    public function dummy(): Response
    {
        $text="hello this is home";
        $tabyear=[2020,2021,2022,2023];
        return $this->render(view: 'index/dummy.html.twig', parameters:[
            "text"=>$text,
            "years"=>$tabyear
        ]);
    }
    #[Route('/add-book', name: 'app_book_add')]
    public function addBook(): Response
    {
        $book= new Book();
        $bookForm=$this->createFormBuilder($book)
        ->add("name", TextType::class)
        ->getForm(;)

        return $this->render(view: 'dummy/book.html.twig', parameters:[
            "bookForm"=>$bookForm
        ]);
    }  
}
