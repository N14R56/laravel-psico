<?php

use App\Http\Controllers\Controller;
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

Route::get('/bem-vindos', [Controller::class, 'bem_vindos']);
Route::get('/pergunta', [Controller::class, 'pergunta']);
Route::post('/bem-estar', [Controller::class, 'bemEstar']);
Route::get('/qrcode', [Controller::class, 'qrcode']);
Route::post('/qrcode', [Controller::class, 'qrcode']);
Route::get('/dica', [Controller::class, 'dica']);
Route::post('/dica', [Controller::class, 'dica']);
