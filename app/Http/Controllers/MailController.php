<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getMail() {
        $data = ['name' => 'Lucia'];
        Mail::to('lucia1alfaro@gmail.com')->send(new TestMail($data));
    }
}
