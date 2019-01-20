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

Route::get('/', 'HomeController@index');

Auth::routes();

$this->group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

    //rotas auth do admin
    $this->get('', 'Auth\LoginController@showLoginForm')->name('admin.show.login');
    $this->post('', 'Auth\LoginController@login')->name('admin.login');
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.show.register');
    $this->get('register', 'Auth\RegisterController@register')->name('admin.register');
    $this->get('logout', 'Auth\LoginController@logout')->name('admin.logout');

    $this->group(['middleware' => 'auth'], function(){
        $this->get('dashboard', 'DashboardController@index')->name('dashboard');

        $this->get('products', 'ProductController@index')->name('product.index');
        $this->get('products/paginate', 'ProductController@productsPaginate')->name('product.paginate');
        $this->get('products/create', 'ProductController@create')->name('product.create');
        $this->post('products/create', 'ProductController@store')->name('product.store');

    });

});

