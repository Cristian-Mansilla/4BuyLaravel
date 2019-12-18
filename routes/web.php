
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

Route::get('/Filtro/Ofertas/GetProds', 'productosController@getOfertasProd');

Route::get('/Categorias/Menu', 'categoriasController@menuCategorias');

Route::get('/Categorias/Menu/{id}', 'categoriasController@menuSubcategorias');

Route::get('/perfil', 'perfilController@miPerfil')->name('miPerfil');

Route::get('/perfil/get', 'perfilController@getDatosUser');

Route::patch('/perfil/actualizar', 'perfilController@actualizar')->name('actualizar');

Route::view('/faqs', 'FAQs')->name('faqs');

Route::get('/construccion', 'HomeController@construccion');

Route::get('/Carrito', 'carritoController@carrito')->middleware('auth');

Route::get('/Carrito/get', 'carritoController@getCarrito');

Route::get('/Carrito/add/{id}', 'carritoController@addCarrito');

Route::get('/Carrito/delete/{id}', 'carritoController@eliminarProdCarrito');

Route::get('/Carrito/deleteAll', 'carritoController@vaciarCarrito');

Route::get('/Carrito/cant', 'carritoController@cantCarrito');

Route::get('/Filtro/{marca}', 'productosController@fetchProd');

Route::get('/test', 'HomeController@test');

Route::get('/Pago/{precio}', 'HomeController@pago');

Route::get('/Pago/procesar/{datos}', 'HomeController@procesar');

Route::get('/Cupon', 'HomeController@cupon');

Route::get('/Cupon/canjear/{cupon}', 'HomeController@canjearCupon');
