<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/insert' => [[['_route' => 'insert', '_controller' => 'App\\Controller\\AdminController::insert'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/liste' => [[['_route' => 'liste', '_controller' => 'App\\Controller\\ListeProduitsController::index'], null, null, null, false, false, null]],
        '/distrib' => [[['_route' => 'distributeurs', '_controller' => 'App\\Controller\\ListeProduitsController::listedistributeur'], null, null, null, false, false, null]],
        '/eager' => [[['_route' => 'eager', '_controller' => 'App\\Controller\\ListeProduitsController::eager'], null, null, null, false, false, null]],
        '/apitest' => [[['_route' => 'apitest', '_controller' => 'App\\Controller\\ListeProduitsController::apiTest'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/testroute' => [[['_route' => 'index', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|update/([^/]++)(*:32)'
                    .'|delete/([^/]++)(*:54)'
                .')'
                .'|/hello/([^/]++)/([a-z]{2,50})(?:/([^/]++))?(*:105)'
                .'|/langue/(en|fr|de)(*:131)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'update', '_controller' => 'App\\Controller\\AdminController::update'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        105 => [[['_route' => 'hello', 'prenom' => '', '_controller' => 'App\\Controller\\TestController::hello'], ['age', 'nom', 'prenom'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        131 => [
            [['_route' => 'langue', '_controller' => 'App\\Controller\\TestController::langue'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
