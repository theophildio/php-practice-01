<?php

global $result;

$number1 = isset($_POST["number1"]) ? $_POST["number1"] : null;
$number2 = isset($_POST["number2"]) ? $_POST["number2"] : null;

if (isset($_POST["number1"]) && isset($_POST["number2"])) {
    $result = (($number1 < 0 || $number2 < 0) || ($number1 == 0 && $number2 == 0)) ? "<span style=\"color: #ff0000\">Please enter valid numbers!</span>" : ($result = $number1 > $number2 ? "$number1 is greater than $number2" : "$number2 is greater than $number1");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "style.css";?>
    </style>
</head>
<body>
    <div class="contaienr">
        <h2 class="title">Comparison Tool</h2>
        <form class="input-form" action="" method="POST">
            <input type="number" name="number1" placeholder="First number">
            <input type="number" name="number2" placeholder="Second number">
            <div class="buttons">
                <input type="submit" name="compare" value="Compare numbers">
            </div>
        </form>
        <div class="result">
            <span>
                <?php echo $result; ?>
            </span>
        </div>
    </div>
</body>
</html>