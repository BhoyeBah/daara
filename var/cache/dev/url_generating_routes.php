<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_dahiras_index' => [[], ['_controller' => 'App\\Controller\\DahirasController::index'], [], [['text', '/dahiras']], [], [], []],
    'app_dahiras_new' => [[], ['_controller' => 'App\\Controller\\DahirasController::new'], [], [['text', '/dahiras/new']], [], [], []],
    'app_dahiras_show' => [['id'], ['_controller' => 'App\\Controller\\DahirasController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dahiras']], [], [], []],
    'app_dahiras_edit' => [['id'], ['_controller' => 'App\\Controller\\DahirasController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dahiras']], [], [], []],
    'app_dahiras_delete' => [['id'], ['_controller' => 'App\\Controller\\DahirasController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dahiras']], [], [], []],
    'app_encadreur_index' => [[], ['_controller' => 'App\\Controller\\EncadreurController::index'], [], [['text', '/encadreur']], [], [], []],
    'app_encadreur_new' => [[], ['_controller' => 'App\\Controller\\EncadreurController::new'], [], [['text', '/encadreur/new']], [], [], []],
    'app_encadreur_show' => [['id'], ['_controller' => 'App\\Controller\\EncadreurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/encadreur']], [], [], []],
    'app_encadreur_edit' => [['id'], ['_controller' => 'App\\Controller\\EncadreurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/encadreur']], [], [], []],
    'app_encadreur_delete' => [['id'], ['_controller' => 'App\\Controller\\EncadreurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/encadreur']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_membres_index' => [[], ['_controller' => 'App\\Controller\\MembresController::index'], [], [['text', '/membres']], [], [], []],
    'app_membres_new' => [[], ['_controller' => 'App\\Controller\\MembresController::new'], [], [['text', '/membres/new']], [], [], []],
    'app_membres_show' => [['id'], ['_controller' => 'App\\Controller\\MembresController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/membres']], [], [], []],
    'app_membres_edit' => [['id'], ['_controller' => 'App\\Controller\\MembresController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/membres']], [], [], []],
    'app_membres_delete' => [['id'], ['_controller' => 'App\\Controller\\MembresController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/membres']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_reunion_index' => [[], ['_controller' => 'App\\Controller\\ReunionController::index'], [], [['text', '/reunion']], [], [], []],
    'app_reunion_new' => [[], ['_controller' => 'App\\Controller\\ReunionController::new'], [], [['text', '/reunion/new']], [], [], []],
    'app_reunion_show' => [['id'], ['_controller' => 'App\\Controller\\ReunionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reunion']], [], [], []],
    'app_reunion_edit' => [['id'], ['_controller' => 'App\\Controller\\ReunionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reunion']], [], [], []],
    'app_reunion_delete' => [['id'], ['_controller' => 'App\\Controller\\ReunionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reunion']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_specialites_index' => [[], ['_controller' => 'App\\Controller\\SpecialitesController::index'], [], [['text', '/specialites']], [], [], []],
    'app_specialites_new' => [[], ['_controller' => 'App\\Controller\\SpecialitesController::new'], [], [['text', '/specialites/new']], [], [], []],
    'app_specialites_show' => [['id'], ['_controller' => 'App\\Controller\\SpecialitesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/specialites']], [], [], []],
    'app_specialites_edit' => [['id'], ['_controller' => 'App\\Controller\\SpecialitesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/specialites']], [], [], []],
    'app_specialites_delete' => [['id'], ['_controller' => 'App\\Controller\\SpecialitesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/specialites']], [], [], []],
    'app_themes_index' => [[], ['_controller' => 'App\\Controller\\ThemesController::index'], [], [['text', '/themes']], [], [], []],
    'app_themes_new' => [[], ['_controller' => 'App\\Controller\\ThemesController::new'], [], [['text', '/themes/new']], [], [], []],
    'app_themes_show' => [['id'], ['_controller' => 'App\\Controller\\ThemesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/themes']], [], [], []],
    'app_themes_edit' => [['id'], ['_controller' => 'App\\Controller\\ThemesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/themes']], [], [], []],
    'app_themes_delete' => [['id'], ['_controller' => 'App\\Controller\\ThemesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/themes']], [], [], []],
    'app_users_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/users/']], [], [], []],
    'app_users_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/users/new']], [], [], []],
    'app_users_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_state' => [['id'], ['_controller' => 'App\\Controller\\UserController::state'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users/state']], [], [], []],
    'app_users_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users/delete']], [], [], []],
    'App\Controller\DahirasController::index' => [[], ['_controller' => 'App\\Controller\\DahirasController::index'], [], [['text', '/dahiras']], [], [], []],
    'App\Controller\DahirasController::new' => [[], ['_controller' => 'App\\Controller\\DahirasController::new'], [], [['text', '/dahiras/new']], [], [], []],
    'App\Controller\DahirasController::show' => [['id'], ['_controller' => 'App\\Controller\\DahirasController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dahiras']], [], [], []],
    'App\Controller\DahirasController::edit' => [['id'], ['_controller' => 'App\\Controller\\DahirasController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dahiras']], [], [], []],
    'App\Controller\DahirasController::delete' => [['id'], ['_controller' => 'App\\Controller\\DahirasController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dahiras']], [], [], []],
    'App\Controller\EncadreurController::index' => [[], ['_controller' => 'App\\Controller\\EncadreurController::index'], [], [['text', '/encadreur']], [], [], []],
    'App\Controller\EncadreurController::new' => [[], ['_controller' => 'App\\Controller\\EncadreurController::new'], [], [['text', '/encadreur/new']], [], [], []],
    'App\Controller\EncadreurController::show' => [['id'], ['_controller' => 'App\\Controller\\EncadreurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/encadreur']], [], [], []],
    'App\Controller\EncadreurController::edit' => [['id'], ['_controller' => 'App\\Controller\\EncadreurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/encadreur']], [], [], []],
    'App\Controller\EncadreurController::delete' => [['id'], ['_controller' => 'App\\Controller\\EncadreurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/encadreur']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\MembresController::index' => [[], ['_controller' => 'App\\Controller\\MembresController::index'], [], [['text', '/membres']], [], [], []],
    'App\Controller\MembresController::new' => [[], ['_controller' => 'App\\Controller\\MembresController::new'], [], [['text', '/membres/new']], [], [], []],
    'App\Controller\MembresController::show' => [['id'], ['_controller' => 'App\\Controller\\MembresController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/membres']], [], [], []],
    'App\Controller\MembresController::edit' => [['id'], ['_controller' => 'App\\Controller\\MembresController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/membres']], [], [], []],
    'App\Controller\MembresController::delete' => [['id'], ['_controller' => 'App\\Controller\\MembresController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/membres']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\ResetPasswordController::request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'App\Controller\ResetPasswordController::checkEmail' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'App\Controller\ResetPasswordController::reset' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'App\Controller\ReunionController::index' => [[], ['_controller' => 'App\\Controller\\ReunionController::index'], [], [['text', '/reunion']], [], [], []],
    'App\Controller\ReunionController::new' => [[], ['_controller' => 'App\\Controller\\ReunionController::new'], [], [['text', '/reunion/new']], [], [], []],
    'App\Controller\ReunionController::show' => [['id'], ['_controller' => 'App\\Controller\\ReunionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reunion']], [], [], []],
    'App\Controller\ReunionController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReunionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reunion']], [], [], []],
    'App\Controller\ReunionController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReunionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reunion']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SpecialitesController::index' => [[], ['_controller' => 'App\\Controller\\SpecialitesController::index'], [], [['text', '/specialites']], [], [], []],
    'App\Controller\SpecialitesController::new' => [[], ['_controller' => 'App\\Controller\\SpecialitesController::new'], [], [['text', '/specialites/new']], [], [], []],
    'App\Controller\SpecialitesController::show' => [['id'], ['_controller' => 'App\\Controller\\SpecialitesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/specialites']], [], [], []],
    'App\Controller\SpecialitesController::edit' => [['id'], ['_controller' => 'App\\Controller\\SpecialitesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/specialites']], [], [], []],
    'App\Controller\SpecialitesController::delete' => [['id'], ['_controller' => 'App\\Controller\\SpecialitesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/specialites']], [], [], []],
    'App\Controller\ThemesController::index' => [[], ['_controller' => 'App\\Controller\\ThemesController::index'], [], [['text', '/themes']], [], [], []],
    'App\Controller\ThemesController::new' => [[], ['_controller' => 'App\\Controller\\ThemesController::new'], [], [['text', '/themes/new']], [], [], []],
    'App\Controller\ThemesController::show' => [['id'], ['_controller' => 'App\\Controller\\ThemesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/themes']], [], [], []],
    'App\Controller\ThemesController::edit' => [['id'], ['_controller' => 'App\\Controller\\ThemesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/themes']], [], [], []],
    'App\Controller\ThemesController::delete' => [['id'], ['_controller' => 'App\\Controller\\ThemesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/themes']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/users/']], [], [], []],
    'App\Controller\UserController::new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/users/new']], [], [], []],
    'App\Controller\UserController::show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'App\Controller\UserController::state' => [['id'], ['_controller' => 'App\\Controller\\UserController::state'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users/state']], [], [], []],
    'App\Controller\UserController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users/delete']], [], [], []],
];
