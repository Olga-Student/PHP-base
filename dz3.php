dz 3-3
<?php
$cities = [
    'Московская обл.' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская обл.' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская обл.' => ['Касимов', 'Шатц', 'Сасово', 'Скопин']
];
foreach ($cities as $key => $value) {
    echo "key : $key value : $value.<br/>";
    if(is_array($value)){
        echo print_r($value).'<br/>';
    }
}
foreach ($cities as $key => $value) {
    echo "key : $key value : $value.<br/>";
    foreach ($value as $internal_value) {
        echo " value : $internal_value.<br/>";
    }
}
foreach ($cities as $key => $value) {
    echo '<br/>' . $key .': ' ;
    foreach ($value as $key => $value) {
        echo $value.', ' ;
    }
}
?>

dz 3-4
<?php
function transliterate($word){
    $abc = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "s'h",
        "ъ" => "",
        "ы" => "i",
        "ь" => "'",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya"
    ];
    //$word = strtr($word, $abc);
    //echo "$word ";
    foreach ($abc as $value){
       $word .= (isset($abc[$value])) ? $abc[$value] : "";
   }
   return $word;
}
 echo transliterate('Привет всем');
?>

dz 3-5
<?php
$string = "New user Petrov Ivan";
echo str_replace(' ', '_', $string);
?>

dz 3-1
<?php
$n = 100;
$i = 1;
while ($i++ <= $n)
    if ($i%3 == 0)
        echo "$i  <br/>";
?>

dz 3-2
<?php
$n = 10;
$i = -1;
do{
    $i++;
    if ($i==0)
    echo "$i - это ноль <br/>";
    elseif ($i%2==0)
        echo "$i - четное число <br/>";
    else
        echo "$i - не четное число <br/>";

} while ($i < $n);

?>

dz 3-7
<?php
for ($i = 0; $i < 10; print $i++ . ' ') {
};


?>

/* Памятка
function test($string)
{
strlen($string);
return substr($string, 2, 1);
}

echo test('string');
*/