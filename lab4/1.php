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
        <input type="number" min="1" max="30000" name="year">
        <button type="submit">кнопка</button>
    </form>
    <?php
    $str = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $year = $_POST['year'] ?? '';
        if ($year != '') {
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                $str = 'YES';
            }
            else {
                $str = 'NO';
            }
        }

    }  
    
    if ($str !== '') {
        echo $str;
    }

    ?>
</body>
</html>