<?php

require("DB_Function.php");

// session_start();

// $postData = $_POST("postData");

// post.phpからpostData[postData_userId]と[postData_postId]を送ってもらう
// $act = DB_function::creat()->connect("team_h")->toSELECT("postData")
// ->toWHERE("postData_userId","=",$operator["postData_userId"])
// ->toAND("postData_postId","=",$operator["postData_postId"])
// ->toEXECUTE();

$act = DB_Function::creat()->connect("team_h")->toSELECT("post_user_id")
// ->toWHERE("post_user_id"/*,"=",$post["post_user_id"]*/)
// ->toAND("post_id"/*,"=",$post["post_id"]*/)
// ->toAND("post_created"/*,"=",$post["post_created"]*/)
->toEXECUTE();

$all = $act->fetch(PDO::FETCH_ASSOC);

foreach($all as $row){
    echo "{$row}<br>";
}
// if(status == false){
//     $error = $stmt->errorInfo();
//     echo json_encode(["error_msg" => "{$error"])
// }

// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $output = "";
// foreach($result as $recode){
//     $output .= "
//     <tr>
//         <td>{$recode["$title"]}</td>
//         <td>{$recode["$user_name"]}</td>
//         <td>{$recode["$post_created"]},/td>
//     </tr>
//     ";
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
            </tr>
        </thead>
        <tbody>
            <?= $row ?>
        </tbody>
    </table>
</body>
</html>


