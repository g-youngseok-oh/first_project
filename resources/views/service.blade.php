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

                <h2>サービスのご案内</h2>
                <p><strong class="color1">※当ページは古いブラウザや、スマホ・タブレットなどの携帯端末に必要です。必ず用意し、各プルダウンメニュー先へのリンクを設けておいて下さい。</strong></p>

                <ul class="disc">
                    <li><a href="service/1">SERVICE1はこちら</a></li>
                    <li><a href="service/2">SERVICE2はこちら</a></li>
                    <li><a href="service/3">SERVICE3はこちら</a></li>
                </ul>

            </section>

        </div>
        <!--/inner-->
    </div>
    <!--/contents-->
@endsection

@include('layout.footer')
