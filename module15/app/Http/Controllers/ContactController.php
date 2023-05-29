<?php

namespace App\Http\Controllers;

use PHPUnit\Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SingleActionControllerMail;

class ContactController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $mailData=[
            'title' =>$request->input('title')
            ,'body' =>$request->input('body')
        ];
        try{
        Mail::to('anikhasan106724@gmail.com')->send(new SingleActionControllerMail($mailData));
        return response("Mail Sent");
        }
        catch(Exception $e)
        {
            return response("Unable to send Mail");
        }
    }
}
