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
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/newssr' => [[['_route' => 'app_newssr', '_controller' => 'App\\Controller\\NewssrController::index'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/front' => [[['_route' => 'app_postfront_index', '_controller' => 'App\\Controller\\PostController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/s/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\PostController::searchJeux'], null, null, null, false, false, null]],
        '/r' => [[['_route' => 'app_r', '_controller' => 'App\\Controller\\RController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/printallreclamations' => [[['_route' => 'print_reclamations', '_controller' => 'App\\Controller\\ReclamationController::exportAllReclamationsPDF'], null, null, null, false, false, null]],
        '/reclr' => [[['_route' => 'app_reclr', '_controller' => 'App\\Controller\\ReclrController::index'], null, null, null, false, false, null]],
        '/t' => [[['_route' => 'app_t', '_controller' => 'App\\Controller\\TController::index'], null, null, null, false, false, null]],
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
                .'|/commentaire/(?'
                    .'|new/(\\d+)(*:194)'
                    .'|([^/]++)(?'
                        .'|(*:213)'
                        .'|/edit(*:226)'
                        .'|(*:234)'
                    .')'
                .')'
                .'|/post/(?'
                    .'|([^/]++)(?'
                        .'|(*:264)'
                        .'|/(?'
                            .'|edit(*:280)'
                            .'|masquer(*:295)'
                            .'|afficher(*:311)'
                        .')'
                        .'|(*:320)'
                    .')'
                    .'|commentaire/([^/]++)(*:349)'
                    .'|stats(*:362)'
                .')'
                .'|/reclamation/(?'
                    .'|(\\d+)(*:392)'
                    .'|(\\d+)/edit(*:410)'
                    .'|(\\d+)(*:423)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'app_commentaire_new_one', '_controller' => 'App\\Controller\\CommentaireController::new1'], ['idPost'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        213 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idCom'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idCom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idCom'], ['POST' => 0], null, false, true, null]],
        264 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['idPost'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['idPost'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        295 => [[['_route' => 'masquer_evenement', '_controller' => 'App\\Controller\\PostController::masquerEvent'], ['idPost'], null, null, false, false, null]],
        311 => [[['_route' => 'afficher_evenement', '_controller' => 'App\\Controller\\PostController::afficherEvent'], ['idPost'], null, null, false, false, null]],
        320 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['idPost'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_postcom', '_controller' => 'App\\Controller\\PostController::PackItem'], ['idPost'], null, null, false, true, null]],
        362 => [[['_route' => 'stats', '_controller' => 'App\\Controller\\PostController::statistiques'], [], null, null, false, false, null]],
        392 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idRec'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idRec'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        423 => [
            [['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idRec'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
