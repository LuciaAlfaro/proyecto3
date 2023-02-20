<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //Solo funciona con las variables de entorno
    public static function getMail() {
        $data_name = ['name' => env('DATABASE_ADMIN')];
        $data_email = ['email' => env('DATABASE_EMAIL')];
        Mail::to($data_email)->send(new TestMail($data_name));
    }
}
