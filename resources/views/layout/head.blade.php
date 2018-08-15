@section('header')
    <header>
        <div class="inner">
            <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE LOGO"></a></h1>
            <!--801px以上の端末用メニュー-->
            <nav id="menubar">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/company">COMPANY</a></li>
                    <li><a href="/service">SERVICE</a>
                        <ul class="ddmenu">
                            <li><a href="/service/1">SERVICE:1</a></li>
                            <li><a href="/service/2">SERVICE:2</a></li>
                            <li><a href="/service/3">SERVICE:3</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">CONTACT</a></li>
                </ul>
            </nav>
            <!--800px以下の端末用メニュー-->
            <nav id="menubar-s">
                <ul>
                    <li><a href="/index">HOME</a></li>
                    <li><a href="/company">COMPANY</a></li>
                    <li><a href="/service">SERVICE</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
@endsection