<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メール送信結果</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = $_POST["email"];
    $title = "お問い合わせを受け付けました";
    $message = 'お問い合わせを受け付けました' . "¥r¥n" . $_POST['contents'];
    $headers = "From: from@example.com";

    if (mb_send_mail($to, $title, $message, $headers)) {
        echo "メール送信成功です";
    } else {
        echo "メール送信失敗です";
    }
    ?>
    <a href="./index.php" class="mail-return">戻る</a>
</body>

</html>