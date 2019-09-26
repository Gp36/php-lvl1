<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Local server</title>
</head>
<body>

<h1>Таблица истинности для && || xor</h1>
<?php
//исходные данные
$a1 = true;
$a2 = false;
$b1 = true;
$b2 = false;
?>

<h3> <table border="1"width="350" height="300" >
        <tr>
            <td>A</td> <td>B</td> <td> A && B </td> <td>A || B</td> <td>A xor B</td>
        </tr>
        <tr>
            <td><?php echo (int)$a1?> </td> <td><?php echo(int)$b1?></td> <td><?php echo (int)($a1 && $b1)?></td>
            <td><?php echo (int)($a1 || $b1)?></td> <td><?php echo (int)($a1 xor $b1)?></td>
        </tr>
        <tr>
            <td><?php echo (int)$a1?> </td> <td><?php echo(int)$b2?></td> <td><?php echo (int)($a1 && $b2)?></td>
            <td><?php echo (int)($a1 || $b2)?></td> <td><?php echo (int)($a1 xor $b2)?></td>
        </tr>
        <tr>
            <td><?php echo (int)$a2?> </td> <td><?php echo(int)$b1?></td> <td><?php echo (int)($a2 && $b1)?></td>
            <td><?php echo (int)($a2 || $b1)?></td> <td><?php echo (int)($a2 xor $b1)?></td>
        </tr>
        <tr>
            <td><?php echo (int)$a2?> </td> <td><?php echo(int)$b2?></td> <td><?php echo (int)($a2 && $b2)?></td>
            <td><?php echo (int)($a2 || $b2)?></td> <td><?php echo (int)($a2 xor $b2)?></td>
        </tr>

    </table></></h3>
</body>
</html>