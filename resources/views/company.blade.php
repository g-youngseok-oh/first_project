@extends('layout.common')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')


@include('layout.head')

@include('layout.header')

@section('content')
    <div class="contents pt150">
        <div class="inner">

            <div class="main">

                <section>

                    <h2>無料テンプレートのご利用前に必ずお読み下さい（※利用規約のご案内）</h2>
                    <p>このテンプレートは、<a href="http://template-party.com/">Template Party</a>にて無料配布している『ビジネスサイト向け 無料ホームページテンプレート tp_biz38』です。必ずダウンロード先のサイトの利用規約をご一読の上でご利用下さい。</p>
                    <p><span class="color1">■<strong>HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong></span><br>
                        わざと見えなく加工する事も禁止です。</p>
                    <p><span class="color1">■<strong>どうしても下部の著作を外したい場合は</strong></span><br>
                        <a href="http://template-party.com/">Template-Party</a>の<a href="http://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

                    <h3>テンプレートに梱包されているjsファイル(javascript)について</h3>
                    <p>これらのファイルは全て<a href="http://www.crytus.co.jp/">有限会社クリタス様</a>提供のプログラムです。jsファイルは改変せずにご利用下さい。<br>
                        また、当サイトのテンプレート以外に使いたいなど、「プログラムのみ」を使う場合は<a href="http://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。</p>

                </section>

                <section>

                    <h2>当テンプレートについて</h2>

                    <h3>当テンプレートはhtml5+CSS3(レスポンシブWEBデザイン)です</h3>
                    <p>当テンプレートは、パソコン、スマホ、タブレットでhtml共通のレスポンシブWEBデザインになっております。<br>
                        古いブラウザ（※特にIE8以下）で閲覧した場合にCSSの一部が適用されない（各を丸くする加工やグラデーションなどの加工等）のでご注意下さい。</p>

                    <h3>各デバイスごとのレイアウトチェックは</h3>
                    <p>最終的なチェックは実際のタブレットやスマホで行うのがおすすめですが、臨時チェックは最新のブラウザ(IEならIE10以降)で行う事もできます。ブラウザの幅を狭くしていくと、各端末サイズに合わせたレイアウトになります。</p>
                    <p>注意：cssはリアルタイムで反映されますが、javascript(js)は<span class="color1">ブラウザを再読み込み</span>させないと反映されないので、レイアウトが切り替わったらブラウザを再読み込みさせる事をおすすめします。javascriptは小さい端末用の開閉ブロックなどに使われています。</p>

                    <h3>各デバイス用のスタイル変更は</h3>
                    <p>cssフォルダのstyle.cssファイルで行って下さい。詳しい説明も入っています。<br>
                        前半はパソコン環境を含めた全端末の共通設定になります。中盤以降、各端末向けのスタイルが追加設定されています。<br>
                        media=&quot; (～)&quot;の「～」部分でcssを切り替えるディスプレイのサイズを設定しています。ここは必要に応じて変更も可能ですが、変更した場合、htmlの下部のjavascriptのウィンドウサイズの条件指定も合わせて変更しなくてはならないものもあります。</p>

                    <h3>スマホ・タブレットなどの小さい端末環境（※幅800px以下の環境）でのみ</h3>
                    <p>メインメニューが折りたたみ式（３本バーアイコン化）になります。バーのスタイル設定もstyle.cssで行う事ができます。</p>

                    <h3>画像ベースは</h3>
                    <p>「base」フォルダに入っていますのでご自由にご活用下さい。<br>
                        写真の元素材を当社運営の<a href="http://photo-chips.com/">PHOTO-CHIPS</a>や<a href="http://decoruto.com/">DECORUTO</a>で配布している場合もございます。</p>

                </section>

            </div>
            <!--/main-->

            <div class="sub">

                <nav class="box1">
                    <h2>SUB MENU</h2>
                    <ul class="submenu mb10">
                        <li><a href="#">主要リンクサンプル</a></li>
                        <li><a href="#">主要リンクサンプル</a></li>
                        <li><a href="#">主要リンクサンプル</a></li>
                        <li><a href="#">主要リンクサンプル</a></li>
                    </ul>
                </nav>

                <aside>
                    <h2>関連情報</h2>
                    <ul class="submenu">
                        <li><a href="#">関連情報リンク</a></li>
                        <li><a href="#">関連情報リンク</a></li>
                        <li><a href="#">関連情報リンク</a></li>
                        <li><a href="#">関連情報リンク</a></li>
                    </ul>
                </aside>

                <div class="box1">
                    <section>
                        <h2>この見出しはh2タグです</h2>
                        <p>このボックスは、class="box1"と指定すれば出ます。ここに画像を置く場合、PC環境だと幅198pxまで。それ以上だと自動縮小されます。</p>
                    </section>
                </div>
                <!--/box1-->

                <section>
                    <h2>この見出しはh2タグです</h2>
                    <p>ここのスペースも使えます。ここに画像を置く場合、PC環境だと幅230pxまで。それ以上だと自動縮小されます。</p>
                </section>

            </div>
            <!--/sub-->

        </div>
        <!--/inner-->
    </div>
    <!--/contents-->
@endsection

@include('layout.footer')
