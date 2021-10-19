<?php
//session_start();
include("DB_Function.php");
//check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/input-style.css">
  <title>Posting（入力画面）</title>
</head>

<body>
  <nav>
  <form action="create.php" method="POST">
    <div>
      <fieldset>
        <legend>Posting（入力画面）</legend>
        <a href="read.php">みんなの投稿</a>
        <a href="logout.php">ログアウト</a>
        <input type="hidden" name="post[post_user_id]" value="1">
        <div>
          件名: <input type="text" name="post[post_title]" size=40>
        </div>
        <div>
          内容: <textarea name = "post[post_content]" rows = 10 cols = 40></textarea><br>
        </div>
        <div>
          <button>Posting</button>
        </div>
      </fieldset>
    </div>
  </form>
</nav>

</body>

</html>