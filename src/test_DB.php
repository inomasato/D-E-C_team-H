<?php
require("DB_Function.php");

if(isset($_POST["test"])){
    $test = $_POST["test"];
    DB_function::creat()->connect("test")->toINSERT("test",$test)->toEXECUTE();
}


$act = DB_function::creat()->connect("test")->toSELECT("test",["title","content"])->toEXECUTE();
$all = $act->fetchAll(PDO::FETCH_ASSOC);
$output="";

foreach($all as $rows){
    $row = array_values($rows);
    for($i=0; $i<count($row); $i++){
        $output .= $row[$i].":";
    }
    $output.= "<br>";
}

$rnd = random_int(0,9999999);

?>

<form action="test_DB.php" method="post">
    <fieldset>
        <legend>テストデータ入力</legend>
        タイトル<br><input type="text" name="test[title]" value="テスト#<?php echo $rnd ?>" required><br>
        本文<br><input type="text" name="test[content]" value="これはテストだよ" required><br>
        名前<br><input type="text" name="test[name]" value="テスト君" required><br>
    </fieldset>
    <fieldset>
        <legend>操作</legend>
        <button name="cnt">登録</button>
    </fieldset>
</form>
<fieldset>
    <legend>投稿内容</legend>
    <?php echo $output ?>
</fieldset>
