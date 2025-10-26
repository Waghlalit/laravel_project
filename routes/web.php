<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/lang/{lang}', function($lang){
    if(in_array($lang, ['en','hi'])) {
        session(['lang'=>$lang]);
    }
    return redirect(url()->previous());
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/clients', [PageController::class, 'clients'])->name('clients');
Route::get('/why', [PageController::class, 'why'])->name('why');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// API endpoints for dynamic content
Route::get('/api/services', [PageController::class, 'apiServices']);
Route::get('/api/team', [PageController::class, 'apiTeam']);
Route::get('/api/clients', [PageController::class, 'apiClients']);
