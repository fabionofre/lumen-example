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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api/v1/'], function($router)
{

	// Coloca as rotas aqui

	// -- Rotas da API de Receitas
    $router->get('receita','ReceitaController@index'); // Executa o método index do controllador ReceitaController
    $router->get('receita/{id}','ReceitaController@show'); // Executa o método show do controllador ReceitaController
    $router->post('receita','ReceitaController@store'); // Executa o método store do controllador ReceitaController
    $router->put('receita/{id}','ReceitaController@update'); // Executa o método update do controllador ReceitaController
    $router->delete('receita/{id}','ReceitaController@delete'); // Executa o método delete do controllador ReceitaController
    // -- Fim das Rotas da API de Receitas
});