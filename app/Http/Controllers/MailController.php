<?php

namespace App\Http\Controllers;

use App\Mail\DevMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to($request->email)->send(new DevMail($request->only(['email', 'content'])));

        return response()->json(['status' => 'OK']);
    }
}
