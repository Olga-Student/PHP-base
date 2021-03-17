<?php

if (($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operations = $_POST['operations'];
    $result = 0;

    if ((!$operations) || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
        $result = "Не все поля заполнены";

    } else {
        if (!is_numeric($number1) || !is_numeric($number2)) {
             $result ="Вы ввели не число!";
        }
        if  ($operations == "plus") {
            $result = $number1 + $number2;
        }
        if ($operations == "minus") {
                $result = $number1 - $number2;
            }
        if ($operations == "multiply") {
                $result = $number1 * $number2;
            }
        if ($operations == "divide" && $number2 > 0) {
                $result = $number1 / $number2;
            }

        if ($operations == "divide" && $number2 == 0) {
                $result = "На ноль делить нельзя!";
            }
        }
        return $result ;

}




