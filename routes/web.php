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
    return view('welcome');
});

Route::get('tentang', function () {
    return "<h1>Hello</h1>"
    . "selamat datang di webapp saya"
    . "Laravel emang keren";
});

Route::get('saya', function () {
    $mamat = "Mamat Abdullah";
    return view('profile', compact('mamat'));
});

Route::get('dinda', function () {
    $nama = "Dinda Rahma Widia";
    $tgl_lahir = "06 Juni 2004";
    $umur = "17";
    $alamat = "Kp. Megarmukti Pangalengan";
    return view('bio', compact('nama', 'tgl_lahir', 'umur', 'alamat'));
});

Route::get('imas', function () {
    $nama = "Imas Siti Romlah";
    $tgl_lahir = "25 Februari 2004";
    $umur = "17";
    $alamat = "Kp. Bojong Sukamukti";
    return view('bio', compact('nama', 'tgl_lahir', 'umur', 'alamat'));
});

Route::get('murni', function () {
    $nama = "Murni Mutiara";
    $tgl_lahir = "31 Maret 2003";
    $umur = "18";
    $alamat = "Kp. Pasantren";
    return view('bio', compact('nama', 'tgl_lahir', 'umur', 'alamat'));
});
Route::get('amel', function () {
    $nama = "Amelia Trismayanti";
    $tgl_lahir = "10 Desember 2004";
    $umur = "16";
    $alamat = "Kp. Sompok";
    return view('bio', compact('nama', 'tgl_lahir', 'umur', 'alamat'));
});
Route::get('putri', function () {
    $nama = "Putri Fauziah";
    $tgl_lahir = "02 Februari 2004";
    $umur = "17";
    $alamat = "Kp. Bojong Sukamukti";
    return view('bio', compact('nama', 'tgl_lahir', 'umur', 'alamat'));
});

//Route Parameter
Route::get('posting/{id}' , function($a) {
    return "Halaman posting ke - <b>$a</b>";
});

Route::get('bio/{nama}/{alamat}/{jk}/{tb}/{bb}' , function($nama, $alamat, $jk, $tb, $bb) {
    return view('biodata', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
});

Route::get('biodata/{nama?}/{alamat?}/{jk?}/{tb?}/{bb?}' , function($nama = null, $alamat = null, $jk = null, $tb = null, $bb = null) {
    return view('datadiri', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
});