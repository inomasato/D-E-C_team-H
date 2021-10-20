<?php
require("functions.php");
require("DB_Function.php");


if(isset($_POST["test"])){
    $test = $_POST["test"];
    DB_function::creat()->connect("test")->toINSERT("test",$test)->toEXECUTE();
}


$act = DB_function::creat()->connect("test")->toSELECT("test")->toWHERE("title","%:%","514")
->toOR("title","%:%","テスト")->toEXECUTE(PDO::FETCH_ASSOC);
$output=table_set($act,2);

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
        <button name="cnt">登録</button> <button type="button"><a href="test_DB.php">再読み込み</a></button>
    </fieldset>
</form>
<fieldset>
    <legend>投稿内容</legend>
    <?php echo $output ?>
</fieldset>
