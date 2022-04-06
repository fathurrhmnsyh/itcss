<?php

use Illuminate\Support\Facades\Route;

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



Route::get('home', function(){
    return view('pages.index');
});

Route::group(['middleware' =>'auth'], function(){


    Route::get('/', 'DashboardController@index');

    //new layout

    Route::get('/asik', function(){
        return view('layouts/template');
    });

    //User

    Route::get('/employee', 'EmployeeController@index');
    Route::get('/employee/getdept/{id}', 'EmployeeController@getdept');
    Route::get('/employee/getsection/{id}', 'EmployeeController@getsection');
    Route::post('/employee/store', 'EmployeeController@store');
    Route::get('/employee/delete/{id}', 'EmployeeController@delete');

    //user_used_komputer
    
    Route::get('/user_kom', 'UsedAssetController@user_kom');
    Route::get('/user_kom/detail/{id}', 'UsedAssetController@kom_detail');
    Route::post('/user_kom/store', 'UsedAssetController@store');
    Route::get('/user_kom/print/{id}', 'UsedAssetController@print');
    
    //user_used_laptop
    Route::get('/user_laptop', 'UsedAssetController@user_lap');
    Route::get('/user_laptop/detail/{id}', 'UsedAssetController@lap_detail');
    Route::post('/user_laptop/store', 'UsedAssetController@store_lp');
    Route::get('/user_laptop/print/{id}', 'UsedAssetController@print_lp');


    // Komputer
    Route::get('/komputer', 'KomputerController@index');
    Route::get('/komputer/add', 'KomputerController@add');
    Route::post('/komputer/store', 'KomputerController@store');
    Route::get('/komputer/detail/{id}', 'KomputerController@detail');
    Route::get('/komputer/edit/{id}', 'KomputerController@edit');
    Route::put('/komputer/update/{id}', 'KomputerController@update');
    Route::get('/komputer/delete/{id}', 'KomputerController@delete');
    Route::get('/komputer/print/{id}', 'KomputerController@print');
    Route::get('/komputer/print_all', 'KomputerController@print_all');

    //Laptop
    Route::get('/laptop', 'LaptopController@index');
    Route::get('/laptop/add', 'LaptopController@add');
    Route::post('/laptop/store', 'LaptopController@store');
    Route::get('/laptop/detail/{id}', 'LaptopController@detail');
    Route::get('/laptop/edit/{id}', 'LaptopController@edit');
    Route::put('/laptop/update/{id}', 'LaptopController@update');
    Route::get('/laptop/delete/{id}', 'LaptopController@delete');
    Route::get('/laptop/print/{id}', 'LaptopController@print');
    Route::get('/laptop/print_all', 'LaptopController@print_all');

    //Printer
    Route::get('/printer', 'PrinterController@index');
    Route::post('/printer/store', 'PrinterController@store');
    Route::get('/printer/detail/{id}', 'PrinterController@detail');
    Route::get('/printer/delete/{id}', 'PrinterController@delete');

    ///Consumable Control

        //Product
        Route::get('/product' , 'ProductController@index');
        Route::post('/product/store' , 'ProductController@store');

        //kategori

        Route::get('/kategori' , 'KategoriController@index');
        Route::post('/kategori/store' , 'KategoriController@store');
        Route::get('/kategori/delete/{id}' , 'KategoriController@delete');

        //Supplier

        Route::get('supplier', 'SupplierController@index');
        Route::post('supplier/store', 'SupplierController@store');
        Route::get('supplier/delete/{id}', 'SupplierController@delete');

        //Barang

        Route::get('/barang', 'BarangController@index');
        Route::get('/barang/add', 'BarangController@add');
        Route::post('/barang/store', 'BarangController@store');
        Route::get('/barang/delete/{id}', 'BarangController@delete');

        //Stok
        Route::get('/stok', 'StokController@index');
        Route::post('/stok/out', 'StokController@out');
        Route::post('/stok/in', 'StokController@in');
        Route::get('/stok/transaksi_riwayat_out', 'StokController@history_out');
        Route::get('/stok/transaksi_riwayat_in', 'StokController@history_in');
    ///End Consumable Control


    //Eriwayat Kom
    Route::get('/ekom', 'EriwayatController@ekom');
    Route::post('/ekom/store', 'EriwayatController@ekom_store');
    Route::get('/ekom/search', 'EriwayatController@search');
    Route::get('/ekom/cari', 'EriwayatController@search_result');
    Route::get('/ekom/print/{id_kom}', 'EriwayatController@print');
    
    //Eriwayat Laptop
    Route::get('/elapt', 'EriwayatController@elapt');
    Route::post('/elapt/store', 'EriwayatController@elapt_store');
    Route::get('/elapt/search', 'EriwayatController@lapt_search');
    Route::get('/elapt/cari', 'EriwayatController@lapt_search_result');
    Route::get('/elapt/print/{id_lapt}', 'EriwayatController@lapt_print');

    //user login
    Route::get('/userlog', 'AuthController@data');
    Route::post('/userlog/create', 'AuthController@create');
    Route::get('/userlog/delete/{id}', 'AuthController@delete');


});
//auth
Route::get('/auth', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

