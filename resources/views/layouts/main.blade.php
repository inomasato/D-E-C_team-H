<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0 user-scalable=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('..\resources\css\main.css') }}">
    <link rel="stylesheet" href="{{ asset('..\resources\css\@yield('css')') }}">
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
</html>