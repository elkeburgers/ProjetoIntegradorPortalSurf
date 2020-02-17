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
    // return view('welcome');
    return view('home');
});

// Route::get('/home', "SiteController@viewHome");

Route::get('/previsao', 'PrevisaoController@viewPrevisao');
Route::get('/previsaoRiviera', 'PrevisaoController@viewPrevisaoRiviera');

Route::get('/caronas', 'CaronaController@viewCarona');
Route::get('/PerfilCaronas', 'CaronaController@viewPerfilCarona');
Route::get('/CaronasAvaliar', 'CaronaController@viewCaronasAvaliar');

Route::get('/desapego','CrudDesapegoController@homeDesapego');
// Route::get('/desapegoCadastroOferta',"DesapegoController@viewDesapegoCadastroOferta");
// Route::get('/desapegoOfertasUsuario',"DesapegoController@viewDesapegoOfertasUsuario");
// Route::get('/desapegoOfertaIndividual',"DesapegoController@viewDesapegoOfertaIndividual");

// // vou informar que a rota abaixo precisa de usuario logado, informando o middleware que verifica isso, usando o checkuser que cadastramos dentro do Kernel. Poderiamos usar apenas nesta porque as outras paginas teoricamente so seriam acessadas apos esta, mas por seguranca se coloca em todas. 
// Route::get('/desapegoCadastroOferta', 'CrudDesapegoController@viewDesapegoCadastroOferta')->middleware('checkuser');
// Route::post('/desapegoCadastroOferta', 'CrudDesapegoController@create');
// Route::get('/desapegoEditarOferta/{id?}', 'CrudDesapegoController@edit');
// // rota para botao atualizar na view, para de fato salvar os dados atualizados no banco de dados.
// Route::post('/desapegoEditarOferta', 'CrudDesapegoController@update');
// Route::get('/desapegoOfertasUsuario/{id?}', 'CrudDesapegoController@delete');


Route::get('/encontre', 'EncontreController@viewEncontre');

Route::get('/blog', 'BlogController@viewBlog');
Route::get('/blog/noticia', 'BlogController@viewBlogNoticia');

// Route::get('/noticias', 'NoticiasController@viewNoticias');

Route::get('/login',"Auth\LoginController@viewLogin");

Route::post('/register',"Auth\RegisterController@create");

Route::get('/usuarioDados',"UsuarioController@viewUsuarioDados"); 
// Route::post('/seusDados',"Auth\UsuarioController@viewUsuarioDados");
/*confirmar se nao ha um controller jah criado pelo laravel para isso antes de criar este controller */

 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ofertaDesapego', 'CrudDesapegoController');
// Route::resource('/desapegoOfertasUsuario', 'DesapegoController2');



//Admin´s Routes
Route::group(['prefix'=>'admin'], function(){
    Route::get('/cadastro', "AdminController@createAdmin");
    // ->middleware('checkadmin');
    Route::post('/cadastro', "AdminController@createAdmin");
    Route::get('/atualizar/{id?}', "AdminController@updateAdmin");
    // ->middleware('checkadmin');
    Route::post('/atualizar', "AdminController@updateAdmin"); 
    Route::get('/deletar/{id?}',"AdminController@deleteAdmin")->middleware('checkadmin');
    Route::get('/', "AdminController@viewAllAdmin");
    // ->middleware('checkadmin');
    Route::get('/usuario', "AdminController@viewAllUsers")->middleware('checkadmin');
    Route::get('/ofertas', "AdminController@viewAllOfertas")->middleware('checkadmin');
});
