<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>


<h1>Привет,PHP</h1>

<?php

function gender ($name){
    if (preg_match('/(на|ля|ра|ия)\z/i', $name)){
        echo 'Приветсвую Вас,Мадам';
    }elseif (preg_match('/(ей|ия|ав|ий)\z/i', $name)){
        echo 'Приветсвую Вас,Мисье';
    }else {
        echo 'не могу гадать ваш пол - null';
    }
}
gender('Неля');
?>

</body>
</html>