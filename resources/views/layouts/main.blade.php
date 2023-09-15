<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0 user-scalable=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('..\resources\css\main.css') }}">
    @yield('css')
    <style>

    </style>
</head>
<body>
    <div class="menu">
        <header>
            <div id="head_left_names">
                <div id="hospital_name">デモクリニック</div>
                <div id="account_name">
                    @yield('user_trueName')
                </div>
            </div>
            <div id="site_name">Sharet</div>
            <a class="logout" id="logout" href="http://localhost/D-E-C_team-H/public/logout">ログアウト</p>
        </header>
        <nav>
            <a class="menu_btn" id="btn1" href="http://localhost/D-E-C_team-H/public/sharet">
                <div class="menu_icon"></div>
                <div class="menu_text">投稿一覧</div>
            </a>
            <a class="menu_btn" id="btn2" href="http://localhost/D-E-C_team-H/public/create">
                <div class="menu_icon"></div>
                <div class="menu_text">投稿する</div>
            </a>
            <a class="menu_btn" id="btn3" href="http://localhost/D-E-C_team-H/public/mypage">
                <div class="menu_icon"></div>
                <div class="menu_text">マイページ</div>
            </a>
            <a class="menu_btn" id="btn4" href="http://localhost/D-E-C_team-H/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">お気に入りリスト</div>
            </a>
            <a class="menu_btn" id="btn5" href="http://localhost/D-E-C_team-H/public/hello">
                <div class="menu_icon"></div>
                <div class="menu_text">Coming soon...</div>
            </a>
            <a class="menu_btn" id="btn6" href="http://localhost/D-E-C_team-H/public/hello">
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
</body>
</html>