<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class IndexController extends Controller
{
    public function index()
    {
        // Noticeモデルのインスタンス化
        $notice = new Notice();

        // データ取得
        $notice = $notice->getList()->setNewTag();


        // ビューを返す
        return view('index', ['notice_list' => $notice->data_list]);
    }
}
