<?php

use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', function () use ($router) {
    return "Examen";
});

$router->group(['prefix' => 'examen'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return "Examen";
    });


    //LOGIN
    $router->get('/ListarUsuarios', [UsuarioController::class, 'ListarUsuarios']);



});