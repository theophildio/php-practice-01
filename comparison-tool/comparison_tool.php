
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