@extends('layout.common')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')


@include('layout.head')

@include('layout.header')

@section('content')
    <div class="contents pt150">
        <div class="inner">

            <section>

                <h1 class="type1">
                    <span class="color1">S</span>AMPLE<br>
                    <span class="color1">T</span>ITLE<br>
                    <span class="color1">S</span>AMPLE
                </h1>

                <p>ここに説明文など入れます。サンプルテキスト。サンプルテキスト。サンプルテキスト。<br>
                    サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。<br>
                    サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>
                <p><a href="company.html">当テンプレートご利用の際は必ずこちらをご一読下さい。</a></p>

            </section>

        </div>
        <!--/inner-->
    </div>
    <!--/contents-->

    <div class="contents bg1">
        <div class="inner">

            <section id="new">
                <h2 id="newinfo_hdr" class="close">更新情報・お知らせ</h2>
                <dl id="newinfo">
                    <dt>2017/02/07</dt>
                    <dd>cssを中心に更新。<span class="newicon">NEW</span></dd>
                    <dt>2016/06/24</dt>
                    <dd>tp_biz38公開。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。<a href="#">サンプルテキスト。</a>サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                </dl>
            </section>

            <section>
                <h2>企業向けCMSプログラム販売中</h2>
                <p>トップページや会社概要ページや業務案内ページなどの各ページレイアウト設定済みのプログラムを販売中です。<a href="http://template-party.com/hanyo_program/index2.html">詳しくはこちらをご覧下さい。</a><br>
                    <a href="http://template-party.com/hanyo_program/index2.html"><img src="http://template-party.com/hanyo_program/img_temp600.jpg" alt="" width="600" height="300"></a></p>
            </section>

        </div>
        <!--/inner-->
    </div>
    <!--/contents-->
@endsection

@include('layout.footer')
