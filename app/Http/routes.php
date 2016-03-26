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
$app->post('/', ['as'=>'agenda.index','uses' => 'AgendaController@index']);
$app->get('delete-person/{personID}', ['as'=>'agenda.deletePerson','uses' => 'AgendaController@destroyPerson']);
$app->get('delete-phone/{personID}/{phoneID}', ['as'=>'agenda.deletePhone','uses' => 'AgendaController@destroyPhone']);


$app->get('/{letter}', ['as'=>'agenda.letter','uses' => 'AgendaController@index']);

