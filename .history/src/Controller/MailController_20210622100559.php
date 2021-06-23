<?php 
 
namespace App\Controller; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Component\HttpFoundation\Response; 
 
class MailController extends AbstractController 
{ 
    /** 
     * @Route("/mail", name="mail") 
     */ 
    public function index(\Swift_Mailer $mailer) 
    { 
        $message = (new \Swift_Message('Hello Email de notre Symfony ! ')) 
        ->setFrom('notreappli@symfony.com') 
        ->setTo('amilcar') 
        ->setBody( 
            $this->renderView( 
 
                'emails/registration.html.twig' 
            ), 
            'text/html' 
        ); 
        $mailer->send($message); 
        return new Response('message envoyé');  
    } 
} 