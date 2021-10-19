<?
require("DB_Function.php");

if(isset($_POST["test"])){
    $test = $_POST["test"];
    DB_function::creat()->connect("test")->toINSERT("test",$test)->toEXECUTE();
}


$act = DB_function::creat()->connect("test")->toSELECT("test")->toEXECUTE();

$all = $act->fetchAll(PDO::FETCH_ASSOC);

foreach($all as $row){
    
    echo "{$row}<br>";
}

?>

