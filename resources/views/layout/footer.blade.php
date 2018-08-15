@section('footer')
    <footer>
        <small>Copyright&copy; <a href="index.html">Sample Site</a> All Rights Reserved.</small>
        <span class="pr"><a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a></span>
    </footer>

    <p id="pagetop"><a href="#">↑ </a></p>



    <!--スマホ用更新情報　480px以下-->
    <script type="text/javascript">
        if (OCwindowWidth() <= 480) {
            open_close("newinfo_hdr", "newinfo");
        }
    </script>

    <!--メニューの３本バー-->
    <div id="menubar_hdr" class="close"><span></span><span></span><span></span></div>
    <!--メニューの開閉処理条件設定　800px以下-->
    <script type="text/javascript">
        if (OCwindowWidth() <= 800) {
            open_close("menubar_hdr", "menubar-s");
        }
    </script>
@endsection