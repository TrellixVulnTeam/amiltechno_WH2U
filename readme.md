Ajouter les roles : aller dans registrerController

ANCIEN YAML Pour sauvegarder
security: 
    encoders: 
        App\Entity\User: 
            algorithm: auto 
 
    # https://symfony.com/doc/current/security.html#where-do-users-come-from-user-providers 
    providers: 
        # used to reload user from session & other features (e.g. switch_user) 
        app_user_provider: 
            entity: 
                class: App\Entity\User 
                property: username 
    firewalls: 
        dev: 
            pattern: ^/(_(profiler|wdt)|css|images|js)/ 
            security: false 
        main: 
            anonymous: lazy 
            provider: app_user_provider 
            guard: 
                authenticators: 
                    - App\Security\CustomAuthenticator 
            logout: 
                path: app_logout 
            access_denied_handler: App\Security\AccessDeniedHandler 

 
            # activate different ways to authenticate 
            # https://symfony.com/doc/current/security.html#firewalls-authentication 
 
            # https://symfony.com/doc/current/security/impersonating_user.html 
            # switch_user: true 
 
    # Easy way to control access for large sections of your site 
    # Note: Only the *first* access control that matches will be used 
    access_control: 
        # - { path: ^/admin, roles: ROLE_ADMIN } 
        
        # - { path: ^/profile, roles: ROLE_USER } 

        # - { path: ^/insert, roles: ROLE_ADMIN } 
         
        # - { path: ^/update, roles: ROLE_ADMIN } 
          
        # - { path: ^/delete, roles: ROLE_ADMIN } 

YAML DU LIVRE pour l'API
security: 
    # https://symfony.com/doc/current/security.html#where-do-users-come-from-user-providers 
    encoders: 
        Symfony\Component\Security\Core\User\User: plaintext 
        App\Entity\User: 
             algorithm: bcrypt 
             cost: 12 
 
    providers: 
        api_key_user_provider: 
            entity: 
                class: App\Entity\User 
                property: apiToken 
    firewalls: 
        dev: 
            pattern: ^/(_(profiler|wdt)|css|images|js)/ 
            security: false 
 
        main: 
            anonymous: ~ 
            provider: 
                api_key_user_provider 
            guard: 
                authenticators: 
                    - App\Security\TokenAuthenticator 
            logout: 
                path: app_logout 
    access_control: 
- { path: ^/apitest, roles: ROLE_ADMIN } 


# DATA FIXTURE : LOAD USER DATA appli normale

<?php 
namespace App\DataFixtures; 
 
use Doctrine\Bundle\FixturesBundle\Fixture; 
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface; 
use Doctrine\Common\DataFixtures\DependentFixtureInterface; 
use Doctrine\Persistence\ObjectManager; 
 
use App\Entity\User;  
use Symfony\Component\DependencyInjection\ContainerAwareInterface; 
use Symfony\Component\DependencyInjection\ContainerInterface; 
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface; 
 
// class LoadImmatriculationsData extends Fixture 
// { 
class LoadUserData extends Fixture implements FixtureGroupInterface 
{ 
    protected $encoder; 
    public function __construct(UserPasswordEncoderInterface $encoder ) 
    { 
        $this->encoder=$encoder; 
 
    } 
 
    public function load(ObjectManager $manager) 
    { 
$users=[['username'=>'lucas','password'=>'adminpass',
'apitoken'=>'12345', 'roles'=>['ROLE_ADMIN']]];  
 
        foreach($users as $key=> $user){ 
            $objUser = new User; 
            $objUser->setUsername($user['username']); 
 
$objUser->setPassword($this->encoder->encodePassword($objUser, 
$user['password'])); 
            $objUser->setapiToken($user['apitoken']); 
            $objUser->setRoles($user['roles']); 
 
            $manager->persist($objUser); 
        } 
 
 
  // mise à jour de la base avec tous les persists 
        $manager->flush(); 
 
 
    } 
    public static function getGroups():array 
    { 
 
        return ['group3'];  
    } 
}


# DATA FIXTURE : LOAD USER DATA ABOUT API

<?php 
namespace App\DataFixtures; 
 
use Doctrine\Bundle\FixturesBundle\Fixture; 
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface; 
use Doctrine\Common\DataFixtures\DependentFixtureInterface; 
use Doctrine\Persistence\ObjectManager; 
 
use App\Entity\User;  
use Symfony\Component\DependencyInjection\ContainerAwareInterface; 
use Symfony\Component\DependencyInjection\ContainerInterface; 
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface; 
 
// class LoadImmatriculationsData extends Fixture 
// { 
class LoadUserData extends Fixture implements FixtureGroupInterface 
{ 
    protected $encoder; 
    public function __construct(UserPasswordEncoderInterface $encoder ) 
    { 
        $this->encoder=$encoder; 
 
    } 
 
    public function load(ObjectManager $manager) 
    { 
$users=[['username'=>'lucas','password'=>'adminpass',
'apitoken'=>'12345', 'roles'=>['ROLE_ADMIN']]];  
 
        foreach($users as $key=> $user){ 
            $objUser = new User; 
            $objUser->setUsername($user['username']); 
 
$objUser->setPassword($this->encoder->encodePassword($objUser, 
$user['password'])); 
            $objUser->setapiToken($user['apitoken']); 
            $objUser->setRoles($user['roles']); 
 
            $manager->persist($objUser); 
        } 
 
 
  // mise à jour de la base avec tous les persists 
        $manager->flush(); 
 
 
    } 
    public static function getGroups():array 
    { 
 
        return ['group3'];  
    } 
} 