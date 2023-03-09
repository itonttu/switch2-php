<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = $_POST['fish'];
    // $str = 'クジラ';
    $str = htmlspecialchars( $str, ENT_QUOTES, 'UTF-8' );

    echo $str,'です。<br>',PHP_EOL;
    switch ($str) {
        case 'イルカ':
        case 'クジラ':
            echo'哺乳類です。';# code...
            break;
        case 'クロマグロ':
        case 'カツオ':
            echo'魚類です';# code...
            break;
        default:
        echo'何類かな？';# code...
    }
    ?>
    <a href="switch2.html" autofocus>戻る</a>
</body>
</html>