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
        <input type="number" name="firstNumber">
        <input type="number" name="secondNumber">
        <button type="submit">Кнопка</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number1 = $_POST['firstNumber'] ?? '';
        $number2 = $_POST['secondNumber'] ?? '';
        
        if (($number1 < 0) || ($number2 < 0)) {
            $number1 = '';
        } 
        

        if (($number1 != '') && ($number2 != '')) {
            while ($number1 <= $number2) {
                if ($number1 == 0) {
                    $str = '000000';
                } elseif ($number1 < 10) {
                    $str = '00000' . $number1;
                } elseif ($number1 < 100) {
                    $str = '0000' . $number1;
                } elseif ($number1 < 1000) {
                    $str = '000' . $number1;
                } elseif ($number1 < 10000) {
                    $str = '00' . $number1;
                } elseif ($number1 < 100000) {
                    $str = '0' . $number1;
                } else {
                    $str = '' . $number1;
                }
                $summ1 = $str[0] + $str[1] + $str[2] + 0;
                $summ2 = $str[3] + $str[4] + $str[5] + 0;
                if ($summ1 ==  $summ2) {
                    echo $str . PHP_EOL;
                }
                $number1++;
            }
        }
 
    }

    ?>
</body>
</html>