<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'logout' => [[], ['_controller' => 'App\\Controller\\Api\\LoginController::logout'], [], [['text', '/api/logout']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\Api\\LoginController::login'], [], [['text', '/api/login']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\Api\\LoginController::register'], [], [['text', '/api/register']], [], [], []],
    'api_histoireV2' => [[], ['_controller' => 'App\\Controller\\Api\\StoryController::listV2'], [], [['text', '/api/histoireV2']], [], [], []],
    'api_histoire' => [[], ['_controller' => 'App\\Controller\\Api\\StoryController::list'], [], [['text', '/api/histoire']], [], [], []],
    'api_histoire_page' => [['id', 'page_id'], ['_controller' => 'App\\Controller\\Api\\StoryController::page'], [], [['variable', '/', '[^/]++', 'page_id', true], ['text', '/page'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/histoire']], [], [], []],
    'api_user' => [[], ['_controller' => 'App\\Controller\\Api\\UserController::show'], [], [['text', '/api/user/me']], [], [], []],
    'api_user_edit' => [[], ['_controller' => 'App\\Controller\\Api\\UserController::edit'], [], [['text', '/api/user/me/edit']], [], [], []],
    'api_user_delete' => [[], ['_controller' => 'App\\Controller\\Api\\UserController::delete'], [], [['text', '/api/user/me/delete']], [], [], []],
    'app_choice_index' => [[], ['_controller' => 'App\\Controller\\ChoiceController::index'], [], [['text', '/back/choice/']], [], [], []],
    'app_choice_new' => [[], ['_controller' => 'App\\Controller\\ChoiceController::new'], [], [['text', '/back/choice/new']], [], [], []],
    'app_choice_show' => [['id'], ['_controller' => 'App\\Controller\\ChoiceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/choice']], [], [], []],
    'app_choice_edit' => [['id'], ['_controller' => 'App\\Controller\\ChoiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/choice']], [], [], []],
    'app_choice_delete' => [['id'], ['_controller' => 'App\\Controller\\ChoiceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/choice']], [], [], []],
    'app_main_home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/back/']], [], [], []],
    'app_page_index' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/back/page/']], [], [], []],
    'app_page_new' => [[], ['_controller' => 'App\\Controller\\PageController::new'], [], [['text', '/back/page/new']], [], [], []],
    'app_page_show' => [['id'], ['_controller' => 'App\\Controller\\PageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/page']], [], [], []],
    'app_page_edit' => [['id'], ['_controller' => 'App\\Controller\\PageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/page']], [], [], []],
    'app_page_delete' => [['id'], ['_controller' => 'App\\Controller\\PageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/page']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_story_index' => [[], ['_controller' => 'App\\Controller\\StoryController::index'], [], [['text', '/back/story/']], [], [], []],
    'app_story_new' => [[], ['_controller' => 'App\\Controller\\StoryController::new'], [], [['text', '/back/story/new']], [], [], []],
    'app_story_show' => [['id'], ['_controller' => 'App\\Controller\\StoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/story']], [], [], []],
    'app_story_edit' => [['id'], ['_controller' => 'App\\Controller\\StoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/story']], [], [], []],
    'app_story_delete' => [['id'], ['_controller' => 'App\\Controller\\StoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/story']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/back/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/back/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
