<?php
require("functions.php");
require("DB_Function.php");


// $pdo = connect_to_db();

// $sql = "SELECT post_title, post_user_id, post_created FROM post JOIN user ON post.post_user_id = user.user_id";

// $stmt = $pdo->prepare($sql);
// $status = $stmt->execute();

// if ($status == false) {
//   $error = $stmt->errorInfo();
//   echo json_encode(["error_msg" => "{$error[2]}"]);
//   exit();
// } else {
//   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   $output = "";
//   foreach ($result as $record) {
//     $output .= "
//       <tr>
//         <td>{$record["post_title"]}</td>
//         <td>{$record["user_name"]}</td>
//         <td>{$recode["post_created"]}</td>
//         <td><a href='like_create.php?user_id={$user_id}&todo_id={$record["id"]}'>like</a></td>
//         // <td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>
//         // <td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>
//       </tr>
//     ";
//   }
// }

$act = DB_Function::creat()->connect("team_h")->toSELECT("post",["post_user_id","post_id","post_content"])->toEXECUTE();

$all = $act->fetchAll(PDO::FETCH_ASSOC);

$output = table_set(["post_user_id","post_id","post_content"],$all,2);
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
    <a href="input.php">投稿画面</a>
    <a href="logout.php">logout</a>
    <legend>投稿</legend>
    <table>
        <thead>
            <tr>
                <th>タイトル</th>
                <th>名前</th>
                <th>更新日</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $output ?>
            <form action="like.php" method="POST">
                <input type = "hidden" name="post_user_id" value="<?php echo $all[0]["post_user_id"]; ?>">
                <input type = "hidden" name="post_id" value="<?php echo $all[0]["post_id"]; ?>">
                <button>like</button>
            </form>
        </tbody>
    </table>
</body>
</html>


