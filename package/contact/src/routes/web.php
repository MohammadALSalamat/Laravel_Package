<?php

use Bitfumes\contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('contact', [ContactController::class, "show"])->name('contact');

Route::post('contact', [ContactController::class, "send"]);
