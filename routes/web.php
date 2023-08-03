<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

        // email verification

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {

    return view('welcome');
});

Route::get('/about', function () {

    return view('about');
});

route::get('/contact' , [UserController::class,'index'
]);
//category controller

route::get('/category/all' , [CategoryController::class,'AllCat'

])->name('all.category');
route::post('/category/add' , [CategoryController::class,'AddCat'

])->name('store.category');
route::get('/category/edit/{id}' , [CategoryController::class,'Edit']);
route::post('/category/update/{id}' , [CategoryController::class,'Update']);
route::get('/softdelete/category/{id}' , [CategoryController::class,'SoftDelete']);
route::get('/category/restore/{id}' , [CategoryController::class,'Restore']);
route::get('/category/pdelete/{id}' , [CategoryController::class,'Pdelete']);


//Brand Route

route::get('/brand/all',[BrandController::class, 'AllBrand'])->name('all.brand');
route::post('/brand/add' , [BrandController::class,'StoreBrand'])->name('store.brand');
route::get('/brand/edit/{id}' , [BrandController::class,'Edit']);
route::post('/brand/update/{id}' , [BrandController::class,'Update']);
route::get('/brand/delete/{id}' , [BrandController::class,'Delete']);
//multi image route

route::get('/multi/image',[BrandController::class, 'Multipic'])->name('multi.pic');
route::post('/image/add' , [BrandController::class,'StoreImg'])->name('store.image');

//$user =User::all();

Route::middleware (['auth:sanctum', 'verified']) ->get ('/dashboard', function () {
    //$users =User::all();

   // $users=DB::table('users')->get();

        return view ('admin.index');
    
})->name('dashboard');
route::get('/user/logout',[BrandController::class, 'Logout'])->name('user.logout');

