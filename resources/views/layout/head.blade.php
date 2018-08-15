@section('header')
    <header>
        <div class="inner">
            <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE LOGO"></a></h1>
            <!--801px以上の端末用メニュー-->
            <nav id="menubar">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="company.html">COMPANY</a></li>
                    <li><a href="service.html">SERVICE</a>
                        <ul class="ddmenu">
                            <li><a href="service1.html">SERVICE:1</a></li>
                            <li><a href="service2.html">SERVICE:2</a></li>
                            <li><a href="service3.html">SERVICE:3</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
            <!--800px以下の端末用メニュー-->
            <nav id="menubar-s">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="company.html">COMPANY</a></li>
                    <li><a href="service.html">SERVICE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
@endsection