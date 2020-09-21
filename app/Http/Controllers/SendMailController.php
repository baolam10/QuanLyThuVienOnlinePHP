<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;

class SendMailController extends Controller
{
    public function home()
    {
        return view("Lien-he.Lien-he");
    }

    public function sendmail(Request $get)
    {
        // dd(4432432);
        // exit();
       // return "Hello";
       $MSHS = $get->MSHS;
       $Ten = $get->Ten;
       $Email = $get->Email;
       $message = $get->message;

       Mail::to($Email)->send(new SendMail($MSHS, $Ten, $message));
       Session::flash("success");
       return back();
    }
}
