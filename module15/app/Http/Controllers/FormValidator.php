<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidator extends Controller
{
    public function showform() {
        return view('form');
     }
     public function validateform(Request $request) {
        $this->validate($request,[
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8']);
            return redirect()->back()->with('success','input valid');
     }
}
