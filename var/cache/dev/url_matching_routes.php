<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/insert' => [[['_route' => 'insert', '_controller' => 'App\\Controller\\AdminController::insert'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ErrorController::show'], null, null, null, false, false, null]],
        '/liste' => [[['_route' => 'liste', '_controller' => 'App\\Controller\\ListeProduitsController::index'], null, null, null, false, false, null]],
        '/distrib' => [[['_route' => 'distributeurs', '_controller' => 'App\\Controller\\ListeProduitsController::listedistributeur'], null, null, null, false, false, null]],
        '/eager' => [[['_route' => 'eager', '_controller' => 'App\\Controller\\ListeProduitsController::eager'], null, null, null, false, false, null]],
        '/apitest' => [[['_route' => 'apitest', '_controller' => 'App\\Controller\\ListeProduitsController::apiTest'], null, null, null, false, false, null]],
        '/mail' => [[['_route' => 'mail', '_controller' => 'App\\Controller\\MailController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/testroute' => [[['_route' => 'index', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|update/([^/]++)(*:194)'
                    .'|delete/([^/]++)(*:217)'
                .')'
                .'|/hello/([^/]++)/([a-z]{2,50})(?:/([^/]++))?(*:269)'
                .'|/langue/(en|fr|de)(*:295)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'update', '_controller' => 'App\\Controller\\AdminController::update'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'hello', 'prenom' => '', '_controller' => 'App\\Controller\\TestController::hello'], ['age', 'nom', 'prenom'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        295 => [
            [['_route' => 'langue', '_controller' => 'App\\Controller\\TestController::langue'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
