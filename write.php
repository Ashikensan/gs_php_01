<?php
//なぜ?
// var_dump($_POST);
//postを受け取る
$name = $_POST["name"];
$mail = $_POST["mail"];
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];


//データを整形する
$data = $name . $mail . $question1. $question2. $question3 ."\n";
echo $data;

// //データを保存する
// file_put_contents("data/data.txt", $data , FILE_APPEND);
file_put_contents("data/data.txt", $data , FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST（受信）</title>
</head>
<body>
    <h1>ご登録ありがとうございました！</h1>
    <h2>お問合せはこちら</h2>

    <ul>
        <li><a href="./read.php">確認する</a></li>
        <li><a href="./post.php">戻る</a></li>
    </ul>    


</body>
</html>