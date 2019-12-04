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

use App\Product;
use App\Category;

Route::get('/', function () {

    /*$prod = new Product();

    $prod->nome = 'Produto3';
    $prod->slug = 'Produto3';
    $prod->category_id = 2;
    $prod->descricao_curta = 'Produto3';
    $prod->descricao_longa = 'Produto3';
    $prod->especificacoes = 'Produto3';
    $prod->dados_de_interesse = 'Produto3';
    $prod->estado = 'Novo';
    $prod->ativo = 'S';
    $prod->sliderprincipal = 'N';
    $prod->save();
    return $prod;*/

    //return view('welcome');

    /*$prod = Product::find(2)->first()->category;
    return $prod;*/
    $cat = Category::find(1)->product;
    return $cat;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
