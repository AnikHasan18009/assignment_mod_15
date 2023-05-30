<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Http\Requests\InputRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




//Question 2
Route::any('/home',function()
{
    return redirect('/dashboard',$status = 302);
});

Route::any('/dashboard',function()
{
    return "This is Dashboard";
});

//Question 6
Route::post("/contact/sendMail",ContactController::class);

//Question 5
Route::get("/products",[ProductController::class,'index']);
Route::get("/products/show/{id}",[ProductController::class,'show']);
Route::get("/products/edit/{id}",[ProductController::class,'edit']);
Route::post("/products/store",[ProductController::class,'store']);
Route::put("/products/{id}",[ProductController::class,'update']);
Route::delete("/products/{id}",[ProductController::class,'destroy']);
Route::get("/products/create",[ProductController::class,'create']);


//Questio 8
Route::any('/welcome',function(){ return view('welcome');});