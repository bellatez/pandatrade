<?php

Route::redirect('/', '.gtrade/login');

Route::get('download-pdf', 'DownloadController@downloadPDF');

Route::prefix('/gtrade/')->group(function () {	

//Authentication routes
	Auth::routes();

//routes which require authentication
	Route::group(['middleware' => 'auth'], function(){

//products routes
		Route::resource('products', 'ProductsController');
		Route::post('products/delete', 'ProductsController@destroy')->name('products.delete');
		Route::post('products/status/{id}', 'ProductsController@UpdateStats0');

//to purchase routes
		Route::resource('topurchase', 'TopurchaseController');
		Route::post('topurchase/delete', 'TopurchaseController@destroy')->name('topurchase.delete');
		Route::post('topurchase/status/{id}', 'TopurchaseController@Status1');

//debt routes
		Route::resource('debts', 'DebtsController');
		Route::post('debts/delete', 'DebtsController@destroy')->name('debts.delete');


//transaction routes
		Route::resource('transactions', 'TransactionsController');
		Route::post('transactions/delete', 'TransactionsController@destroy')->name('transactions.delete');

//analysis and balancesheet routes
		Route::get('analysis', 'AnalysisController@index');
		Route::get('analysis/balancesheet', 'AnalysisController@invoice')->name('balancesheet');
		Route::get('analysis/bsprint', 'AnalysisController@print')->name('bsprint');
		Route::get('analysis/salesreport', 'AnalysisController@loadFile')->name('balancesheet.pdf');


//profile routes
		Route::get('profile', 'ProfileController@index');
		Route::get('edituser', 'ProfileController@EditUser');
		Route::post('edituser', 'ProfileController@UpdateUser')->name('profile.UpdateUser');
		Route::get('editbusiness', 'ProfileController@EditBusiness');
		Route::post('editbusiness', 'ProfileController@UpdateBusiness')->name('profile.UpdateBusiness');
		
//calendar route
		Route::get('calendar', function () {
		    return view('calendar');
		});

//Documentation route
		Route::get('documentation', function () {
		    return view('documentation/index');
		});
	});
});