<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="register-act.php" method="get" id="form" >
    <fieldset>
        <legend>登録</legend>
        名前<br><input type="text" name="operator[operator_name]" required><br>
        ログインID<br><input type="text" name="operator[operator_loginId]" required><br>
        パスワード<br><input type="text" name="operator[operator_password]" required><br>
        病院ID<br><input type="text" name="operator[operator_hospital_id]" required><br>
    </fieldset>
    <fieldset>
        <legend>操作</legend>
        <button>登録</button>
    </fieldset>
</form>
</body>
</html>