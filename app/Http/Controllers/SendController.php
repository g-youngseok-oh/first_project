<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class SendController extends Controller
{
    public function send()
    {
        $name = 'ララベル太郎';
        $text = 'これからもよろしくお願いいたします。';
        $to = 'hellsfire5030@gmail.com';

        Mail::to($to)->send(new Contact($name, $text));
        // ビューを返す
        return view('send', []);
    }
}
