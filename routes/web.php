<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\home;
use App\http\Controllers\UserController;
use App\http\Controllers\admincontro;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SelldataController;
use App\Models\category;
use App\Models\selldata;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a grou
use App\http\Controllers\home;p which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    $data=selldata::All();
      return view('index',compact('data'));
});
Route::get('/dashboard', function () {
    $data=selldata::All();
      return view('dashboard',compact('data'));
});

Route::get('/index-2', function () {
    return view('index-2');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/menu', function () {
    $data=selldata::All();
      return view('menu',compact('data'));
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/adminmaster', function () {
    return view('adminmastermaster');
});

Route::get('/adminhomepage', function () {
    return view('adminhomepage');
});

Route::get('/category', function () {
    return view('category');
});
Route::get('/addcategory', function () {
    return view('addcategory');
});
Route::get('/editcategory', function () {
    return view('editcategory');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/addfeedback', function () {
    return view('addfeedback');
});
Route::get('/editfeedback', function () {
    return view('editfeedback');
});
Route::get('/selldata', function () {
    return view('selldata');
});
Route::get('/addselldata', function () {
    $data=category::All();
      return view('addselldata',compact('data'));
});
Route::get('/editselldata', function () {
    return view('editselldata');
});
Route::get('/getorder', function () {
    $data=selldata::All();
      return view('getorder',compact('data'));
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/userdata',[home::class,'showUser']);
Route::delete('/userdata/{id}',[home::class,'destroy']);
Route::get('/edituser/{id}',[home::class,'edit']);
Route::put('edituser/edituser/{id}',[home::class,'update']);
Route::post('/searchu',[home::class,'searchdata']);

Route::resource('/category',CategoryController::class);
Route::get('/category',[CategoryController::class,'show']);
Route::post('/searchc',[CategoryController::class,'searchdata']);

Route::resource('/feedback',FeedbackController::class);
Route::get('/feedback',[FeedbackController::class,'show']);
Route::post('/searchf',[FeedbackController::class,'searchdata']);


Route::resource('/selldata',SelldataController::class);
 // Route::get('editselldata/{id}',[SelldataController::class,'edit']);

Route::get('/selldata',[SelldataController::class,'show']);
Route::post('/search',[SelldataController::class,'searchdata']);
Route::get('/orderPro/{id}',[SelldataController::class,'orderPro'])->name('orderPro');

Route::post('/searchh',[SelldataController::class,'searchdata1']);



Route::get('/deleteuser/{id}',[SelldataController::class,'delete']);




Route::get('/user/{id}', [UserController::class, 'show']);


Route::get('/dashboard',[home::class,'checkuser'])
->middleware(['auth'])->name('dashboard');

 Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::get('add-to-cart/{id}',[SelldataController::class,'addtocart'])->name('add-to-cart');
    // Route::get('/', [SelldataController::class, 'index']);
Route::get('cart', [SelldataController::class, 'cart'])->name('cart');
// Route::get('add-to-cart/{id}', [SelldataController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [SelldataController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [SelldataController::class, 'remove'])->name('remove_from_cart');

 


require __DIR__.'/auth.php';
