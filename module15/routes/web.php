<?php


use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use App\Http\Requests\InputRequest;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidator;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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
//Question 1
Route::get('/form', function () {
    return view('form');
});

Route::post('/form/submit',function(Request $request){

    $v = Validator::make($request->all(), [
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'password' => 'required|string|min:8'
]);
 
    if ($v->fails())
    {
        return redirect()->back()->withErrors($v->errors());
    }
    return redirect()->back()->with('success','Registered successfully');
});


//Question 2
Route::any('/home',function()
{
    return redirect('/dashboard',$status = 302);
});

Route::any('/dashboard',function()
{
    return "This is Dashboard";
});


//Question 4
Route::middleware(AuthMiddleware::class)->group(function () {
Route::get("/profile",function(){return response("This is profile");});
Route::get("/settings",function(){return response("This is settings");});
});

//Question 6
Route::post("/contact/sendMail",ContactController::class);

//Question 7
Route::resource('post',PostController::class);

//Questio 8
Route::any('/welcome',function(){ return view('welcome');});




