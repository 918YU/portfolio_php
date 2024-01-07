<?php
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
?>
