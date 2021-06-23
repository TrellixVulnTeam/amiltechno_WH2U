<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Flex\Response;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\BrowserKit\Response;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test",  methods={"GET","POST"})
     */
    public function index(Request $request)
    {
        return $this->render('test/index.html.twig');
    }

    /**
     * @Route("/hello/{age}/{nom}/{prenom}", name="hello", requirements={"nom"="[a-z]{2,50}"}, methods={"GET","POST"})
     */
    public function hello(Reuest $request, int $age, $nom, $prenom = '')
    {
        return $this->render('test/hello.html.twig', [
            'nom' => $nom,
            'prenom' => $prenom,
          'age' => $age,
          'messageHtml' => '<h3>je vais tester raw</h3>',
          'monTableau' => ['profession' => 'formateur', 'sexe' => 'M', 'specialité' => 'Symfony'],
        ]);
    }

    /** 
    * @Route("/langue/{_locale}", name="langue", requirements={"_locale"="en|fr|de"}) 
    */ 
    public function langue(Request $request) 
    { 
 
 
          // Récupérer la locale du projet 
       
          $locale=$request->getLocale('fr'); 
 
          // Afficher la locale 
 
          return new Response("langue parlé: $locale"); 
 
    }     
}
