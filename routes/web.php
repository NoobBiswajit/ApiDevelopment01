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

// $router->get('/details', 'StudentDetails@AllData');
// $router->post('/details', 'StudentDetails@InserData');
// $router->delete('/details', 'StudentDetails@DeleteData');
// $router->put('/details', 'StudentDetails@UpdateData');


// $router->get('/query','BuilderController@AllData');
// $router->get('/query','BuilderController@FindData');
// $router->get('/query','BuilderController@WhareData');
$router->get('/query','BuilderController@PulkData');