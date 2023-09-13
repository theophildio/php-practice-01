<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["number"];
    $checkWeather = $_POST["check_weather"];

    if ($checkWeather) {
        if ($value == "") {
            $result = "Please enter your value!";
        } elseif ($value <= 0) {
            $result = "It's freezing!";
        } elseif ($value <= 24) {
            $result = "It's cool";
        } else {
            $result = "It's warm";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        <?php include "style.css";?>
    </style>
</head>
<body>
    <div class="contaienr">
        <h2 class="title">Weather Report</h2>
        <form class="input-form" action="" method="POST">
            <input type="number" name="number">
            <div class="buttons">
                <input type="submit" name="check_weather" value="Check the weather">
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