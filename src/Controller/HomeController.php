<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/bonjour/{prenom}/age/{age}", name="hello")
     * @Route("/salut", name="hello_base")
     * @Route("/bonjour/{prenom}", name="hello_prenom")
     */ 
    public function hello($prenom = "anonyme", $age = 0){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
            );
        return new Response("Bonjour " . $prenom . " vous avez " . $age . " ans");
    }

    /**
     * @Route("/", name="homepage")
     *
     * @return void
     */
    public function home(){
        $prenoms = ["Laure" => 55, "Nicolas" => 57, "Xavier" => 25];
        return $this->render(
            'home.html.twig' , 
            [
                "title" => "Bonjour tout le monde!!!", 
                'age' => 16, 
                'tableau' => $prenoms
            ]
        );
    }
}