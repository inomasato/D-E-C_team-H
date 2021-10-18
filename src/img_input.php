<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="img_input-act.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>画像登録</legend>
        アイコン画像<br><input type="file" name="upImg" accept="image/png,image/jpeg" required><br>
    </fieldset>
    <fieldset>
        <legend>操作</legend>
        <button>登録</button>
    </fieldset>
</form>
</body>
</html>