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
        '/cabinets' => [
            [['_route' => 'app_cabinets_findall', '_controller' => 'App\\Controller\\CabinetsController::findAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_cabinets_newcabinet', '_controller' => 'App\\Controller\\CabinetsController::newcabinet'], null, ['POST' => 0], null, false, false, null],
        ],
        '/doctors' => [[['_route' => 'app_doctor_index', '_controller' => 'App\\Controller\\DoctorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/patients' => [
            [['_route' => 'app_patients_findall', '_controller' => 'App\\Controller\\PatientsController::findAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_patients_newpatient', '_controller' => 'App\\Controller\\PatientsController::newPatient'], null, ['POST' => 0], null, false, false, null],
        ],
        '/rendezvous' => [
            [['_route' => 'app_rendezvous_findall', '_controller' => 'App\\Controller\\RendezVousController::findAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_rendezvous_newrendezvous', '_controller' => 'App\\Controller\\RendezVousController::newRendezVous'], null, ['POST' => 0], null, false, false, null],
        ],
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
                .'|/cabinets/([^/]++)(?'
                    .'|(*:190)'
                .')'
                .'|/doctors/(?'
                    .'|([^/]++)(*:219)'
                    .'|add(*:230)'
                    .'|delete/([^/]++)(*:253)'
                .')'
                .'|/patients/([^/]++)(?'
                    .'|(*:283)'
                .')'
                .'|/rendezvous/([^/]++)(?'
                    .'|(*:315)'
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
        190 => [
            [['_route' => 'app_cabinets_find', '_controller' => 'App\\Controller\\CabinetsController::find'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_cabinets_deletecabinet', '_controller' => 'App\\Controller\\CabinetsController::deletecabinet'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        219 => [[['_route' => 'app_doctor_getid', '_controller' => 'App\\Controller\\DoctorController::getId'], ['id'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'app_doctor_adddoctor', '_controller' => 'App\\Controller\\DoctorController::addDoctor'], [], ['POST' => 0], null, false, false, null]],
        253 => [[['_route' => 'app_doctor_delete', '_controller' => 'App\\Controller\\DoctorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        283 => [
            [['_route' => 'app_patients_find', '_controller' => 'App\\Controller\\PatientsController::find'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_patients_deletepatient', '_controller' => 'App\\Controller\\PatientsController::deletePatient'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        315 => [
            [['_route' => 'app_rendezvous_find', '_controller' => 'App\\Controller\\RendezVousController::find'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_rendezvous_delete', '_controller' => 'App\\Controller\\RendezVousController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_rendezvous_deleterendezvous', '_controller' => 'App\\Controller\\RendezVousController::deleteRendezVous'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
