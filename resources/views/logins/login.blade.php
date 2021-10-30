<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="{{ asset('..\resources\css\logins.css') }}">
    <style>

    </style>
</head>
<body>
    <header>
        <div class="sharet">Sharet</div>
    </header>
    <div class='content'>    
        <div class="form_content">
            {{-- <form action="login" method="POST"> --}}
                <form action="login" method="POST">
                @csrf
                <div class="form_text">ログインID</div>
                <input type="text" name="loginId">
                <br>
                <div class="form_text">パスワード</div>
                <input type="text" name="password">
                <br>
                <button type="submit">ログイン</button>
            </form>
        </div>
    </div>    
    <footer></footer>
</body>
</html>