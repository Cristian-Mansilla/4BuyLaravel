
<?php

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

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Productos', 'productosController@TodosLosProductos');

Route::get('/Productos/Categoria/{categoria}', 'productosController@productosPorCategoria');

Route::get('/Productos/Detalle/{id}', 'productosController@detalleProducto');

Route::get('/Productos/Busqueda', 'productosController@busqueda');

Route::get('/Productos/Ofertas', 'productosController@ofertas');

Route::get('/Categorias/Menu', 'categoriasController@menuCategorias');

Route::get('/Categorias/Menu/{id}', 'categoriasController@menuSubcategorias');

<<<<<<< HEAD
Route::get('/perfil', 'perfilController@miPerfil');
=======
Route::get('/perfil', 'perfilController@');

Route::get('/construccion', 'HomeController@construccion');
>>>>>>> 6dd6d955ce2dd13efe80b718460edc9a5fd604e6
