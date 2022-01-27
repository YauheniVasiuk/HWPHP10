<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP homework1</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

    <div class="title"> PHP HomeWork #3 </div>    

    <?php

        // Task 1
        echo "<b>Задание 1</b><br />";

        function returnCube($num) {
            return $num**3;
        }

        echo returnCube(3);

        echo "<hr />";

        // Task 2
        echo "<b>Задание 2</b><br />";

        function returnSum($a, $b) {
            return $a + $b;
        }

        echo returnSum(3, 5);

        echo "<hr />";

        // Task 3
        echo "<b>Задание 3</b><br />";

        function returnDay($numDay) {
            if($numDay >= 1 && $numDay <= 7) {
                switch($numDay) {
                    case 1:
                        return "Понедельник";
                        break;
                    case 2:
                        return "Вторник";
                        break;
                    case 3:
                        return "Среда";
                        break;
                    case 4:
                        return "Четверг";
                        break;
                    case 5:
                        return "Пятница";
                        break;
                    case 6:
                        return "Суббота";
                        break;
                    case 7:
                        return "Воскресенье";
                        break;
                }
            } else {
                return "Некорректный день недели";
            }
        }

        echo returnDay(5);

        echo "<hr />";

        // Task 4
        echo "<b>Задание 4</b><br />";

        function checkNum($num) {
            return ($num >= 0) ? "True" : "False"; 
        }

        echo checkNum(-2);

        echo "<hr />";

        // Task 5
        echo "<b>Задание 5</b><br />";

        function getDigitsSum($digit) {
            if ((is_int($digit)) && (is_numeric($digit))) {
                $digit = (string)$digit;
                $digitSum = 0;

                for ($i = 0; $i < strlen($digit); $i++) {
                    $digitSum += $digit[$i]; 
                }

                return (int)$digitSum; 
            } else {
                return "Число не удовлетворяет условию";
            }
        }

        echo getDigitsSum(2348);

        echo "<hr />";

        // Task 6
        echo "<b>Задание 6</b><br />";

        function getYearSumDigits() {
            for ($i = 1; $i <= 2020; $i++) {
                if (getDigitsSum($i) % 13 == 0) echo $i . " ";
            }
        }

        getYearSumDigits();

        echo "<hr />";

        // Task 7
        echo "<b>Задание 7</b><br />";

        function isEven($num) {
            if (is_int($num)) {
                if ($num % 2 == 0) {
                    return "true";
                } else {
                    return "false";
                }
        } else { 
            return "Число не удовлетворяет условию";
        }
        }

        echo isEven(6);

        echo "<hr />";

        // Task 8
        echo "<b>Задание 8</b><br />";

        function getTranslitStr($string) {
            if (is_string($string)) {
            $converter = array(
                'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
                'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
                'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
                'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
                'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
                'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
                'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
         
                'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
                'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
                'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
                'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
                'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
                'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
                'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
            );

            return $translit = strtr($string, $converter);
        } else {
            return "Значение не удовлетворяет условию";
        }
        }

        echo getTranslitStr("Привет, как дела?");

        echo "<hr />";

        // Task 9
        echo "<b>Задание 9</b><br />";

        function getPluralSingular($num, $firstForm, $secondForm, $thirdForm) {
            if (is_int($num) && is_string($firstForm) && is_string($secondForm) && is_string($thirdForm)) {
                if ($num == 1) {
                    return "$num $firstForm";
                } elseif (($num > 1) && ($num < 5)) {
                    return "$num $secondForm";
                } elseif($num >= 5) {
                    return "$num $thirdForm";
                } else {
                    return "Не соответствует условию";
                }
            } else {
                return "не соответствует условию";
            }
        }

        echo getPluralSingular(2, 'яблоко', 'яблока', 'яблок');

        echo "<hr />";

        //Task 10
        echo "<b>Задание 10</b><br />";

        $arr = [1, 2, 'три', 'false', 5];

        function arrRecursion($arr, $i = 0) {

            if(!empty($arr[$i])) {
                echo $arr[$i] . ' ';
            

                $i++;

                arrRecursion($arr, $i);
            }
            
        }

        arrRecursion($arr);

        echo "<hr />";

        //Task 11
        echo "<b>Задание 11</b><br />";

        $num = 358;

        function getSumDigits($num) {
            if ($num > 10) {
                $num = getDigitsSum($num);

                getSumDigits($num);
            } else {
                echo $num;
            }

        }

        getSumDigits($num);

        echo "<hr />";

        //Task 12
        echo "<b>Задание 12</b><br />";

        function getCarSpeed($dis, $t) {
            $speed = $dis / $t;

            echo $speed . " км/ч" . " или " . ($speed / 1000) / (1 / 3600) . " м/с";
        }

        getCarSpeed(200, 2);

        echo "<hr />";

        //Task 13
        echo "<b>Задание 13</b><br />";

        $word1 = 'гравитация';
        $word2 = 'гитара';

        function getWord($word1, $word2) {
            for ($i = 0; $i < strlen($word2); $i++) { 
                $flag = 0;      
                for ($j = 0; $j < strlen($word1); $j++) {
                    if ($word2[$i] === $word1[$j]) {
                        str_replace($word1[$i], ' ', $word1);
                        $flag = 1;
                    } 
                    if ($flag == 1) {
                        $j = strlen($word1);
                    } 
                    if ($j == strlen($word1) - 1) {
                        echo "Нельзя из первого слова составить второе";
                        die;
                    }   
                }
            }
            if ($flag == 1) {
                echo "Можно из первого слова составить второе";
            };
        }

        getWord($word1, $word2);

        echo "<hr />";

        //Task 14
        echo "<b>Задание 14</b><br />";

        $param = 'abccba';

        function palyndrom($param) {
            for ($i = 0; $i < strlen($param) / 2; $i++) {
                $flag = 0;
                if ($param[$i] == $param[strlen($param) - 1 - $i]) continue;
                    else {
                        echo "Это не палиндром";
                        $flag = 1;
                    }
            }
            if ($flag == 0) {
                echo "Это палиндром";
            }
        }

        palyndrom($param);

        echo "<hr />";

        //Task 15
        echo "<b>Задание 15</b><br />";

        function multiplyTable() {
            echo '<table style="  border: 1px solid black; width: 100%;">' ;
            for ($i = 1; $i < 10; $i++) {
                echo '<tr style="border: 1px solid black; background-color: rgb(63, 212, 120);">';
                for ($j = 1; $j < 10; $j++) {
                    echo '<td style="  border: 1px solid black; color: #7e17b9;">' . $j . '*' . $i . '=' . $sum = $j * $i .'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }

        multiplyTable();

        
        echo "<hr />";

        //Task 16
        echo "<b>Задание 16</b><br />";

        $string = "fабрак адабраба рабрабабабра";

        $lenPos = array();

        function getLongestWord($string, $pos = '0', $lenPos) {
            if ($pos !== false) {
                $lenPos[] = $pos;
                $pos = strpos($string, ' ', $pos + 1);
                getLongestWord($string, $pos, $lenPos);

            } elseif (count($lenPos) > 2) {
                $maxLen = 0;
                for ($i = 0; $i < count($lenPos) - 1; $i++) {
                    if(!empty($lenPos[$i+1])) {        
                        if ($maxLen <= ($lenPos[$i+1] - $lenPos[$i])) {
                            $maxLen = $lenPos[$i+1] - $lenPos[$i];
                            $searchWord = substr($string, $lenPos[$i], $lenPos[$i+1]);
                        }
                        if ($maxLen <= strlen($string) - $lenPos[$i]) {
                            $maxLen = strlen($string) - $lenPos[$i+1];
                            $searchWord = substr($string, $lenPos[$i+1], strlen($string) - 1);
                        }
                    }
                }
                echo $searchWord;
            } else {
                echo $string;
            }
        
        }

        getLongestWord($string, 0, $lenPos);

        echo "<hr />";

        //Task 17
        echo "<b>Задание 17</b><br />";

        function getOne() {
            $sumOne = 0;
            for ($i = 1; $i <= 100; $i++) {
                $i = (string)$i;
                if (strlen($i) == 1) {
                    if ($i == 1) {
                        $sumOne++;
                    }
                }
                if (strlen($i) > 1){
                for ($j = 0 ; $j < strlen($i); $j++) {
                    if ($i[$j] == 1) {
                        $sumOne++;
                    }
                }
            }
            }
            echo $sumOne;
        }

        getOne();

        echo "<hr />";

        //Task 18
        echo "<b>Задание 18</b><br />";

        $string = 'adeawcwecewacewce acaewcwecewcwecwec ewwecwecdscsdcd ewwedwedwedwedwedwed';
        $n = 10;

        function breakString($string, $n) {
            $len = strlen($string);
            $numRep = floor($len / $n);
            if ($numRep == 1) {
                $newString = substr_replace($string, '<br />', $n, 0);
            } elseif ($numRep > 1) {
                for ($i = 0; $i < $numRep; $i++) {
                    $newString = substr_replace($string, '<br />', $n, 0);
                    $string = $newString;
                    $n += $n;
                }
            } else {
                $newString = $string;
            }

            echo $newString;
        }

        breakString($string, $n);

    ?>


</body>
</html>