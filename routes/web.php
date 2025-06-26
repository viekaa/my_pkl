<?php
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController as OrdersController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\Admin;

Route::get('/', function () {
    return view('welcome');
});


// route basic

Route::get('about',function(){

    return 'ini halaman about';
});

// dengan view

Route::get('profile',function(){

   return view('profile');
});

// route parameter
Route::get('produk/{nama_produk}',function($a){
    return 'Saya membeli produk <b>' . $a . '</b>';
});

Route::get('beli/{barang}/{jumlah}',function($a,$b){
    return view('beli',compact('a','b'));
});

// route optional parameter

Route::get('kategori/{nama_kategori?}',function($nama = null){
    if($nama){
       return 'Anda memilih kategori :' .$nama;
    }else{
        return 'Anda belum memilih kategori!';
    }
  
});

// Latihan

Route::get('promo/{barang?}/{kode?}',function($barang = null, $kode = null){
    return view('promo',compact('barang','kode'));
});

// Route Siswa

Route::get('siswa',[MyController::class,'index']);
//create
Route::get('siswa/create',[MyController::class,'create']);
Route::post('/siswa', [MyController::class,'store']);
//show
Route::get('siswa/{id}',[Mycontroller::class,'show']);
//edit
Route::get('siswa/{id}/edit',[MyController::class, 'edit']);
Route::put('siswa/{id}', [MyController::class, 'update']);
//hapus
Route::delete('siswa/{id}', [MyController::class, 'destroy']);


// review
Route::post('/product/{product}/review',[ReviewController::class, 'store'])
->middleware('auth')->name('review.store');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route untuk admin
Route::group(['prefix'=>'admin','middleware'=>['auth',Admin::class]], function(){
    Route::get('/',[BackendController::class,'index']);
});

// route untuk admin atau backend
Route::group(['prefix'=>'admin', 'as' => 'backend.','middleware'=>['auth', Admin::class]], function() {
    Route::get('/', [BackendController::class, 'index']);
    // crud
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/orders', OrdersController::class);
    Route::put('/orders/{id}/status',[OrdersController::class, 'updateStatus'])
    ->name('orders.updateStatus');

});

// route Member 
Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/product', [FrontendController::class, 'product']);
Route::get('/cart', [FrontendController::class, 'cart']);

// Route Guest /member

Route::get('/',[FrontendController::class,'index']);
Route::get('/product',[FrontendController::class,'product'])->name('product.index');
Route::get('/product{product}',[FrontendController::class,'singleproduct'])->name('product.show');
Route::get('/product/category/{slug}',[FrontendController::class,'filterByCategory'])->name('product.filter');
Route::get('/search',[FrontendController::class,'search'])->name('product.search');
Route::get('/about',[FrontendController::class,'about']);

// cart
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/add-to-cart/{product}',[CartController::class,'addToCart'])->name('cart.add');
Route::put('/cart/update{id}',[CartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart{id}',[CartController::class,'remove'])->name('cart.remove');

// orders
Route::get('/checkout',[CartController::class,'checkout'])->name('cart.checkout');
Route::get('/orders',[OrderController::class,'index'])->name('orders.index');
Route::get('/orders{id}',[OrderController::class,'show'])->name('orders.show');



