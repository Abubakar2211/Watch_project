<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\watchController;
use App\Http\Controllers\PaymentController;

// ===== LOGIN PAGE =======
Route::get("/",[indexController::class,'Topwatch']);
Route::get("/userlogout/{id}",[indexController::class,'userlogout']);
Route::view("/home","aaa");
Route::view("register","register");
Route::post('/register', [LoginController::class, 'reg']);
Route::view("/login","login");
Route::post('loginadmin', [LoginController::class, 'loginadmin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get("shop",[indexController::class,'shop']);

Route::get("GoogleLogin",[indexController::class,'GoogleLogin']);

Route::get("auth/google/callback",[indexController::class,'GoogleHandle']);



// ===== PAYPAL ======


Route::post('/paypal', [PaymentController::class, 'payWithpaypal'])->name('paypal');
Route::get('/status', [PaymentController::class, 'getPaymentStatus'])->name('status');

// ===== PAYPAL END ======




Route::get('product_details/{id}',[indexController::class,"product"]);
Route::view("contact","contact");
Route::view("blog","blog");

Route::get('/cartuser/{id}', [indexController::class, 'card'])->middleware('user'); // Use 'auth' middleware


Route::post('cart/{id}', [IndexController::class, 'cart'])->middleware('user');
Route::get('card/{id}', [IndexController::class, 'cardDelete'])->middleware('user');


Route::view("checkout","checkout");
Route::view("elements","elements");
Route::view("confirmation","confirmation");
Route::view("blog-details","blog-details");
Route::view("loginadmin","login1");


// ===== LOGIN PAGE END ===


// ===== ADMIN PANEL CHECK =====
Route::post('adminpanel',[LoginController::class,'adminpanel']);



// === ADMIN PANEL CHECK END ===


Route::middleware(['auth'])->group(function(){

// ===== ADMIN PANEL =====
Route::get('profile/{id}',[AdminController::class,"profile"]);
Route::get('adminpanel',[AdminController::class,"notification"]);
Route::view("adminpanel", "admin.index");
Route::get('logoutadmin',[AdminController::class,'logoutadmin']);
// === ADMIN PANEL END ===


// ======ORDERS====== 
Route::get('/order',[AdminController::class,'order']);
Route::get("ordershow/{id}",[AdminController::class,'ordershow'] );
Route::post('/ordershow/{id}', [AdminController::class, 'generatePDF']);


// ======ORDERS END====== 


// ==== Wateches CRUD =======
Route::view("addWatch", "admin.addWatch");
Route::POST('watches',[watchController::class,'insert']);
Route::get('watches',[watchController::class,'show']);
Route::get('watchEdit/{id}',[watchController::class,'edit']);
Route::post('watchupd/{id}',[watchController::class,'upd']);
Route::get('watchDelete/{id}',[watchController::class,'destroy']);
// ==== Wateches CRUD =======


// ==== ADMIN CRUD =======
Route::view("form","admin.form");
Route::post('/form', [AdminController::class, 'insert']);
Route::get('/admins', [AdminController::class, 'show']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::post('/upd/{id}', [AdminController::class, 'upd']);
Route::get('/delete/{id}', [AdminController::class, 'destroy']);
    // ==== ADMIN CRUD =======
});
