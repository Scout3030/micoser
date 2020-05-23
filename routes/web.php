<?php

use App\JobOffer;
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

Auth::routes();

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

Route::get('/bolsa-de-trabajo', function () {
	$jobs = JobOffer::orderBy('created_at', 'asc')->whereStatus(JobOffer::ACTIVE)->paginate(4);
	return view('jobs', compact('jobs'));
})->name('jobs');

Route::get('/bolsa-de-trabajo/{jobOffer}', function (JobOffer $jobOffer) {
	return view('job.show', compact('jobOffer'));
})->name('job.show');

Route::get('/contacto', function () {
	return view('contact');
})->name('contact');

Route::group(['prefix' => "administracion", "middleware" => ['auth', sprintf("role:%s", \App\Role::ADMIN)]], function () {

	Route::get('/', 'AdminController@index')->name('admin.index');

	Route::group(['prefix' => "client"], function () {

		Route::get('/', 'Admin\ClientController@index')
			->name('admin.client.index');
		Route::get('/create', 'Admin\ClientController@create')
			->name('admin.client.create');
		Route::get('/edit/{client}', 'Admin\ClientController@edit')
			->name('admin.client.edit');
		Route::post('/store', 'Admin\ClientController@store')
			->name('admin.client.store');
		Route::put('/update/{client}', 'Admin\ClientController@update')
			->name('admin.client.update');
		Route::delete('/destroy/{client}', 'Admin\ClientController@destroy')
			->name('admin.client.destroy');

		Route::get('/datatable', 'Admin\ClientController@datatable')
			->name('admin.client.datatable');
	});

	Route::group(['prefix' => "quotation"], function () {

		Route::get('/', 'Admin\QuotationController@index')
			->name('admin.quotation.index');
		Route::get('/create', 'Admin\QuotationController@create')
			->name('admin.quotation.create');
		Route::get('/show/{quotation}', 'Admin\QuotationController@show')
			->name('admin.quotation.show');
		Route::get('/edit/{quotation}', 'Admin\QuotationController@edit')
			->name('admin.quotation.edit');
		Route::post('/store', 'Admin\QuotationController@store')
			->name('admin.quotation.store');
		Route::put('/update/{quotation}', 'Admin\QuotationController@update')
			->name('admin.quotation.update');
		Route::delete('/destroy/{quotation}', 'Admin\QuotationController@destroy')
			->name('admin.quotation.destroy');

		Route::get('/print/{quotation}', 'Admin\QuotationController@generatePDF')
			->name('admin.quotation.print');

		Route::get('/datatable', 'Admin\QuotationController@datatable')
			->name('admin.quotation.datatable');
	});

	Route::group(['prefix' => "job-offer"], function () {

		Route::get('/', 'Admin\JobOfferController@index')
			->name('admin.job-offer.index');
		Route::get('/create', 'Admin\JobOfferController@create')
			->name('admin.job-offer.create');
		Route::get('/show/{jobOffer}', 'Admin\JobOfferController@show')
			->name('admin.job-offer.show');
		Route::get('/edit/{jobOffer}', 'Admin\JobOfferController@edit')
			->name('admin.job-offer.edit');
		Route::post('/store', 'Admin\JobOfferController@store')
			->name('admin.job-offer.store');
		Route::put('/update/{jobOffer}', 'Admin\JobOfferController@update')
			->name('admin.job-offer.update');
		Route::delete('/destroy/{jobOffer}', 'Admin\JobOfferController@destroy')
			->name('admin.job-offer.destroy');

		Route::put('/pause/{jobOffer}', 'Admin\JobOfferController@pause')
			->name('admin.job-offer.pause');

		Route::get('/print/{jobOffer}', 'Admin\JobOfferController@generatePDF')
			->name('admin.job-offer.print');

		Route::get('/datatable', 'Admin\JobOfferController@datatable')
			->name('admin.job-offer.datatable');
	});
});
