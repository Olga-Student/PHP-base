
<?php
echo "Hello, World!";
?>

<?php
$name = "GeekBrains user";/*переменная*/
echo "Hello, $name!";
?>

<?php
define('MY_CONST', 100);
echo MY_CONST;
?>

<?php
$a = 1;
echo "$a";
echo '$a';
?>



<?php
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
?>

<?php
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень
?>

<?php
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
$a = 0;
echo $a++;     // Постинкремент
echo ++$a;    // Преинкремент
echo $a--;     // Постдекремент
echo --$a;    // Предекремент
?>

<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно?>

DZ1

1-3.
<?php
$a = 5;
$b = '05';
var_dump($a == $b);   // Почему true?  не сранивается тип данных , только значение; строковое значение переменной b превратится в число, поэтому true
var_dump((int)'012345');      // Почему 12345? объявлены переменные типа integer целые числа
var_dump((float)123.0 === (int)123.0); // Почему false? int - целое число, float - дробное с плавающей запятой. Равенство строгое - итог false
var_dump((int)0 === (int)'hello, world'); // Почему true? значение int 0 - true, значение строки true. true=true
?>
1-4.
<?php
$number_Lecture = 1;
$number_DZ = 1;
$data_Year = 2021;
//echo "Лекция $number_Lecture";
//echo "Домашняя работа $number_DZ";
//echo "Учебный год $data_Year";
?>

<h1>Лекция <?php echo $number_Lecture?></h1>
<p>Домашняя работа <?php echo $number_DZ?></p>
<p>Учебный год: <?php echo $data_Year?></p>

1-5
<?php
$a = 1;
$b = 2;
// рассуждала в начале: если разница между числами 1 тогда
$b = $b-$a;
$a += $a;
echo $a;
echo $b;

// но если разница между числами не известна, тогда:
$a = $b + $a; // $a = 3  находим сумарное значение и присваиваем переменной а
$b = $a - $b; //$b = 1 тогда b получается  разница между суммой и значением переменной b
$a = $a - $b; //$a = 2 вычитаем из суммы новое значение b
  echo $a;
  echo $b;
  ?>

gjlllllllllllllllllll
плрррррррррррр

