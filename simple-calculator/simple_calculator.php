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