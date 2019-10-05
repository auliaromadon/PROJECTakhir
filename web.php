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
    //return view('welcome');
    echo "holaaa" ;
});

Route::get('/satu', function () {
    //return view('welcome');
    echo "one" ;
});

Route::get('/dua', function () {
    //return view('welcome');
    echo "two" ;
});

Route::get('/tiga', function () {
    //return view('welcome');
    echo "three" ;
});

Route::get('/empat', function () {
    //return view('welcome');
    echo "four" ;
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "five" ;
});

Route::get('/enam', function () {
    //return view('welcome');
    echo "six" ;
});

Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven" ;
});

Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight" ;
});

Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine" ;
});

//1. echo langsung nested
Route::get('/sepuluh', function () {
    //return view('welcome');
    echo "ten";
});

//2. manggil view
Route::get('/sepuluh', function () {
    return view('telo');
    //lokasi view
});

//3. manggil conntroller
Route::get('/usang', 'Usang@index');
/*file controllernya namanya usang
    nama url usang
    index nama functionnya
*/
Route::get('/jeruk', 'Usang@godog');

Route::get('/nemplate', function () {
    return view('template');
    //lokasi view
});

//menambahkan route
Route::get('/CleaningService', 'CleanerController@index');
//get harus sendiri sendiri crudnya

Route::resource('kontak', 'Kontak');
//resource itu  udh termasuk crud
//'/kontak' -> itu controller

/*Route::get('/', function(){
    return view('index');
});

*/

Route::get('login', 'Login@index');
Route::post('login/cek', 'Login@cek');
Route::get('/', 'Dashboard@index');
Route::get('/logout','login@logout');

Route::resource('/satpam', 'satpam');

Route::resource('/kabupaten', 'kabupaten');

Route::resource('/penjualan', 'penjualan');

Route::resource('/barang', 'barang');

Route::resource('/pembelian', 'pembelian');

Route::resource('/dash', 'dashboard@index');

// Route::get('/tugas', 'Login2@index');

Route::resource('/penyewaan', 'penyewaan');
