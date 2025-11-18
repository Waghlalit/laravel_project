<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This file defines all the routes for your application.
| You can use controllers or closures. Here we show closures only.
*/

// Language switch
Route::get('/lang/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'hi'])) {
        session(['lang' => $lang]);
    }
    return redirect(url()->previous());
});

// Static pages
Route::get('/', function () {
    return view('pages.home');   // resources/views/pages/home.blade.php
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/clients', function () {
    return view('pages.clients');
})->name('clients');

Route::get('/why', function () {
    return view('pages.why');
})->name('why');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Handle contact form submission
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'message' => 'required|string',
    ]);

    // Example: save to DB or send mail
    // \App\Models\Contact::create($data);

    return back()->with('success', 'Message sent successfully!');
})->name('contact.store');

// API endpoints for dynamic content
Route::get('/api/services', function () {
    return response()->json([
        ['title' => 'Web Development', 'desc' => 'Building modern web apps'],
        ['title' => 'SEO Optimization', 'desc' => 'Improve search rankings'],
    ]);
});

Route::get('/api/team', function () {
    return response()->json([
        ['name' => 'Alice', 'role' => 'Developer'],
        ['name' => 'Bob', 'role' => 'Designer'],
    ]);
});

Route::get('/api/clients', function () {
    return response()->json([
        ['company' => 'Acme Corp', 'project' => 'Website redesign'],
        ['company' => 'Globex', 'project' => 'Mobile app'],
    ]);
});
