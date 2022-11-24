<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\Api\\LoginController::logout'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Api\\LoginController::login'], null, null, null, false, false, null]],
        '/api/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\Api\\LoginController::register'], null, null, null, false, false, null]],
        '/api/histoireV2' => [[['_route' => 'api_histoireV2', '_controller' => 'App\\Controller\\Api\\StoryController::listV2'], null, null, null, false, false, null]],
        '/api/histoire' => [[['_route' => 'api_histoire', '_controller' => 'App\\Controller\\Api\\StoryController::list'], null, null, null, false, false, null]],
        '/api/user/me' => [[['_route' => 'api_user', '_controller' => 'App\\Controller\\Api\\UserController::show'], null, null, null, false, false, null]],
        '/api/user/me/edit' => [[['_route' => 'api_user_edit', '_controller' => 'App\\Controller\\Api\\UserController::edit'], null, ['PUT' => 0, 'PATCH' => 1], null, false, false, null]],
        '/api/user/me/delete' => [[['_route' => 'api_user_delete', '_controller' => 'App\\Controller\\Api\\UserController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/back/choice' => [[['_route' => 'app_choice_index', '_controller' => 'App\\Controller\\ChoiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/choice/new' => [[['_route' => 'app_choice_new', '_controller' => 'App\\Controller\\ChoiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_main_home', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, true, false, null]],
        '/back/page' => [[['_route' => 'app_page_index', '_controller' => 'App\\Controller\\PageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/page/new' => [[['_route' => 'app_page_new', '_controller' => 'App\\Controller\\PageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/back/story' => [[['_route' => 'app_story_index', '_controller' => 'App\\Controller\\StoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/story/new' => [[['_route' => 'app_story_new', '_controller' => 'App\\Controller\\StoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/histoire/([^/]++)/page/([^/]++)(*:43)'
                .'|/back/(?'
                    .'|choice/([^/]++)(?'
                        .'|(*:77)'
                        .'|/edit(*:89)'
                        .'|(*:96)'
                    .')'
                    .'|page/([^/]++)(?'
                        .'|(*:120)'
                        .'|/edit(*:133)'
                        .'|(*:141)'
                    .')'
                    .'|story/([^/]++)(?'
                        .'|(*:167)'
                        .'|/edit(*:180)'
                        .'|(*:188)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:213)'
                        .'|/edit(*:226)'
                        .'|(*:234)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:280)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_histoire_page', '_controller' => 'App\\Controller\\Api\\StoryController::page'], ['id', 'page_id'], null, null, false, true, null]],
        77 => [[['_route' => 'app_choice_show', '_controller' => 'App\\Controller\\ChoiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_choice_edit', '_controller' => 'App\\Controller\\ChoiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'app_choice_delete', '_controller' => 'App\\Controller\\ChoiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        120 => [[['_route' => 'app_page_show', '_controller' => 'App\\Controller\\PageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        133 => [[['_route' => 'app_page_edit', '_controller' => 'App\\Controller\\PageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        141 => [[['_route' => 'app_page_delete', '_controller' => 'App\\Controller\\PageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        167 => [[['_route' => 'app_story_show', '_controller' => 'App\\Controller\\StoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        180 => [[['_route' => 'app_story_edit', '_controller' => 'App\\Controller\\StoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        188 => [[['_route' => 'app_story_delete', '_controller' => 'App\\Controller\\StoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        213 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
