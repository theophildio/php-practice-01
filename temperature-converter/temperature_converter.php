
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
        <form class="input-form" action="" method="GET">
            <input type="number" name="temp_value">
            <div class="buttons">
                <input type="submit" name="celsius" value="Celsius to Fahrenheit">
                <input type="submit" name="fahrenheit" value="Fahrenheit to Celsius">
            </div>
        </form>
        <div class="result">

        </div>
    </div>
</body>
</html>
