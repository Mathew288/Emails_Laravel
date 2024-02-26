<?php

namespace App\Http\Controllers;

use App\Mail\CorreosLaravel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail() {
        $subject="Email";
        $body="This is a email";
        Mail::to("guachrichard@gmail.com")->send(new CorreosLaravel($subject,$body));
    }
}
