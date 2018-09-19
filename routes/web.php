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

//Route::get('/', 'SiteController@index');


Route:: resource('admin/setor','Admin\SetorController');

$this->group(['middleware'=>['auth'], 'namespace' => 'Admin', 'prefix'=>'admin'],function(){
	$this->get('/', 'AdminController@index')->name('admin');
	$this->get('servico', 'ServicoController@index')->name('admin.servico');
	



	$this->get('servaten', 'ServicoAtenController@index')->name('admin.servaten');
	$this->get('arrecadacao', 'ArrecadacaoController@index')->name('admin.arrecadacao');


});



$this->get('/', 'Site\SiteController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
