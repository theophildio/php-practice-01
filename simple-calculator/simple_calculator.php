<?php
global $result;
global $warning;

$number1 = isset($_POST["number1"]) ? $_POST["number1"] : null;
$number2 = isset($_POST["number2"]) ? $_POST["number2"] : null;

if (isset($_POST["addition"]) || isset($_POST["subtraction"]) || isset($_POST["multiplication"]) || isset($_POST["division"])) {
    if ($number1 < 0 || $number2 < 0) {
        $warning = "Please enter valid numbers!";
    } elseif (isset($_POST["addition"])) {
        $result = $number1 + $number2;
    } elseif (isset($_POST["subtraction"])) {
        $result = $number1 - $number2;
    } elseif (isset($_POST["multiplication"])) {
        $result = $number1 * $number2;
    } elseif (isset($_POST["division"])) {
        $cal = $number1 / $number2;
        $result = number_format($cal, 1);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include "style.css";?>
    </style>
</head>
<body>
    <div class="contaienr">
        <h2 class="title">Simple Calculator</h2>
        <div class="result">
            <span>
                <?php echo $result; ?>
            </span>
        </div>
        <form class="input-form" action="" method="POST">
            <input type="number" name="number1" placeholder="First number">
            <input type="number" name="number2" placeholder="Second number">
            <div class="buttons">
                <input type="submit" name="addition" value="+">
                <input type="submit" name="subtraction" value="-">
                <input type="submit" name="multiplication" value="*">
                <input type="submit" name="division" value="/">
            </div>
        </form>
        <div class="warning">
            <span class="fail">
                <?php echo $warning; ?>
            </span>
        </div>
    </div>
</body>
</html>