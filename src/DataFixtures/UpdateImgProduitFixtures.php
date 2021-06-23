<?php 
 
namespace App\DataFixtures; 
 
use Doctrine\Bundle\FixturesBundle\Fixture; 
use Doctrine\Persistence\ObjectManager; 
use App\Data\ListeProduits; 
use App\Entity\Produit; 
use Doctrine\Common\DataFixtures\FixtureInterface; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface; 
use Symfony\Component\DependencyInjection\ContainerInterface; 
 
 
class UpdateImgProduitFixtures extends Fixture implements 
FixtureInterface, ContainerAwareInterface 
{ 
    private $container; 
 
 
 
      public function setContainer(ContainerInterface $container = null) 
      { 
        $this->container = $container; 
      } 
 
    public function load(ObjectManager $manager) 
    { 
        $em = $this->container->get('doctrine.orm.entity_manager'); 
        $repProduit=$em->getRepository(Produit::class); 
        $listeProduits=$repProduit->findAll();  
 
        foreach( $listeProduits as $monProduit ) { 
 
           switch ($monProduit->getNom()) { 
               case 'imprimantes': 
                $monProduit->setLienImage("imprime.jpg"); 
                   break; 
               case 'cartouches encre': 
                $monProduit->setLienImage("cart.png"); 
                   break; 
               case 'ordinateurs': 
                $monProduit->setLienImage("ordi.png"); 
                   break; 
               case 'écrans': 
                $monProduit->setLienImage("ecran.png"); 
                   break; 
               case 'claviers': 
                $monProduit->setLienImage("clavier.png"); 
                   break; 
               case 'souris': 
                $monProduit->setLienImage("souris.png"); 
                   break; 
 
           } 
           $manager->persist($monProduit); 
        } 
        $manager->flush(); 
    } 
} 