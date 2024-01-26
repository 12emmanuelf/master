<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursierController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function () {
    Route::get('/Master', [MasterController::class, 'index'])->name('master');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {

    Route::get('/client.index',[ClientController::class,'index']);
    Route::get('/client/create', [ClientController::class,'create']);
    Route::get('/client/{id}', [ClientController::class,'show']);
    Route::get('/client/{id}/edit', [ClientController::class,'edit']);


    Route::post('/client', [ClientController::class,'store']);
    Route::patch('/client/{id}', [ClientController::class,'update']);
    Route::delete('/client/{id}', [ClientController::class,'destroy']);

});


Route::middleware('auth')->group(function () {

    Route::get('/user.index', [UserController::class,'index']);
    Route::get('/user/create', [UserController::class,'create']);
    Route::get('/user/{id}', [UserController::class,'show']);
    Route::get('/user/{id}/edit', [UserController::class,'edit']);


    Route::post('/user', [UserController::class,'store']);
    Route::patch('/user/{id}', [UserController::class,'update']);
    Route::delete('/user/{id}', [UserController::class,'destroy']);

});

Route::middleware('auth')->group(function () {

    Route::get('/coursier.index', [CoursierController::class,'index']);
    Route::get('/coursier/create', [CoursierController::class,'create']);
    Route::get('/coursier/{id}', [CoursierController::class,'show']);
    Route::get('/coursier/{id}/edit', [CoursierController::class,'edit']);


    Route::post('/coursier', [CoursierController::class,'store']);
    Route::patch('/coursier/{id}', [CoursierController::class,'update']);
    Route::delete('/coursier/{id}', [CoursierController::class,'destroy']);

});


Route::controller(ColisController::class)->group(function () {

    Route::get('/colis.index', [ColisController::class,'index']);
    Route::get('/colis/create', [ColisController::class,'create']);
    Route::get('/colis/{id}', [ColisController::class,'show']);
    Route::get('/colis/{id}/edit', [ColisController::class,'edit']);


    Route::post('/colis', [ColisController::class,'store']);
    Route::patch('/colis/{id}', [ColisController::class,'update']);
    Route::delete('/colis/{id}', [ColisController::class,'destroy']);

});
