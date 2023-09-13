<?php
global $result;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $checkNumber = isset($_POST["check_number"]);

    if ($checkNumber) {
        if ($number < 0) {
            $result = "<span style=\"color: #ff0000;\"> Please enter a valid number</span>";
        } else if ($number % 2 == 0) {
            $result = "Number is even";
        } else {
            $result = "<span style=\"color: #bb9e01;\"> Number is odd </span>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        <?php include "style.css";?>
    </style>
</head>
<body>
    <div class="contaienr">
        <h2 class="title">Even odd checker</h2>
        <form class="input-form" action="" method="POST">
            <input type="number" name="number">
            <div class="buttons">
                <input type="submit" name="check_number" value="Check the number">
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