<?php
//session_start();
include("DB_Function.php");
//check_session_id();

$post = $_GET["post"];

//$pdo = connect_to_db();

$status = DB_Function::creat()->connect("team_h")->toDELETE("post",$post)->toEXECUTE($post);

//$sql = "DELETE FROM todo_table WHERE id=:id";

//$stmt = $pdo->prepare($sql);
//$stmt->bindValue(':id', $id, PDO::PARAM_INT);
//$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header("Location:read.php");
  exit();
}
