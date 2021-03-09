
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<form action="result.php" method="POST">
    <input type="text" name="number1" placeholder="введите первое число">
    <select name="operations">
        <option value="plus"> + </option>
        <option value="minus"> - </option>
        <option value="multiply"> * </option>
        <option value="divide"> / </option>
    </select>
    <input type="text" name="number2" placeholder="введите второе число">
    <input type="submit" name="submit" value="получить ответ">
</form>
</body>