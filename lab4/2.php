<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for=""></label>
        <input type="number" name="whatNumber">
    </form>
    <?php

    function whatNumber(int $number): void {
        $result = match ($number) {
            1 => 'Один' ,
            2 => 'Два',
            3 => 'Три',
            4 => 'Четыре',
            5 => 'Пять',
            6 => 'Шесть',
            7 => 'Семь',
            8 => 'Восемь',
            9 => 'Девять',
            0 => 'Нуль',
            default  => ''

        };
        if ($result != '') {
            echo $result;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['whatNumber'];
        if (($number >= 0) &&($number <= 9)) {
            whatNumber($number);
        }     
    }

    ?>
</body>
</html>