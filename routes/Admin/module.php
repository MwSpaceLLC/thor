<?php

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @Routerfile
 * --------------------------------------------------------------------------
 *
 * Questo file ti aiuterò a gestire le rotte del tuo addon
 *
 * Per ulteriori informazioni, consultare la documentazione originale online.
 * @see https://developers.whmcs.com/addon-modules/
 *
 * @FastRoute https://github.com/nikic/FastRoute#defining-routes
 *
 */

// All POST Method
$router->get('/', 'AdminController@helloword');

$router->get('/&settings', 'AdminController@settings');

$router->get('/&form', 'FormController@form');

$router->get('/&postDataTable', 'FormController@postDataTable');

// User Page Param Demo
$router->get('/&user={uid}', 'UserController@viewTemplate');

// All POST Method
$router->post('/&formPostData', 'FormController@formPostData');