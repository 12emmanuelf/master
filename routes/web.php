<?php
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZoneController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursierController;
use App\Http\Controllers\SinistreController;

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

    // // Création des rôles
    // $createAdmin = Role::create(['name' => 'Administrateur']);
    // $createModer = Role::create(['name' => 'Moderateur']);
    // $createEmp = Role::create(['name' => 'Employer']);

    // // Création des permissions
    // $permHelloworld = Permission::create(['name' => 'see hello world']);
    // $permGoodbye = Permission::create(['name' => 'see good bye']);
    // $permGood = Permission::create(['name' => 'good']);

    // // Assignation des permissions aux rôles
    // $RoleAdmin = Role::findByName('Administrateur');
    // $RoleAdmin->givePermissionTo('see hello world');
    // $RoleAdmin->givePermissionTo('see good bye');
    // $RoleAdmin->givePermissionTo('good');

    // $RoleModer = Role::findByName('Moderateur');
    // $RoleModer->givePermissionTo('see good bye');
    // $RoleModer->givePermissionTo('good');

    // $RoleEmp = Role::findByName('Employer');
    // $RoleEmp->givePermissionTo('good');

    // // Affichage des rôles
    // dump($RoleAdmin);
    // dump($RoleModer);
    // dump($RoleEmp);



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

    Route::get('/client.index',[ClientController::class,'index'])->name('client.index');
    Route::get('/client/create', [ClientController::class,'create'])->name('client.create');
    Route::get('/client/{id}', [ClientController::class,'show'])->name('client.show');
    Route::get('/client/{id}/edit', [ClientController::class,'edit'])->name('client.edit');


    Route::post('/client', [ClientController::class,'store'])->name('client.store');
    Route::patch('/client/{id}', [ClientController::class,'update'])->name('clients.update');
    Route::delete('/client/{id}', [ClientController::class,'destroy'])->name('client.destroy');

});


Route::middleware('auth')->group(function () {

    Route::get('/user.index', [UserController::class,'index'])->name('user.index');
    Route::get('/user/create', [UserController::class,'create'])->name('user.create');
    Route::get('/user/{id}', [UserController::class,'show'])->name('user.show');
    Route::get('/user/{id}/edit', [UserController::class,'edit'])->name('user.edit');


    Route::post('/user', [UserController::class,'store'])->name('user.istore');
    Route::patch('/user/{id}', [UserController::class,'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class,'destroy'])->name('user.destroy');

});

Route::middleware('auth')->group(function () {

    Route::get('/coursier.index', [CoursierController::class,'index'])->name('coursier.index');
    Route::get('/coursier/create', [CoursierController::class,'create'])->name('coursier.create');
    Route::get('/coursier/{id}', [CoursierController::class,'show'])->name('coursier.show');
    Route::get('/coursier/{id}/edit', [CoursierController::class,'edit'])->name('coursier.edit');


    Route::post('/coursier', [CoursierController::class,'store'])->name('coursier.store');
    Route::patch('/coursier/{id}', [CoursierController::class,'update'])->name('coursier.update');
    Route::delete('/coursier/{id}', [CoursierController::class,'destroy'])->name('coursier.destroy');

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


Route::middleware('auth')->group(function () {

    Route::get('/commune.index',[CommuneController::class,'index'])->name('commune.index');
    Route::get('/commune/create', [CommuneController::class,'create'])->name('commune.create');
    Route::get('/commune/{id}', [CommuneController::class,'show'])->name('commune.show');
    Route::get('/commune/{id}/edit', [CommuneController::class,'edit'])->name('commune.edit');


    Route::post('/commune', [CommuneController::class,'store'])->name('commune.store');
    Route::patch('/commune/{id}', [CommuneController::class,'update'])->name('commune.update');
    Route::delete('/commune/{id}', [CommuneController::class,'destroy'])->name('commune.destroy');

});


Route::middleware('auth')->group(function () {

    Route::get('/zone.index',[ZoneController::class,'index'])->name('zone.index');
    Route::get('/zone/create', [ZoneController::class,'create'])->name('zone.create');
    Route::get('/zone/{id}', [ZoneController::class,'show'])->name('zone.show');
    Route::get('/zone/{id}/edit', [ZoneController::class,'edit'])->name('zone.edit');


    Route::post('/zone', [ZoneController::class,'store'])->name('zone.store');
    Route::patch('/zone/{id}', [ZoneController::class,'update'])->name('zone.update');
    Route::delete('/zone/{id}', [ZoneController::class,'destroy'])->name('zone.destroy');

});


Route::middleware('auth')->group(function () {

    Route::get('/sinistre.index',[SinistreController::class,'index'])->name('sinistre.index');
    Route::get('/sinistre/create', [SinistreController::class,'create'])->name('sinistre.create');
    Route::get('/sinistre/{id}', [SinistreController::class,'show'])->name('sinistre.show');
    Route::get('/sinistre/{id}/edit', [SinistreController::class,'edit'])->name('sinistre.edit');


    Route::post('/sinistre', [SinistreController::class,'store'])->name('sinistre.store');
    Route::patch('/sinistre/{id}', [SinistreController::class,'update'])->name('sinistre.update');
    Route::delete('/sinistre/{id}', [SinistreController::class,'destroy'])->name('sinistre.destroy');

});

Route::middleware('auth')->group(function () {

    Route::get('/dossier.index',[DossierController::class,'index'])->name('Dossier.index');
    Route::get('/dossier/create', [DossierController::class,'create'])->name('Dossier.create');
    Route::get('/dossier/{id}', [DossierController::class,'show'])->name('Dossier.show');
    Route::get('/dossier/{id}/edit', [DossierController::class,'edit'])->name('ossier.edit');


    Route::post('/dossier', [DossierController::class,'store'])->name('Dossier.store');
    Route::patch('/dossier/{id}', [DossierController::class,'update'])->name('Dossier.update');
    Route::delete('/dossier/{id}', [DossierController::class,'destroy'])->name('Dossier.destroy');
    Route::get('/Dossier.texte', [DossierController::class,'texte'])->name('Dossier.texte');

});

Route::middleware('auth')->group(function () {

    Route::get('/contrat.index',[ContratController::class,'index'])->name('contrat.index');
    Route::get('/contrat/create', [ContratController::class,'create'])->name('contrat.create');
    Route::get('/contrat/{id}', [ContratController::class,'show'])->name('contrat.show');
    Route::get('/contrat/{id}/edit', [ContratController::class,'edit'])->name('contrat.edit');


    Route::post('/contrat', [ContratController::class,'store'])->name('contrat.store');
    Route::patch('/contrat/{id}', [ContratController::class,'update'])->name('contrat.update');
    Route::delete('/contrat/{id}', [ContratController::class,'destroy'])->name('contrat.destroy');

});
