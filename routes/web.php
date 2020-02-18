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

Route::get('/', function () {
    return view('home');
});


//Previsao´s Routes
Route::group(['prefix'=>'previsao'], function(){
Route::get('/', 'PrevisaoController@viewPrevisao');
Route::get('/praia', 'PrevisaoController@viewPraia');
});


//Desapego´s Routes
Route::get('/desapego','CrudDesapegoController@homeDesapego');
Route::resource('ofertaDesapego', 'CrudDesapegoController');


//Encontre Route
Route::get('/encontre', 'EncontreController@viewEncontre');


//Blog´s Routes
Route::get('/blog', 'BlogController@viewBlog');
Route::get('/blog/noticia', 'BlogController@viewBlogNoticia');


//Usuario´s Routes
Route::get('/login',"Auth\LoginController@viewLogin");
Route::post('/register',"Auth\RegisterController@create");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarioDados',"UsuarioController@viewUsuarioDados"); 
// Route::post('/seusDados',"Auth\UsuarioController@viewUsuarioDados");
/*confirmar se nao ha um controller jah criado pelo laravel para isso antes de criar este controller */


//Admin´s Routes
Route::group(['prefix'=>'admin'], function(){
    Route::get('/cadastro', "AdminController@createAdmin");
    Route::post('/cadastro', "AdminController@createAdmin");
    Route::get('/atualizar/{id?}', "AdminController@updateAdmin");   
    Route::post('/atualizar', "AdminController@updateAdmin"); 
    Route::get('/deletar/{id?}',"AdminController@deleteAdmin");
    Route::get('/', "AdminController@viewAllAdmin");    
    Route::get('/usuario', "AdminController@viewAllUsers");
    Route::get('/ofertas', "AdminController@viewAllOfertas");
});
