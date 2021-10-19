<?php

include("DB_Function.php");
include("functions.php");

session_start();

$pdo = connect_to_db();

$user_id = $_SESSION("user_id");
$post_id = $_POST("post_id");               //post.phpからPOSTで送る

$sql = toSELECT ($post,$post_id = []);　　//post.phpからtitleとpost_createdを持ってくる

// if(status == false){
//     $error = $stmt->errorInfo();
//     echo json_encode(["error_msg" => "{$error"])
// }
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach($result as $recode){
        $output .= "
        <tr>
            <td>{$recode["$title"]}</td>
            <td>{$recode["$user_name"]}</td>
            <td>{$recode["$post_created"]},/td>
        </tr>
        ";
    }
}

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
            </tr>
        </thead>
        <tbody>
            <?= $output ?>
            <a href="like.php">good</a>
        </tbody>
    </table>
</body>
</html>


