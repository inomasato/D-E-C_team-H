<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0 user-scalable=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('..\resources\css\main.css') }}">
    <style>

    </style>
</head>
<body>
    <div class="menu">
        <header>
            <div id="head_left_names">
                <div id="hospital_name">テストクリニック</div>
                <div id="account_name">テストオペレーター</div>
            </div>
            <div id="site_name">Sharet</div>
            <div id="logout">ログアウト</div>
        </header>
        <nav>
            <a class="menu_btn" id="btn1" href="http://localhost/demo/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">投稿一覧</div>
            </a>
            <a class="menu_btn" id="btn2" href="http://localhost/demo/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">投稿する</div>
            </a>
            <a class="menu_btn" id="btn3" href="http://localhost/demo/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">マイページ</div>
            </a>
            <a class="menu_btn" id="btn4" href="http://localhost/demo/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">お気に入りリスト</div>
            </a>
            <a class="menu_btn" id="btn5" href="http://localhost/demo/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">Coming soon...</div>
            </a>
            <a class="menu_btn" id="btn6" href="http://localhost/demo/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">Coming soon...</div>
            </a>
        </nav>
    </div>
    <div class="contents">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <div class="footer">
        <footer>
            @yield('footer')
        </footer>
    </div>


    {{-- <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle"></h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div> --}}
    
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { font-size: 16pt; color:#999; margin:5px; }
        h1{ font-size: 50pt; text-align: right; color:#f6f6f6;
        margin: -20px 0px -30px 0px; letter-spacing: -4pt; }
        ul{ font-size: 12pt; }
        hr{ margin: 25px 100px; border-top: 1px dashed #ddd; }
        .menutitle{ font-size: 14pt; border-top: 1px dashed #ddd; }
        .content{ margin: 10px; }
        .footer{ text-align: right; font-size: 10pt; margin: 10px;
         border-bottom: solid 1px #ccc; color: #ccc;}
        th{ background-color: #999; color: #fff; padding: 5px 10px; }
        td{ border: solid 1px #aaa; color: #999; padding: 5px 10px; }
    </>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle"></h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html> --}}