<?php



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

// Route::get('/', function () {
//     return view('welcome');
// });
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\example;

// Route::resource('ya', example::class);
// Route::get('/ya/{id}', 'App\Http\Controllers\example@show');
Route::get('/ya', 'App\Http\Controllers\example@index');
Route::get('/index', 'App\Http\Controllers\example@create');
