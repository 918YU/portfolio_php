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
    $username = $_POST['username'];
    $color = $_POST['color'];
    $message = $_POST['message'];

    // データベースに投稿を保存
    $sql = "INSERT INTO posts (username,message, color) VALUES ('$username', '$message' ,'$color')";
    if ($conn->query($sql) === TRUE) {
        echo "投稿が成功しました";
    } else {
        echo "エラー: " . $sql . "<br>" . $conn->error;
    }

    // データベース接続を閉じる
    $conn->close();
    ?>
    <a href="./index.php">戻る</a>
</body>

</html>