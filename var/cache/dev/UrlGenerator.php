<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_commentaire_index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire/']], [], []],
    'app_commentaire_new' => [[], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['text', '/commentaire/new']], [], []],
    'app_commentaire_show' => [['idCom'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'idCom'], ['text', '/commentaire']], [], []],
    'app_commentaire_edit' => [['idCom'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCom'], ['text', '/commentaire']], [], []],
    'app_commentaire_delete' => [['idCom'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'idCom'], ['text', '/commentaire']], [], []],
    'app_newssr' => [[], ['_controller' => 'App\\Controller\\NewssrController::index'], [], [['text', '/newssr']], [], []],
    'app_post_index' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/post/']], [], []],
    'app_postfront_index' => [[], ['_controller' => 'App\\Controller\\PostController::indexFront'], [], [['text', '/post/front']], [], []],
    'app_post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/post/new']], [], []],
    'app_post_show' => [['idPost'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'idPost'], ['text', '/post']], [], []],
    'app_post_edit' => [['idPost'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idPost'], ['text', '/post']], [], []],
    'app_post_delete' => [['idPost'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'idPost'], ['text', '/post']], [], []],
    'app_r' => [[], ['_controller' => 'App\\Controller\\RController::index'], [], [['text', '/r']], [], []],
    'app_reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], []],
    'app_reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], []],
    'app_reclamation_show' => [['idRec'], ['_controller' => 'App\\Controller\\ReclamationController::show'], ['idRec' => '\\d+'], [['variable', '/', '\\d+', 'idRec'], ['text', '/reclamation']], [], []],
    'app_reclamation_edit' => [['idRec'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], ['idRec' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'idRec'], ['text', '/reclamation']], [], []],
    'app_reclamation_delete' => [['idRec'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], ['idRec' => '\\d+'], [['variable', '/', '\\d+', 'idRec'], ['text', '/reclamation']], [], []],
    'print_reclamations' => [[], ['_controller' => 'App\\Controller\\ReclamationController::exportAllReclamationsPDF'], ['id' => '\\d+'], [['text', '/reclamation/printallreclamations']], [], []],
    'app_reclr' => [[], ['_controller' => 'App\\Controller\\ReclrController::index'], [], [['text', '/reclr']], [], []],
    'app_t' => [[], ['_controller' => 'App\\Controller\\TController::index'], [], [['text', '/t']], [], []],
];
