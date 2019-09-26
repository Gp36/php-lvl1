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

<h2> Квадратное уравнение </h2>
<?php
//$ax**2 + bx + c
//исходные данные
$a = 16;
$b = -8;
$c = 1;
?>
<?php echo $a ?> x<sup><small>2</small></sup>
<?php if ($b > 0) echo '+'?> <?php echo $b ?>x
<?php if ($c > 0) echo '+'?> <?php echo $c ?> =0

<h2> Дискриминант </h2>

<?php
include __DIR__ . '/function.php';
$d = dis($a,$b,$c);
?>

<p>D = b <sup><small>2</small></sup> - 4ac= <?php echo $b?><sup><small>2</small></sup> - 4 *<?php echo $a .'*'. $b?>=
    <?php echo $d = dis($a,$b,$c)?></p>

<?php
if ($d > 0){
    echo 'Дискриминант = '. $d . ", больше нуля,значит два корня";
}elseif ($d==0){
    echo 'Дискриминант = '. $d . ", равен нулю,значит один корень";
}elseif ($d<0) {
    echo 'Дискриминант = '. $d . ", в квадротном уравнении нет корней";
}
?>

<h2> Нахождение корня/корней : </h2>
<?php if ($d > 0){?>
    <p>Корни квадратного уравнения:</p>
    <p>x <sub><small>1,2</small></sub> = (-b ± √D)/(2a)</p>

x <sub><small>1</small></sub> = (-<?php echo $b; ?> + √<?php echo $d;?>)/(2<?php echo $a;?> ) =
<?php echo ((-$b + sqrt($d))/(2 * $a))?>
<p>x <sub><small>2</small></sub> = (-<?php echo $b; ?> - √<?php echo $d;?>)/(2<?php echo $a;?> )=
    <?php echo ((-$b - sqrt($d))/(2 * $a))?>

    <?php }elseif ($d == 0){?>
    <p>Корень квадратного уравнения:</p>
    <p>x <sub><small>1</small></sub> = (-b )/(2a)</p>
x <sub><small>1</small></sub> =(<?php echo (-$b)?>) / (2<?php echo $a ?>)=
<?php echo ((- $b)/(2* $a)); ?>

<?php } elseif ($d < 0){?>
<h1><i><?php echo 'В уравнении нет корней';}
?></i></h1>

</body>
</html>

