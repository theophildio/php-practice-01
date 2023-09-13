<?php

global $result;
global $warning;

$value = isset($_POST["temp_value"]) ? $_POST["temp_value"] : null;

if (isset($_POST["temp_value"])) {
    if ($value == "") {
        $warning = "Please enter your value!";
    } elseif (isset($_POST["celsius"])) {
        $cal = $value * 1.8 + 32;
        $result = "Temperature is $cal &degF";
    } elseif (isset($_POST["fahrenheit"])) {
        $formate = number_format(($value - 32) / 1.8, 2);
        $result = "Temperature is $formate &degC";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include "style.css";?>
    </style>
</head>
<body>
    <div class="contaienr">
        <h2 class="title">Temperature converter</h2>
        <form class="input-form" action="" method="POST">
            <input type="number" name="temp_value">
            <div class="buttons">
                <input type="submit" name="celsius" value="Celsius to Fahrenheit">
                <input type="submit" name="fahrenheit" value="Fahrenheit to Celsius">
            </div>
        </form>
        <div class="result">
            <span>
                <?php
echo $result;
?>
                <?php
echo $warning;
?>
            </span>
        </div>
    </div>
</body>
</html>
