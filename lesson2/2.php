<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

    //Задание 1
        $a = 11;
        $b = -3;

    function compareNumbers($a, $b) {
        if ($a >= 0 && $b >= 0) {
            return $a-$b;
        }
        elseif ($a < 0 && $b < 0) {
            return $a*$b;
        }
        elseif ($a > 0 && $b < 0 || $a < 0 && $b > 0) {
            return $a+$b;
        }
    }
   echo "<u>Задание 1</u>. Числа 11 и -3 дадут сумму: " . compareNumbers($a,$b);

    //Задание 2
    function sequence ($a) 
    {
        $result;
        switch ($a) {
            case 0:
                $result = '0';
            // break;
            case 1:
                $result = $result . ' 1';
            case 2:
                $$result = $result . ' 2';
            case 3:
                $result = $result . ' 3';
            case 4:
                $result = $result . ' 4';
            case 5:
                $result = $result . ' 5';
            case 6:
                $result = $result . ' 6';
            case 7:
                $result = $result . ' 7';
            case 8:
                $result = $result . ' 8';
            case 9:
                $result = $result . ' 9';
            case 10:
                $result = $result . ' 10';
            case 11:
                $result = $result . ' 11';
            case 12:
                $result = $result . ' 12';
            case 13:
                $result = $result . ' 13';
            case 14:
                $result = $result . ' 14';
            case 15: {
                $result = $result . ' 15';
                echo "<br><br><u>Задание 2</u>. Ряд чисел от 'а' до 15: " . $result;
            }
        }
    }
   sequence($a);

    //Задание 3
    function addition ($a, $b)
    {
        return $a+$b;
    }
    
    function subtraction ($a, $b)
    {
        return $a-$b;
    }

    function division ($a, $b) 
    {
        return $a/$b;
    }

    function multiplication ($a, $b) 
    {
        return $a*$b;

    }
    echo "<br><br><u>Задание 3</u>: <br>";
    echo "Сложение 3 и 4: " . addition(3,4) . "<br>";
    echo "Вычитание 5 и 6: " . subtraction(5,6) . "<br>" ;
    echo "Деление 10 и 2: " . division(10,2) . "<br>";
    echo "Умножение 5 и 5: " . multiplication(5,5) . "<br>";

    //Задание 4
    function mathOperation($arg1, $arg2, $operation) 
    {
        switch ($operation) {
            case 'addition':
                echo "<br><br><u>Задание 4</u>. Результат сложения: " . addition($arg1, $arg2);
                break;
            case 'subtraction':
                echo "<br><br><u>Задание 4</u>. Результат вычитания: " . subtraction($arg1, $arg2);
            break;
            case "division":
                echo "<br><br><u>Задание 4</u>. Результат деления: " . division($arg1, $arg2);
            break;
            case 'multiplication':
                echo "<br><br><u>Задание 4</u>. Результат умножения: " . multiplication($arg1, $arg2);
            break;
        }
    }
    mathOperation(12, 15, 'division');
    ?>
    <!-- Задание 5 -->
    <p><u>Задание № 5.</u></p>
    <footer style="display: flex; justify-content:center; color:white; background:green; align-items:left;">
        <?php
    echo  date('Y');
    ?>
    </footer>

    <!-- Задание 6 -->
    <?php
    echo "<br><u>Задание 6</u>. Результаты вызова рекурсивной функции (2 в степени 5, 5 в степени 3 и 10 в степени 4): ";
    function power($val, $pow) 
    {
        $result = 0;
        if($pow == 0) 
        {
            $result = 1;
        }
        elseif ($pow == 1)
        {
            $result = $val;
        }
        elseif($pow % 2 == 0) 
        {
            $result = power($val*$val, $pow/2);
        }
        else 
        {
            $result = $val * power($val*$val, $pow/2);

        }
        return $result;
    }

    echo "<br>";
    echo power(2,5);
    echo "<br>";
    echo power(5,3);
    echo "<br>";
    echo power(10,4);

    //Задание 7
    function getTime()
    {
        $hoursText = "";
        $minutesText = "";
        $currentHours = date("h");
        $currentHours = intval($currentHours);
        $currentMinutes = date("i");
        $currentMinutes = intval($currentMinutes);

        //Получаем последнюю цифру часа (например 15 часов - получим 5)
        //0 часов и часы от 05 - 20 будут оканчиваться на "ов"
        if($currentHours % 10 == 0 || $currentHours == 11 || $currentHours % 10 >= 5) {
            $hoursText = "часов ";
        }
        // 02 часа, 04 часа,22 часа, НО 12 часов, 14 часов
        elseif ($currentHours % 10 >= 2 && $currentHours % 10 <= 4 || $currentHours % 10 == 3 && $currentHours != 12 && $currentHours != 14) {
            $hoursText = "часа ";
        }
        //11 часов - исключение, относящееся к первому условию. 
        //01 час, 21 час, НО 11 часов
        elseif ($currentHours % 10 == 1 && $currentHours != 11) {
            $hoursText = "час ";
        }
        //Подобно часам
        //0 минут, 10 минут, 20 минут и т.д.
        //От 10 - 20 окончание  "минут"
        if(($currentMinutes % 10 == 0 && ($currentMinutes >= 10 && $currentMinutes <= 20)) || ($currentMinutes % 10 >= 5 && $currentMinutes % 10 <= 9) ) {
            $minutesText = "минут ";
        }
        //1 минута, 21 минута, 31 минута и т.д. НО 11 минут исключение
        elseif ($currentMinutes % 10 == 1) {
            $minutesText = "минута ";
        }
        //2 минуты, 22 минуты, 4 минуты,  14, 12 минут исключение
        elseif ($currentMinutes % 10 >= 2 && $currentMinutes % 10 <= 4) {
            $minutesText = "минуты ";
        }
        echo "<br><br><u>Задание 7</u><br>" . date("h ") . $hoursText . date("i ") . $minutesText;

    }
    getTime();

    ?>

</body>

</html>