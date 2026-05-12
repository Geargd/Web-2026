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
        <input type="number" name="factorial">
        <button type="submit">Кнопка</button>
    </form>
    <?php

    function factorialCount(int $factorial): int {
        if (($factorial == 0) || ($factorial == 1)) {
            return 1;
        } else {
            return $factorial * factorialCount($factorial - 1);
        }

    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['factorial'] ?? '';
        if ($number < 0) {
            $number = '';
        } 

        if ($number != '') {
            $result =  factorialCount($number);
            echo $result;
        }
        

 
 
    }

    ?>
</body>
</html>