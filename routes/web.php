<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;


Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'getContactForm'])->name('contact_path');


/******* Cms *********/

Auth::routes();

/*******  Portfolio Header Page *********/
Route::post('/cms/header-page-store', 'PortfolioController@storePage')->name('header_portfolio_store');
/*******  Portfolio Header Page Ending */


/*******  Portfolio Page*********/
 Route::get('/cms/portfilio', 'PortfolioController@index')->name('cms_portfolio');
 Route::get('/cms/portfilio-create', 'PortfolioController@create')->name('cms_portfolio_create');
 Route::post('/cms/portfilio-store', 'PortfolioController@store')->name('cms_portfolio_store');
 Route::get('/cms/portfilio-edit-{id}', 'PortfolioController@edit')->name('cms_portfolio_edit');
 Route::post('/cms/portfilio-update-{id}', 'PortfolioController@update')->name('cms_portfolio_update');
 Route::delete('/cms/portfilio-delete-{id}', 'PortfolioController@delete')->name('cms_portfolio_delete');
/*******  Portfolio  Page Ending */
