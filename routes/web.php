<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MultipicController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesananDetailController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class, 'tampil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('tampilan');
Route::get('pesan/{id}', [PesananController::class, 'index']);
Route::post('pesan/{id}', [PesananController::class, 'pesan']);
Route::get('check-out', [PesananController::class, 'check_out']);
Route::delete('check-out/{id}', [PesananController::class, 'delete']);
Route::get('konfirmasi-check-out', [PesananController::class, 'konfirmasi']);
Route::get('profile', [ProfileController::class, 'index']);
Route::post('profile', [ProfileController::class, 'update']);
Route::get('history', [HistoryController::class, 'index']);
Route::get('history/{id}', [HistoryController::class, 'detail']);
Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
// Route::get('history/create', 'App\Http\Controllers\HistoryController@pembayaran', function(){
// return view('history.detail');})->name('createPembayaran');
// Route::post('history', [App\Http\Controllers\HistoryController::class, 'storePembayaran'])->name('storePembayaran');
Route::get('image', 'ImageController@index');
Route::post('save', 'ImageController@save');

// multi Image Upload
Route::get('/multi/image', [MultipicController::class, 'Multipic'])->name('multi.image');
Route::post('/multi/add', [MultipicController::class, 'StoreImg'])->name('store.image');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function () {
        Route::get('/', [DashboardController::class, 'index']);

        Route::get('/kategori', function () {
            return view('kategori.index');
        })->middleware(['role:admin']);
        Route::resource('kategori', KategoriController::class);

        Route::get('/barang', function () {
            return view('barang.index');
        })->middleware(['role:admin']);
        Route::resource('barang', BarangController::class);

        Route::get('/pesan', function () {
            return view('pesanan.index');
        })->middleware(['role:admin']);
        Route::resource('pesan', PesanController::class);

        Route::get('/pesanan_detail', function () {
            return view('pesanan_detail.index');
        })->middleware(['role:admin']);
        Route::resource('pesanan_detail', PesananDetailController::class);

        // Route::get('/pembayaran', function () {
        //     return view('pembayaran.index');
        // })->middleware(['role:admin']);
        // Route::resource('pembayaran', Pembay
        Route::get('/cetak-laporan', 'App\Http\Controllers\PesanController@cetakForm')->name('cetak-laporan');
        Route::get('/cetak-laporan-pertanggal/{tglawal}/{tglakhir}',
            'App\Http\Controllers\PesanController@cetakPertanggal')
            ->name('cetak-laporan-pertanggal');

    });
