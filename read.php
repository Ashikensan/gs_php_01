<?php
// ファイルを読み込む
$data = file_get_contents("data/data.txt");

// 読み込んだものをブラウザに表示する
// nl to br → \nの改行をbrとして改行してくれるモノ
echo nl2br($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script src="./js/test.js"></script>
</body>
</html>