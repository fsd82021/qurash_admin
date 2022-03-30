<?php


use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\AboutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// test route

Route::get('/service', [ServiceController::class, 'index']);
Route::get('/single-service', [ServiceController::class, 'single']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/single-blog', [BlogController::class, 'single']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/settings', [SettingsController::class, 'settings']);
Route::post('/contact', [App\Http\Controllers\Api\ContactController::class, 'formRequest']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
