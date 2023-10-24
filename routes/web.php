<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\KontigenController;
use App\Http\Controllers\PesilatController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JuriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProduksiController;



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

require __DIR__ . '/auth.php';
Route::get('/auth/logout', function () {
    return view('auth.logout');
});
Route::group(['middleware'=>'auth'],function () {
    Route::get('/auth/login', function() {
        return redirect('/');
    });
    Route::get('/auth/register', function() {
        return redirect('/');
    });
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    // Define your admin-related routes here

    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');
    Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
    Route::get('/mitra', [MitraController::class, 'index'])->name('mitra.index');
    Route::get('/mitra/create', [MitraController::class, 'create'])->name('mitra.create');
    Route::post('/mitra', [MitraController::class, 'store'])->name('mitra.store');
    Route::get('/mitra/{id}', [MitraController::class, 'show'])->name('mitra.show');
    Route::get('/mitra/{id}/edit', [MitraController::class, 'edit'])->name('mitra.edit');
    Route::put('/mitra/{id}', [MitraController::class, 'update'])->name('mitra.update');
    Route::delete('/mitra/{id}', [MitraController::class, 'destroy'])->name('mitra.destroy');
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');
    Route::get('/supplier/{id}', [SupplierController::class, 'show'])->name('supplier.show');
    Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::put('/supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
    Route::delete('/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/produksi', [ProduksiController::class, 'index'])->name('produksi.index');
    Route::get('/produksi/create', [ProduksiController::class, 'create'])->name('produksi.create');
    Route::post('/produksi', [ProduksiController::class, 'store'])->name('produksi.store');
    Route::get('/produksi/{id}', [ProduksiController::class, 'show'])->name('produksi.show');
    Route::get('/produksi/{id}/edit', [ProduksiController::class, 'edit'])->name('produksi.edit');
    Route::put('/produksi/{id}', [ProduksiController::class, 'update'])->name('produksi.update');
    Route::delete('/produksi/{id}', [ProduksiController::class, 'destroy'])->name('produksi.destroy');

    // Define other admin routes here
});

// Your other routes outside of the admin prefix

Route::get('', [RoutingController::class, 'index'])->name('root');
Route::get('/home', fn () => view('index'))->name('home');
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'root'])->name('any');
// Route::resource('kontigen', KontigenController::class);
// Route::resource('pesilat', PesilatController::class);
// Route::resource('peserta', PesertaController::class);
// Route::resource('event', EventController::class);

// Route::middleware(['role:admin'])->group(function () {
//     Route::resource('kelas', KelasController::class);
//     Route::resource('juri', JuriController::class);
// });

