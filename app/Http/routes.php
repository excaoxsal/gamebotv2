<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route Khusus Pengunjung
Route::get('/', function () {
    return view('index');
});
Route::get('/','IndexController@show');
Route::get('/berita/{id_berita}','IndexController@shows');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('pc', 'PcgamesController@index');
Route::get('mobile', 'MobilegamesController@index');
Route::get('aboutus', 'AboutusController@index');





// Route Khusus ADMIN
Route::get('/home', 'HomeController@upload');//nampilin dashboard + isi"nya
Route::get('/home/hapus/{id_berita}', 'HomeController@hapus');//hapus berita
Route::get('/edit/{id_berita}', 'HomeController@edit');//ngambil data buat diedit
Route::post('edit/simpan_edit/', 'HomeController@simpan_edit');//nyimpen data setelah diedit
Route::resource('users', 'UserController', []);
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/content/{id_berita}', 'HomeController@show');
Route::get('/createcontent', function () {
    return view('createcontent');
});
Route::get('/createcontent', 'HomeController@tampil_tipe');

?>
