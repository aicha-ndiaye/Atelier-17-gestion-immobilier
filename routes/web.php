<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\BienvenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\bien;
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

Route::get('/', [BienvenuController::class, 'index']);

// Route::get('/ajout/bien', [BienController::class, 'index'])->name('admin.ajoutbien');
Route::get('/dashboard/admin/listes', [BienController::class, 'index']);

Route::post("/dashboard/admin/ajouterBien",[BienController::class,"store"]);

// Route::get('/detail/produit', [BienController::class, 'create']);
Route::get('/ajout/bien', [BienController::class, 'create'])->name('admin.ajoutbien');

Route::get('/dashboard', function () {
    return view('user/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/admin', function () {
    $biens= bien::all();
    //  dd($biens);
    return view('admin.dashboard',compact("biens"));

})->middleware(['admin'])->name('admin.dashboard');

Route::middleware('admin')->group(function (){
    Route::get('/ajout/bien', [BienController::class, 'index'])->name('admin.ajoutbien');
    Route::get('/detail/produit', [BienController::class, 'create']);
    Route::post('/savebien', [BienController::class, 'store']);
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
