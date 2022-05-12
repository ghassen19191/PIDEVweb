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
        '/admin/profil/edition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, true, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, true, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, null, null, true, false, null]],
        '/admin/utilisateur/ajouter' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'app_cartindex', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/delete' => [[['_route' => 'app_cartdelete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/chartsjs' => [[['_route' => 'app_chartsjs', '_controller' => 'App\\Controller\\ChartsjsController::index'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'chat_index', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, false, false, null]],
        '/chat/message' => [[['_route' => 'chat_message', '_controller' => 'App\\Controller\\ChatController::message'], null, null, null, false, false, null]],
        '/chat/frame' => [[['_route' => 'chat_frame', '_controller' => 'App\\Controller\\ChatController::chatframe'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dev' => [[['_route' => 'app_dev_index', '_controller' => 'App\\Controller\\DevController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dev/new' => [[['_route' => 'app_dev_new', '_controller' => 'App\\Controller\\DevController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/newsletters/failed' => [[['_route' => 'failed', '_controller' => 'App\\Controller\\FailedController::index'], null, null, null, false, false, null]],
        '/game/r' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\GameController::recherche'], null, null, null, false, false, null]],
        '/game/gallery' => [[['_route' => 'galery', '_controller' => 'App\\Controller\\GameController::galery'], null, ['GET' => 0], null, false, false, null]],
        '/game/o' => [[['_route' => 'app_game_index', '_controller' => 'App\\Controller\\GameController::espaceAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/game/new' => [[['_route' => 'app_game_new', '_controller' => 'App\\Controller\\GameController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/convo' => [[['_route' => 'conversation_browse', '_controller' => 'App\\Controller\\GroupConversationController::browse'], null, null, null, false, false, null]],
        '/conversation/add' => [[['_route' => 'conversation_add', '_controller' => 'App\\Controller\\GroupConversationController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\HomeController::index2'], null, null, null, false, false, null]],
        '/homechat' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomechatController::index'], null, null, null, false, false, null]],
        '/Main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\MainnewsController::index'], null, null, null, false, false, null]],
        '/newsletters' => [[['_route' => 'newsletters_home', '_controller' => 'App\\Controller\\NewslettersController::index'], null, null, null, true, false, null]],
        '/newsletters/prepare' => [[['_route' => 'newsletters_prepare', '_controller' => 'App\\Controller\\NewslettersController::prepare'], null, null, null, false, false, null]],
        '/newsletters/list' => [[['_route' => 'newsletters_list', '_controller' => 'App\\Controller\\NewslettersController::list'], null, null, null, false, false, null]],
        '/newssr' => [[['_route' => 'app_newssr', '_controller' => 'App\\Controller\\NewssrController::index'], null, null, null, false, false, null]],
        '/options' => [[['_route' => 'OptionsIndex', '_controller' => 'App\\Controller\\OptionsController::OptionsIndex'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/MesAchat' => [[['_route' => 'MesAchat', '_controller' => 'App\\Controller\\PaymentController::MesAchat'], null, ['GET' => 0], null, false, false, null]],
        '/code' => [[['_route' => 'code', '_controller' => 'App\\Controller\\PaymentController::code'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/front' => [[['_route' => 'app_postfront_index', '_controller' => 'App\\Controller\\PostController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/s/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\PostController::searchJeux'], null, null, null, false, false, null]],
        '/post/s/AfficherPostMobile' => [[['_route' => 'AfficherPostMobile', '_controller' => 'App\\Controller\\PostController::AfficherPostMobile'], null, null, null, false, false, null]],
        '/post/ajouterpostMobile/new' => [[['_route' => 'ajouterpostMobile', '_controller' => 'App\\Controller\\PostController::ajouterpostMobile'], null, null, null, false, false, null]],
        '/r' => [[['_route' => 'app_r', '_controller' => 'App\\Controller\\RController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/printallreclamations' => [[['_route' => 'print_reclamations', '_controller' => 'App\\Controller\\ReclamationController::exportAllReclamationsPDF'], null, null, null, false, false, null]],
        '/reclr' => [[['_route' => 'app_reclr', '_controller' => 'App\\Controller\\ReclrController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/mot-de-passe' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'app_stat', '_controller' => 'App\\Controller\\StatController::index'], null, null, null, false, false, null]],
        '/t' => [[['_route' => 'app_t', '_controller' => 'App\\Controller\\TController::index'], null, null, null, false, false, null]],
        '/updatelist' => [[['_route' => 'updatelist', '_controller' => 'App\\Controller\\UpdateListController::updatelist'], null, null, null, false, false, null]],
        '/user/account/editionuser' => [[['_route' => 'user_account_edit', '_controller' => 'App\\Controller\\UserAccountController::edit'], null, null, null, false, false, null]],
        '/user/account' => [[['_route' => 'user_account_index', '_controller' => 'App\\Controller\\UserAccountController::index'], null, null, null, true, false, null]],
        '/user/parametre' => [[['_route' => 'user_parameter_index', '_controller' => 'App\\Controller\\UserParameterConrollerController::edit'], null, null, null, true, false, null]],
        '/visitor' => [[['_route' => 'app_visitor_index', '_controller' => 'App\\Controller\\VisitorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/visitor/new' => [[['_route' => 'app_visitor_new', '_controller' => 'App\\Controller\\VisitorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wishlist' => [[['_route' => 'wishlist', '_controller' => 'App\\Controller\\WishListController::wishlist'], null, null, null, false, false, null]],
        '/wishlist/add' => [[['_route' => 'wishlistadd', '_controller' => 'App\\Controller\\WishListController::wishlistAdd'], null, ['GET' => 0, 'HEAD' => 1, 'POST' => 2], null, false, false, null]],
        '/wishlistother' => [[['_route' => 'wishlistother', '_controller' => 'App\\Controller\\WishListOtherController::wishlistOther'], null, null, null, false, false, null]],
        '/home/map' => [[['_route' => 'app_map_showindex', '_controller' => 'App\\Controller\\mapController::showIndex'], null, null, null, false, false, null]],
        '/get' => [[['_route' => 'app_map_getlocation', '_controller' => 'App\\Controller\\mapController::getLocation'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|chat/(?'
                        .'|new/([^/]++)(*:194)'
                        .'|([^/]++)(?'
                            .'|(*:213)'
                            .'|/edit(*:226)'
                            .'|(*:234)'
                        .')'
                    .')'
                    .'|dmin/utilisateur/([^/]++)(?'
                        .'|(*:272)'
                        .'|/(?'
                            .'|edition(*:291)'
                            .'|suppression(*:310)'
                        .')'
                    .')'
                    .'|pi/([^/]++)/edit(*:336)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|lendar/([^/]++)(?'
                            .'|(*:372)'
                            .'|/edit(*:385)'
                            .'|(*:393)'
                        .')'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:420)'
                            .'|remove/([^/]++)(*:443)'
                            .'|delete/([^/]++)(*:466)'
                        .')'
                    .')'
                    .'|o(?'
                        .'|mmentaire/(?'
                            .'|new/(\\d+)(*:502)'
                            .'|([^/]++)(?'
                                .'|(*:521)'
                                .'|/edit(*:534)'
                                .'|(*:542)'
                            .')'
                        .')'
                        .'|nversation/(\\d+)/delete(*:575)'
                    .')'
                .')'
                .'|/dev/([^/]++)(?'
                    .'|(*:601)'
                    .'|/edit(*:614)'
                    .'|(*:622)'
                .')'
                .'|/n(?'
                    .'|ewsletters/(?'
                        .'|failed/(?'
                            .'|resend/([^/]++)(*:675)'
                            .'|delete/([^/]++)(*:698)'
                        .')'
                        .'|confirm/([^/]++)/([^/]++)(*:732)'
                        .'|send/([^/]++)(*:753)'
                        .'|unsubscribe/([^/]++)/([^/]++)/([^/]++)(*:799)'
                    .')'
                    .'|ouveau\\-mot\\-de\\-passe/([^/]++)(*:839)'
                .')'
                .'|/game/(?'
                    .'|prod/([^/]++)(*:870)'
                    .'|([^/]++)(?'
                        .'|(*:889)'
                        .'|/edit(*:902)'
                        .'|(*:910)'
                    .')'
                .')'
                .'|/messages/(?'
                    .'|([^/]++)(*:941)'
                    .'|(\\d+)/add(*:958)'
                    .'|([^/]++)/ping(*:979)'
                .')'
                .'|/post/(?'
                    .'|([^/]++)(?'
                        .'|(*:1008)'
                        .'|/(?'
                            .'|edit(*:1025)'
                            .'|masquer(*:1041)'
                            .'|afficher(*:1058)'
                        .')'
                        .'|(*:1068)'
                    .')'
                    .'|commentaire/([^/]++)(*:1098)'
                    .'|stats(*:1112)'
                    .'|updatePostMobile/([^/]++)(*:1146)'
                    .'|deletePostMobile/([^/]++)(*:1180)'
                .')'
                .'|/reclamation/(?'
                    .'|(\\d+)(*:1211)'
                    .'|(\\d+)/edit(*:1230)'
                    .'|(\\d+)(*:1244)'
                .')'
                .'|/visitor/([^/]++)(?'
                    .'|(*:1274)'
                    .'|/edit(*:1288)'
                    .'|(*:1297)'
                .')'
                .'|/wishlist(?'
                    .'|/(?'
                        .'|share/([^/]++)(?'
                            .'|(*:1340)'
                            .'|/(?'
                                .'|join(*:1357)'
                                .'|view(*:1370)'
                            .')'
                        .')'
                        .'|edit/([^/]++)(*:1394)'
                        .'|delete/([^/]++)(*:1418)'
                        .'|open/([^/]++)(*:1440)'
                    .')'
                    .'|other/(?'
                        .'|open/([^/]++)(*:1472)'
                        .'|join/([^/]++)(*:1494)'
                        .'|leave/([^/]++)(*:1517)'
                    .')'
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
        194 => [[['_route' => 'new_achat', '_controller' => 'App\\Controller\\AchatController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        213 => [[['_route' => 'app_achat_show', '_controller' => 'App\\Controller\\AchatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'app_achat_edit', '_controller' => 'App\\Controller\\AchatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'app_achat_delete', '_controller' => 'App\\Controller\\AchatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        272 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], null, null, false, false, null]],
        310 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        336 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        372 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        385 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        420 => [[['_route' => 'app_cartadd', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'app_cartremove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        466 => [[['_route' => 'app_cartdeletec', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        502 => [[['_route' => 'app_commentaire_new_one', '_controller' => 'App\\Controller\\CommentaireController::new1'], ['idPost'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        521 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idCom'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idCom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idCom'], ['POST' => 0], null, false, true, null]],
        575 => [[['_route' => 'conversation_delete', '_controller' => 'App\\Controller\\GroupConversationController::delete'], ['id'], null, null, false, false, null]],
        601 => [[['_route' => 'app_dev_show', '_controller' => 'App\\Controller\\DevController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        614 => [[['_route' => 'app_dev_edit', '_controller' => 'App\\Controller\\DevController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        622 => [[['_route' => 'app_dev_delete', '_controller' => 'App\\Controller\\DevController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        675 => [[['_route' => 'newsletters_failed_resend', '_controller' => 'App\\Controller\\FailedController::resend'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'newsletters_failed_delete', '_controller' => 'App\\Controller\\FailedController::delete'], ['id'], null, null, false, true, null]],
        732 => [[['_route' => 'newsletters_confirm', '_controller' => 'App\\Controller\\NewslettersController::confirm'], ['id', 'token'], null, null, false, true, null]],
        753 => [[['_route' => 'newsletters_send', '_controller' => 'App\\Controller\\NewslettersController::send'], ['id'], null, null, false, true, null]],
        799 => [[['_route' => 'newsletters_unsubscribe', '_controller' => 'App\\Controller\\NewslettersController::unsubscribe'], ['id', 'newsletter', 'token'], null, null, false, true, null]],
        839 => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        870 => [[['_route' => 'show_front', '_controller' => 'App\\Controller\\GameController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        889 => [[['_route' => 'app_game_show', '_controller' => 'App\\Controller\\GameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        902 => [[['_route' => 'app_game_edit', '_controller' => 'App\\Controller\\GameController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        910 => [[['_route' => 'app_game_delete', '_controller' => 'App\\Controller\\GameController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        941 => [[['_route' => 'messages_browse', '_controller' => 'App\\Controller\\MessageController::browse'], ['groupConversation'], null, null, false, true, null]],
        958 => [[['_route' => 'messages_add', '_controller' => 'App\\Controller\\MessageController::add'], ['id'], null, null, false, false, null]],
        979 => [[['_route' => 'messages_ping', '_controller' => 'App\\Controller\\MessageController::ping'], ['id'], null, null, false, false, null]],
        1008 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['idPost'], ['GET' => 0], null, false, true, null]],
        1025 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['idPost'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1041 => [[['_route' => 'masquer_evenement', '_controller' => 'App\\Controller\\PostController::masquerEvent'], ['idPost'], null, null, false, false, null]],
        1058 => [[['_route' => 'afficher_evenement', '_controller' => 'App\\Controller\\PostController::afficherEvent'], ['idPost'], null, null, false, false, null]],
        1068 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['idPost'], ['POST' => 0], null, false, true, null]],
        1098 => [[['_route' => 'app_postcom', '_controller' => 'App\\Controller\\PostController::PackItem'], ['idPost'], null, null, false, true, null]],
        1112 => [[['_route' => 'stats', '_controller' => 'App\\Controller\\PostController::statistiques'], [], null, null, false, false, null]],
        1146 => [[['_route' => 'updatePostMobile', '_controller' => 'App\\Controller\\PostController::updatePostMobile'], ['idPost'], null, null, false, true, null]],
        1180 => [[['_route' => 'deletePostMobile', '_controller' => 'App\\Controller\\PostController::deletePostMobile'], ['idPost'], null, null, false, true, null]],
        1211 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idRec'], ['GET' => 0], null, false, true, null]],
        1230 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idRec'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1244 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idRec'], ['POST' => 0], null, false, true, null]],
        1274 => [[['_route' => 'app_visitor_show', '_controller' => 'App\\Controller\\VisitorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1288 => [[['_route' => 'app_visitor_edit', '_controller' => 'App\\Controller\\VisitorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1297 => [[['_route' => 'app_visitor_delete', '_controller' => 'App\\Controller\\VisitorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1340 => [[['_route' => 'wishlistshare', '_controller' => 'App\\Controller\\WishListController::wishlistShare'], ['code'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        1357 => [[['_route' => 'wishlistjoin', '_controller' => 'App\\Controller\\WishListController::wishlistJoin'], ['code'], ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        1370 => [[['_route' => 'wishlistviewcode', '_controller' => 'App\\Controller\\WishListController::wishlistviewcode'], ['code'], ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        1394 => [[['_route' => 'wishlistedit', '_controller' => 'App\\Controller\\WishListController::wishlistedit'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        1418 => [[['_route' => 'wishlistdelete', '_controller' => 'App\\Controller\\WishListController::wishlistDelete'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        1440 => [[['_route' => 'wishlistopen', '_controller' => 'App\\Controller\\WishListController::wishlistOpen'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        1472 => [[['_route' => 'wishlistotheropen', '_controller' => 'App\\Controller\\WishListOtherController::wishlistOtherOpen'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        1494 => [[['_route' => 'wishlistotherjoin', '_controller' => 'App\\Controller\\WishListOtherController::wishlistOtherJoin'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        1517 => [
            [['_route' => 'wishlistotherleave', '_controller' => 'App\\Controller\\WishListOtherController::wishlistOtherLeave'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
