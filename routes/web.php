
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
use Illuminate\Http\Request;
use App\Producto;

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

Route::get('/perfil', 'perfilController@miPerfil')->name('miPerfil');

Route::get('/construccion', 'HomeController@construccion');

Route::get('/Filtro/{id}', function($id){
    $marcas = explode(',' , $id);
    $prod = Producto::where(function ($query) use ($marcas) {
        return $query->where('categoria_id', '=', 50)
                ->where('marca_id', '=', '50');
    });

    foreach($marcas as $marca){
        $prod->orWhere(function ($query) use ($marca) {
            return $query->where('categoria_id', '=', '12')
                    ->where('marca_id', '=', $marca);
        });
    }
    $productos = $prod->get();
    return $productos;
});
