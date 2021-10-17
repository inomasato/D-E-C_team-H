<?php

require("DB_Function.php");

$operator = $_POST["operator"];

$act = DB_function::creat()
->connect("team_h")
->toINSERT("operator",$operator)
->toEXECUTE();

echo $act;

?>