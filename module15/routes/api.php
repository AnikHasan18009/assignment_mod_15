<?php

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




//Question 1
Route::get('/form', function () {
    return view('form');
});

Route::post('/form/submit',
function(Request $request){
    $validator= $request->validate([
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'password' => 'required|string|min:8'
]
    );
    return 'Registered successfully.';
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




//Questio 7
Route::any('/welcome',function(){ return view('welcome');});