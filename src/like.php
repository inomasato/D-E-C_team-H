<?php
require("DB_Function.php");

$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];

$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM like_table WHERE user_id=:user_id AND post_id=:post_id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':post_id', $post_id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
    $like_count = $stmt->fetchColumn();
    // var_dump($like_count);
}

if ($like_count != 0) {
  $sql = 'DELETE FROM like WHERE user_id=:user_id AND post_id=:post_id';
} else {
  $sql = toINSERT ($post,$post_id = []); // user_id,post_idを入れる
}

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header("Location:read.php");
  exit();
}
