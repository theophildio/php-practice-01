<?php
if ($_SERVER["REQUEST_METHOD" == "POST"]) {

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
            <div class="buttons">
                <input type="submit" name="average" value="Get result">
            </div>
        </form>
        <div class="result">
            <span>
                Average number:
            </span>
            <span>
                Grade:
            </span>
        </div>
    </div>
</body>
</html>