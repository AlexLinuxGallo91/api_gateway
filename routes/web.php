<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// rutas para la api del correo
$router->post('/notifications/email/text', 'EmailController@sendEmailText');
$router->post('/notifications/email/html', 'EmailController@sendEmailHtml');
$router->post('/notifications/snmptrap', 'EmailController@sendSnmpTrap');
$router->post('/notifications/phone/app', 'EmailController@sendPhoneMessage');
$router->post('/notifications/phone/call', 'EmailController@sendPhoneCall');

// rutas para la api services Itoc
$router->get('/apiservices/login/echoping', 'ItocApiController@getStatus');

// rutas para la api de email David
$router->post('/notificacion/mail/solotexto', 'ApiEmailController@sendEmailText');
$router->post('/notificacion/mail/avanzado', 'ApiEmailController@sendEmailHtml');


