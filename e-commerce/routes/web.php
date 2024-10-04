<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('index');
})->name('home');

// Cart
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Checkout
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Checkout
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/shop-detail', function () {
    return view('shop-detail');
})->name('shop-detail');

// Generate PDF
Route::get('/generate-pdf', function () {
    // Data to pass to the view
    $data = ['title' => 'Welcome to PDF Generation in Laravel'];

    // Load view file and pass data to it
    $pdf = Pdf::loadView('pdf.myPDF', $data);

    // Stream the PDF in the browser (can use download() for downloading)
    return $pdf->stream('document.pdf');
});
