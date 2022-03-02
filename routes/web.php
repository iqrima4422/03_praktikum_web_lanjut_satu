<?php
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/category')->group(function () {
         Route::get('/marbel-edu-games',  [ProductsController::class, 'category1']);
         Route::get('/marbel-and-friends-kind-games', [ProductsController::class, 'category2']);
         Route::get('/riri-story-books', [ProductsController::class, 'category3']);
        });

// Route::get('/news', [NewsController::class, 'news']);
Route::get('news', [NewsController::class, 'news']);
Route::get('news/{title}', [NewsController::class, 'newsTitle']);


Route::prefix('/program')->group(function () {
    Route::get('/karir',  [ProgramController::class, 'program1']);
    Route::get('/magang', [ProgramController::class, 'program2']);
    Route::get('/kunjungan_industri', [ProgramController::class, 'program3']);
   });

Route::get('/about', [AboutUsController::class, 'about']);

Route::resource('/contact', ContactUsController::class, [
    'only' => ['index', 'create', 'store']
]);