DZ2
dz 2-1
<?php
$a = 10;
$b = -20;
if($a>=0&&$b>=0){
    echo $a-$b;
}
else if($a<0&&$b<0){
    echo $a*$b;
}
else if($a>=0||$b<0&&$a<0||$b>=0){
    echo $a+$b;
}
?>
//dz 2-3
<?php
function sum($a, $b){
    return $a+$b;
}
function subtract($a, $b){
    return $a-$b;
}
function multiplier($a, $b){
    return $a*$b;
}

function division($a, $b){
    if ($b!=0)
        return $a/$b;
    else if ($b===0)
        echo "На ноль делить нельзя!";
}

?>
dz 2-4
<?php

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case "sum":
            return $arg1+$arg2;
        case "subtract":
            return $arg1-$arg2;
        case "multiplier":
            return $arg1*$arg2;
        case "division":
            return ($arg2 === 0) ? "invalid arg2 value (=0)" : $arg1 / $arg2;
    }
}
?>

dz 2-5
<?php
$number_Lecture = 2;
$number_DZ = "2-5";
$data_Year = date("Y");

?>

<!DOCTYPE html>
<html lang "en">
<head>
    <meta charset = "UTF-8">
    <title><?php echo $number_Lecture?></title>
</head>
<body>
<p>Домашняя работа <?php echo $number_DZ?></p>
<footer>
    <p>Учебный год: <?php echo $data_Year?></p>
</footer>
</body>
</html>

dz 2-6
<?php
function power($val, $pow){
    if ($pow == 0)
       return 1;
    return $val * power($val, $pow - 1);
}
?>

dz 2-7
<?php

//$time = date('h');
//$min = date('i');

//echo num_word($time, array('час', 'часа', 'часов')); для решения чере з массив
//echo num_word($min, array('минута', 'минуты', 'минут'));

//НАШЛА решение в инте через switch
function myTime($hour, $minute) {
    $resulth = ($hour <= 10) ? $hour % 10 : $hour % 20;
    switch ($resulth) {
        case 1:
            echo "$hour час";
            break;
        case 2:
        case 3:
        case 4:
            echo "$hour часа";
            break;
        default:
            echo "$hour часов";
            break;
    }
    $resultm = ($minute <= 10) ? $minute % 10 : $minute % 20;
    switch ($resultm) {
        case 1:
            return "$minute минута";
        case 2:
        case 3:
        case 4:
            return "$minute минуты";
        default:
            return "$minute минут";
    }
}
$hour = rand(0, 24);
$minute = rand(0, 59);
echo myTime($hour, $minute);

//это мое но, что-то не то
function date($hour, $minute) {
        if ($hour === 1 && $hour === 21)
            echo "$hour час";
        elseif (2 <= $hour = 4 && 22 <= $hour = 23)
            echo "$hour часа";
        elseif (5 <= $hour = 20)
            echo "$hour часов";

    if ($minute == 1 && $minute == 21 && $minute == 31 && $minute == 41 && $minute == 51)
        echo "$minute минута";
    elseif (2 <= $minute = 4 && 22 <= $hour = 24 && 32 <= $hour = 34 && 42 <= $hour = 44 && 52 <= $hour = 54)
        echo "$minute минуты";
    elseif (5 <= $minute = 20 && 25 <= $hour = 30 && 35 <= $hour = 40 && 45 <= $hour = 50 && 55 <= $hour = 59)
        echo "$minute минут";
    }
    date(14, 45);

?>

