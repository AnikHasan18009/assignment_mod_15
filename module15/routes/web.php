<?php


use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use App\Http\Requests\InputRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidator;
use App\Http\Controllers\ContactController;

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


//Question 6
Route::post("/contact/sendMail",ContactController::class);

//Questio 7
Route::any('/welcome',function(){ return view('welcome');});




