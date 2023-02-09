<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;

/*creato il collegamento fra la rotta e il controllore!

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

Route::get('/', [PageController::class, 'index']);
/*la route verrà gestita dal controllore*/