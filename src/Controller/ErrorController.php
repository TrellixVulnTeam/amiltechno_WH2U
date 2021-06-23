<?php 
 
namespace App\Controller; 
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\ErrorHandler\Exception\FlattenException; 

class ErrorController extends AbstractController 
{ 
    /** 
     * @Route("/error", name="error") 
     */ 
    static public function show(FlattenException $exception) 
    { 
 
        return new Response($exception->getMessage());  
 
        $message=$exception->getMessage();
 
        return render('Exception/index.html.twig', ['message'=>$message]);
    } 
} 