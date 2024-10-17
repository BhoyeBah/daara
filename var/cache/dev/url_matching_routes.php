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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dahiras' => [[['_route' => 'app_dahiras_index', '_controller' => 'App\\Controller\\DahirasController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dahiras/new' => [[['_route' => 'app_dahiras_new', '_controller' => 'App\\Controller\\DahirasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/encadreur' => [[['_route' => 'app_encadreur_index', '_controller' => 'App\\Controller\\EncadreurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/encadreur/new' => [[['_route' => 'app_encadreur_new', '_controller' => 'App\\Controller\\EncadreurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/specialites' => [[['_route' => 'app_specialites_index', '_controller' => 'App\\Controller\\SpecialitesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/specialites/new' => [[['_route' => 'app_specialites_new', '_controller' => 'App\\Controller\\SpecialitesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null]],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/dahiras/([^/]++)(?'
                    .'|(*:222)'
                    .'|/edit(*:235)'
                    .'|(*:243)'
                .')'
                .'|/encadreur/([^/]++)(?'
                    .'|(*:274)'
                    .'|/edit(*:287)'
                    .'|(*:295)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:340)'
                .'|/specialites/([^/]++)(?'
                    .'|(*:372)'
                    .'|/edit(*:385)'
                    .'|(*:393)'
                .')'
                .'|/users/(?'
                    .'|([^/]++)(?'
                        .'|(*:423)'
                        .'|/edit(*:436)'
                    .')'
                    .'|state/([^/]++)(*:459)'
                    .'|delete/([^/]++)(*:482)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        222 => [[['_route' => 'app_dahiras_show', '_controller' => 'App\\Controller\\DahirasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_dahiras_edit', '_controller' => 'App\\Controller\\DahirasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'app_dahiras_delete', '_controller' => 'App\\Controller\\DahirasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_encadreur_show', '_controller' => 'App\\Controller\\EncadreurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_encadreur_edit', '_controller' => 'App\\Controller\\EncadreurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        295 => [[['_route' => 'app_encadreur_delete', '_controller' => 'App\\Controller\\EncadreurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        372 => [[['_route' => 'app_specialites_show', '_controller' => 'App\\Controller\\SpecialitesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        385 => [[['_route' => 'app_specialites_edit', '_controller' => 'App\\Controller\\SpecialitesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'app_specialites_delete', '_controller' => 'App\\Controller\\SpecialitesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        423 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        436 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'app_users_state', '_controller' => 'App\\Controller\\UserController::state'], ['id'], ['POST' => 0], null, false, true, null]],
        482 => [
            [['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];