<?php

global $average;
global $grade;
global $warning;

$number1 = isset($_POST["number1"]) ? $_POST["number1"] : null;
$number2 = isset($_POST["number2"]) ? $_POST["number2"] : null;
$number3 = isset($_POST["number3"]) ? $_POST["number3"] : null;

if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["number3"])) {
    if ($number1 == "" || $number2 == "" || $number3 == "") {
        $warning = "Please enter valid number!";
    } elseif ($number1 < 0 || $number2 < 0 || $number3 < 0) {
        $warning = "Please enter valid number!";
    } elseif (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["number3"])) {
        if ($number1 <= 32 || $number2 <= 32 || $number3 <= 32) {
            $grade = "<span class=\"fail\">Sorry! Result is Fail</span>";
            $totalNumber = $number1 + $number2 + $number3;
            $calculateAverage = $totalNumber / 3;
            $average = ceil($calculateAverage);
        } elseif ($number1 >= 32 || $number2 >= 32 || $number3 >= 32) {
            $totalNumber = $number1 + $number2 + $number3;
            $calculateAverage = $totalNumber / 3;
            $average = ceil($calculateAverage);
            if ($average >= 80 && $average <= 100) {
                $grade = "A+";
            } elseif ($average >= 70 && $average <= 79) {
                $grade = "A";
            } elseif ($average >= 60 && $average <= 69) {
                $grade = "A-";
            } elseif ($average >= 50 && $average <= 59) {
                $grade = "B";
            } elseif ($average >= 40 && $average <= 99) {
                $grade = "C";
            } elseif ($average >= 33 && $average <= 39) {
                $grade = "D";
            } else {
                $grade = "F";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "style.css";?>
    </style>
</head>
<body>
    <div class="contaienr">
        <h2 class="title">Grade Calculator</h2>
        <form class="input-form" action="" method="POST">
            <input type="number" name="number1" placeholder="Input number">
            <input type="number" name="number2" placeholder="Input number">
            <input type="number" name="number3" placeholder="Input number">
            <span>
                <?php echo $warning; ?>
            </span>
            <div class="buttons">
                <input type="submit" name="calculate" value="Get result">
            </div>
        </form>
        <div class="result">
            <span>
                Average number: <?php echo $average; ?>
            </span>
            <span>
                Grade: <?php echo $grade; ?>
            </span>
        </div>
    </div>
</body>
</html>