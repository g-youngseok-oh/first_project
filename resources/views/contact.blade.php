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

                <h2>お問い合わせ</h2>
                <p><strong class="color1">※以下はフォームサンプルです。フォーム専用のプログラムがないと動作しません</strong>のでご注意下さい。当サイトでもお問い合わせフォーム制作も承っております。<a href="http://template-party.com/file/form.html">詳しくはこちら</a>をご覧下さい。</p>

                <form method="post" action="/send/confirm">
                <table class="ta1 mb1em">
                    <tr>
                        <th colspan="2" class="tamidashi">※マークは入力必須です</th>
                    </tr>
                    <tr>
                        <th>お名前※</th>
                        <td><input type="text" name="name" size="30" class="ws"></td>
                    </tr>
                    <tr>
                        <th>メールアドレス※</th>
                        <td><input type="text" name="email" size="30" class="ws"></td>
                    </tr>
                    <tr>
                        <th>ご住所(都道府県)</th>
                        <td>
                            <select name="city">
                                <option value="" selected="selected">都道府県選択</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>ご住所(市区町村以下)</th>
                        <td><input type="text" name="address" size="30" class="wl"></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ項目※</th>
                        <td>
                            <label><input type="checkbox" name="category[]" value="システム開発">システム開発</label><br>
                            <label><input type="checkbox" name="category[]" value="ホームページ政策">ホームページ政策</label><br>
                            <label><input type="checkbox" name="category[]" value="システム改修">システム改修</label><br>
                            <label><input type="checkbox" name="category[]" value="コンサルティング">コンサルティング</label><br>
                            <label><input type="checkbox" name="category[]" value="見積もり">見積もり</label>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ詳細※</th>
                        <td><textarea name="contact" cols="30" rows="10" class="wl"></textarea></td>
                    </tr>
                </table>

                <p class="c">
                    {{ csrf_field() }}
                    <input type="submit" value="内容を確認する">
                </p>
                </form>

            </section>

        </div>
        <!--/inner-->
    </div>
    <!--/contents-->
@endsection

@include('layout.footer')
