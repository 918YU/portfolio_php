<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form action="./mail.php" method="post">
        <div class="toiawase-item">
            <div>お名前</div>
            <input type="text" name="name" id="name">
        </div>
        <div class="toiawase-item">
            <div>メールアドレス</div>
            <input type="email" name="email" id="email">
        </div>
        <div class="toiawase-item">
        <div>お問い合せ種別</div>
        <select name="item" id="item">
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="c">c</option>
            <option value="d">d</option>
            <option value="e">e</option>
        </select>
        </div>
        <div class="toiawase-item">
        <div>お問い合わせ内容</div>
        <textarea name="contents" id="contents" cols="50" rows="10"></textarea>
        </div>
        <br>
        <input type="submit" value="送信">
    </form>
</body>

</html>