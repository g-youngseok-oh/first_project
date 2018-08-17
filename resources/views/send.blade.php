@extends('layout.common')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('main_id', '')


@include('layout.head')

@include('layout.header')

@section('content')
    <div class="contents pt150">
        <div class="inner">

            <section>

                <h2>お問い合わせありがとうございました。</h2>
                <p><strong class="color1">※当ページは古いブラウザや、スマホ・タブレットなどの携帯端末に必要です。必ず用意し、各プルダウンメニュー先へのリンクを設けておいて下さい。</strong></p>


            </section>

        </div>
        <!--/inner-->
    </div>
    <!--/contents-->
@endsection

@include('layout.footer')
