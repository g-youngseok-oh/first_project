<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class SendController extends Controller
{

    public function confirm(Request $request)
    {
        $name = $request->input('name');
        $name = $request->input('name');
        $name = $request->input('name');
        $name = $request->input('name');
        $name = $request->input('name');

        // ビューを返す
        return view('send', []);
    }

    public function send(Request $request)
    {
        $name = 'ララベル太郎';
        $text = 'これからもよろしくお願いいたします。';
        $to = 'hellsfire5030@gmail.com';

        $name = $request->input('name');
        $name = $request->input('name');
        $name = $request->input('name');
        $name = $request->input('name');
        $name = $request->input('name');

        Mail::to($to)->send(new Contact($name, $text));
        // ビューを返す
        return view('send', []);
    }
}
