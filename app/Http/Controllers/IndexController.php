<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Frameworksモデルのインスタンス化
        $notice = new Notice();
        // データ取得
        $notice_list = $notice->getData();

        // ビューを返す
        return view('index', ['notice_list' => $notice_list]);
    }
}