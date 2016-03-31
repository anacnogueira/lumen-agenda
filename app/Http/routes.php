<?php

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

// $app->get('/', function () use ($app) {
//     return $app->version();
// });

$app->get('/', ['as'=>'agenda.index','uses' => 'AgendaController@index']);
$app->post('/search', ['as'=>'agenda.search','uses' => 'AgendaController@search']);
$app->get('person/{id}/delete', ['as'=>'person.destroy','uses' => 'PersonController@destroy']);
$app->get('phone/{id}/delete', ['as'=>'phone.destroy','uses' => 'PhoneController@destroy']);


$app->get('/{letter}', ['as'=>'agenda.letter','uses' => 'AgendaController@index']);

