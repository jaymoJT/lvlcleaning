<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegularcleaningController;
use App\Http\Controllers\DeepcleaningController;
use App\Http\Controllers\CommercialcleaningController;
use App\Http\Controllers\CarpetcleaningController;
use App\Http\Controllers\IndustrialcleaningController;
use App\Http\Controllers\PostconstructioncleaningController;
use App\Http\Controllers\AfterpartycleaningController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/', WelcomeController::class );
Route::resource('/about', AboutController::class);
Route::resource('/services/regular-cleaning', RegularcleaningController::class);
Route::resource('/services/deep-cleaning', DeepcleaningController::class);
Route::resource('/services/commercial-cleaning', CommercialcleaningController::class);
Route::resource('/services/carpet-cleaning', CarpetcleaningController::class);
Route::resource('/services/industrial-cleaning', IndustrialcleaningController::class);
Route::resource('/services/postconstruction-cleaning', PostconstructioncleaningController::class);
Route::resource('/services/afterparty-cleaning', AfterpartycleaningController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/booking/', BookController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
