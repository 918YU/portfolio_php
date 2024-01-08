<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // データベース接続の設定
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "board";

    // データベースに接続
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 接続エラーの確認
    if ($conn->connect_error) {
        die("データベースへの接続に失敗しました: " . $conn->connect_error);
    }

    // フォームから送信されたデータを取得
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    // パスワードの一致を確認
    if ($password !== $confirm_password) {
        die("エラー: パスワードが一致しません");
    }

    // パスワードのハッシュ化
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // データベースにユーザーを登録
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "ユーザー登録が成功しました";
    } else {
        echo "エラー: " . $sql . "<br>" . $conn->error;
    }

    // データベース接続を閉じる
    $conn->close();
    ?>

    <a href="./index.php">掲示板に戻る</a>
</body>

</html>