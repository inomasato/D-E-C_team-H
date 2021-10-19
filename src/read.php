<?php

require("DB_Function.php");

$act = DB_Function::creat()->connect("team_h",)->toSELECT("post",$columns = ["post_user_id, post_id"])
->toEXECUTE();

$all = $act->fetch(PDO::FETCH_ASSOC);

foreach($all as $row){
    echo "{$row}<br>";
}
// if(status == false){
//     $error = $stmt->errorInfo();
//     echo json_encode(["error_msg" => "{$error"])
// }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧</title>
</head>
<body>
    <header>
    </header>
    <a href="post.php">投稿画面</a>
    <a href="logout.php">logout</a>
    <legend>投稿</legend>
    <table>
        <thead>
            <tr>
                <th>名前</th>
                <th>title</th>
                <th>更新日</th>
                <form action="like.php" method="POST">
                    <input type = "hidden" name="user_id" value="<?= $all["user_id"] ?>">;
                    <input type = "hidden" name="user_id" value="<?= $all["user_id"] ?>">;
                    <button>like</button>
                </form>
            </tr>
        </thead>
        <tbody>
            <?= $row ?>
        </tbody>
    </table>
</body>
</html>


