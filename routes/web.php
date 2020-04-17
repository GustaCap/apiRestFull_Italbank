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

/**
 * Ruta para recuperar el apiToken del usuario
 */
$router->post('cliente/getToken', ['uses' => 'ClienteController@getToken']);


/**
 * Grupo de rutas que utilizan el middleware auth para ser accedidas...
 */

$router->group(['middleware' => ['auth']], function () use ($router)
{
    $router->GET('/clientes', ['uses' => 'ClienteController@showClientes']);

});

$router->POST('/cliente/files', ['uses' => 'ClienteController@storeFiles']);

$router->GET('/cliente/{id}', 'ClienteController@getClient');

$router->GET('/raiz/{id}', 'ClienteController@getRaiz');

$router->GET('/archivos/{id}', 'ClienteController@getArchivos');

// prueba de endpoint

$router->POST('/cliente/files/carga', ['uses' => 'ClienteController@postCarga']);




