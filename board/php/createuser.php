<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録フォーム</title>
</head>

<body>
    <h2>ユーザー登録</h2>

    <form action="register.php" method="post">
        ID　　　　: <input type="text" name="id" required><br>
        ユーザー名: <input type="text" name="username" required><br>
        パスワード: <input type="password" name="password" required><br>
        パスワード(確認): <input type="password" name="confirm_password" required><br>
        メールアドレス: <input type="email" name="email" required><br>
        <input type="submit" value="登録">
    </form>

</body>

</html>