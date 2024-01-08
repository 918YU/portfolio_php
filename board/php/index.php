<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2 class="title">掲示板</h2>

<!-- 投稿フォーム -->
<form action="post.php" method="post">
    <div class="board">
    ユーザー名: <input type="text" name="username" placeholder="お名前を入力してください"><br>
    文字色　　: <input type="color" name="color" id="color" value="#000000"><br>
    メッセージ: <textarea rows=5 cols=50 name="message" placeholder="投稿したいメッセージを入力してください"></textarea><br>
    </div>
    <input type="submit" value="投稿">
</form>

<hr>

<!-- 投稿一覧 -->
<?php
require_once('./db.php');
// データベースから投稿を取得
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

// 投稿を表示
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<strong><font color="' .$row["color"].'">' . $row["username"] . "</font>:</strong> " . $row["message"] . "<br>";
    }
} else {
    echo "まだ投稿がありません";
}

// データベース接続を閉じる
$conn->close();
?>

</body>
</html>
