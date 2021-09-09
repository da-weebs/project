<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendEmail(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $name = $request->name;

        $details =[
            'name'=>$name,
            'username'=>$username,
            'password'=>$password,
            'title' => 'Mail from UTM PSM Scoring Tool',
            'body' => 'Hello your username : '.$username. ' and your Password : '.$password
        ];

        Mail::to("$request->email")->send(new TestMail($details));
        return "Email Sent";
    }
}
