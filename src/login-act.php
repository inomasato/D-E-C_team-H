<?php

require("DB_Function.php");

$operator = $_POST["operator"];

$act = DB_function::creat()->connect("team_h")->toSELECT("operator")
->toWHERE("operator_loginId","=",$operator["operator_loginId"])
->toAND("operator_password","=",$operator["operator_password"])
->toEXECUTE();

$all = $act->fetch(PDO::FETCH_ASSOC);

foreach($all as $row){
    echo "{$row}<br>";
}

?>