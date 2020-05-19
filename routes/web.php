<?php

use App\Sector;
use App\Service;
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
	$sectors = Sector::get();
	return view('home', compact('sectors'));
})->name('home');

Route::get('/nosotros', function () {
	return view('about');
})->name('about');

Route::get('/ssma', function () {
	return view('ssma');
})->name('ssma');

Route::get('/servicios', function () {
	$services = Service::get();
	return view('services', compact('services'));
})->name('services');

Route::get('/servicios/{service}', function (Service $service) {
	$services = Service::get();
	return view('service.show', compact('service', 'services'));
})->name('service.show');

Route::get('/sectores', function () {
	$sectors = Sector::get();
	return view('sectors', compact('sector', 'sectors'));
})->name('sectors');

Route::get('/sectores/{sector}', function (Sector $sector) {
	$sectors = Sector::get();
	return view('sector.show', compact('sector', 'sectors'));
})->name('sector.show');

Route::get('/contacto', function () {
	return view('contact');
})->name('contact');
