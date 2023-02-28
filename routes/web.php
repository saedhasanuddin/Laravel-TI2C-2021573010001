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

Route::get('/', function () {
    return "Musaed HUHUH";
});

Route::get('/belajar',function(){
    echo '<h1>Laravel</h1>';
    return view ("tess");
});

route::get('/mahasiswa/profil/coba',function(){
    echo '<h2 style = "text-align:center"><u> Welcome Profil Coba</u></h2>';
});

Route::get('/mahasiswa',function (){
    return view('mahasiswa'.["mahasiswa01"=>"Musaed Hasanuddin"]);
});

Route::get('/hello',function(){
    return'Hello word';
});

Route::get('/mahasiswa/{nama}',function($nama){
    return"Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek){
    return"Cek sisa stok untuk $jenis $merek";
});

Route::get('/stok_barang/{jenis?}/{merek?}',function ($a = 'smartphone',$b='samsung'){
    return "Cek sisa stok untuk $a $b";
});

Route::get('/user/{id}', function ($id){
    return"tampilkan user dengan id =$id";
})->where('id','[0-9]+');

Route::get('/hubungi-kami',function(){
    return'<h1>hubungi kami</h>';
});
route::redirect('/contact-us','/hubungi-kami');
