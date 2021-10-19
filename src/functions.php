<?php

function connect_to_db()
{
  $dbn = 'mysql:dbname=team_h;charset=utf8;port=3306;host=localhost';
  $user = 'root';
  $pwd = '';

  try {
    return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
  }
}

function check_session_id()
{
  if (
    !isset($_SESSION["session_id"]) ||
    $_SESSION["session_id"] != session_id()
  ) {
    header("Location:register.php");
  } else {
    session_regenerate_id(true);
    $_SESSION["session_id"] = session_id();
  }
}

function table_set($inner_array,$border_num,$title_array=[]){


  if(count($title_array)>0){
    $title_array = array_keys($inner_array);
  }
  
  $th_inner = "";
  foreach ($title_array as $title){
      $th_inner .= "    <th>{$title}</th>\n";
  }

  $th_tags = "\n<tr>\n{$th_inner}</tr>\n";

  $td_tags = "";
  foreach ($inner_array as $record) {
      $td_inner = "";
      $array = array_values($record);
      for($i=0; $i<count($array); $i++){
          $td_inner .= "    <td>{$array[$i]}</td>\n";
      }
      $td_tags .= "<tr>\n{$td_inner}</tr>\n";
  }

  return "
<table border='{$border_num}'>
<thead>{$th_tags}</thead>
<tbody>\n{$td_tags}</tbody>
</table>";
}