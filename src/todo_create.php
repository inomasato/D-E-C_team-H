<?php
//session_start();
include("DB_Function.php");
//check_session_id();

// if (
//   !isset($_POST['title']) || $_POST['title'] == '' ||
//   !isset($_POST['content']) || $_POST['content'] == ''
// ) {
//   exit('paramError');
// }



// $title = $_POST['title'];
// $content = $_POST['content'];

$post = $_POST["post"];

$status = DB_Function::creat()->connect("team_h")->toINSERT("post",$post)->toEXECUTE($post);


// $pdo = connect_to_db();

// $sql = 'INSERT INTO title_table(id, title, content, created_at, updated_at) VALUES(NULL, :title, :content, now(), now())';

// $stmt = $pdo->prepare($sql);
// $stmt->bindValue(':title', $title, PDO::PARAM_STR);
// $stmt->bindValue(':content', $content, PDO::PARAM_STR);
// $status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header("Location:todo_input.php");
  exit();
}