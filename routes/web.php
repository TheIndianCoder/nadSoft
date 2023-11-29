<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersOrderController;

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
Route::get('/', [MemberController::class, 'index']);
Route::post('add-member/', [MemberController::class, 'postIndex'])->name('post.index');
Route::get('add-product/', [MembersOrderController::class, 'addProduct']);
Route::post('add-product/', [MembersOrderController::class, 'postAddProduct'])->name('post.addProduct');
Route::get('add-second-product/', [MembersOrderController::class, 'addSecondProduct']);
Route::post('add-second-product/', [MembersOrderController::class, 'postAddSecondProduct']);
Route::get('welcome/', [MembersOrderController::class, 'welcome']);


// Session route ------------------------
Route::get('all-session-data', [MemberController::class, 'getSessionData']);
Route::get('destroy-session', [MemberController::class, 'distroySessionData']);
// Route::get('/', function () {
//     return view('index');
// });
