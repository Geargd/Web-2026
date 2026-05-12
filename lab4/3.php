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
        <input type="date" name="date">
        <button type="submit">Кнопка</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $date = $_POST['date'] ?? '';
        if ($date != '') {
            $day = ($date[8] . $date[9]) + 0;
            $month = ($date[5] . $date[6]) + 0;
            if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
                $zodiac = 'Овен';
            } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
                $zodiac = 'Телец';
            } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
                $zodiac = 'Близнецы';
            } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
                $zodiac = 'Рак';
            } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
                $zodiac = 'Лев';
            } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
                $zodiac = 'Дева';
            } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
                $zodiac = 'Весы';
            } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
                $zodiac = 'Скорпион';
            } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
                $zodiac = 'Стрелец';
            } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
                $zodiac = 'Козерог';
            } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
                $zodiac = 'Водолей';
            } else {
                $zodiac = 'Рыбы';
            } 

            echo $zodiac;
        }


        
        
    }

    ?>
</body>
</html>