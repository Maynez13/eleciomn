<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasillaController;

Route::get('/', function () {
return view('welcome');
});
Route::resource('casilla', CasillaController::class);

Route::get('casilla/pdf', [CasillaController::class, 'generatepdf']);
Route::get('users', 'UserChartController@index');