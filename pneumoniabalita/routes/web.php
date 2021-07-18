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

// Route::get('/', function () {
//     return view('pemetaan.peta2016');
//  });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('layouts.pemetaan');
// });
// Route::get('/', 'App\Http\Controllers\DashboardController@index');
Route::get('/informasi-umum', function () {
    return view('admin.informasi_umum.index');
});
Route::get('/definisi_pneumonia', function () {
    return view('admin.informasi_umum.definisi_pneumonia');
});
Route::get('/transmisi', function () {
    return view('admin.informasi_umum.transmisi');
});
Route::get('/faktor', function () {
    return view('admin.informasi_umum.faktor');
});
Route::get('/pencegahan', function () {
    return view('admin.informasi_umum.pencegahan');
});

//datatahun
Route::resource('data_tahun', 'App\Http\Controllers\TahunController');
Route::get('/deletetahun/{id_tahun}', 'App\Http\Controllers\TahunController@destroy')->name('deletetahun');

//datakecamatan
Route::resource('data_kecamatan', 'App\Http\Controllers\KecamatanController');
Route::get('/deletekecamatan/{id_kecamatan}', 'App\Http\Controllers\KecamatanController@destroy')->name('deletekecamatan');

//datarumahsakit
Route::resource('data_rumahsakit', 'App\Http\Controllers\RumahSakitController');
Route::get('/deleterumahsakit/{id_rs}', 'App\Http\Controllers\RumahSakitController@destroy')->name('deleterumahsakit');

//datalingkungan
Route::resource('data_lingkungan', 'App\Http\Controllers\LingkunganController');
Route::get('/deletelingkungan/{id_lingkungan}', 'App\Http\Controllers\LingkunganController@destroy')->name('deletelingkungan');

//datagizi
Route::resource('data_gizi', 'App\Http\Controllers\GiziController');
Route::get('/deletegizi/{id_gizi}', 'App\Http\Controllers\GiziController@destroy')->name('deletegizi');

//datapneumonia
Route::resource('data_pneumonia', 'App\Http\Controllers\PneumoniaController');
Route::get('/deletepneumonia/{id_pneumonia}', 'App\Http\Controllers\PneumoniaController@destroy')->name('deletepneumonia');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/hasilcluster2016', 'App\Http\Controllers\PythonController@hasil1')->name('hasilcluster2016');
Route::get('/hasilcluster2017', 'App\Http\Controllers\PythonController@hasil2')->name('hasilcluster2017');
Route::get('/hasilcluster2018', 'App\Http\Controllers\PythonController@hasil3')->name('hasilcluster2018');
Route::get('/hasilcluster2019', 'App\Http\Controllers\PythonController@hasil4')->name('hasilcluster2019');

