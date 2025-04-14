<?php
require('type.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Measurement Converter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>Area Converter</h2>
    <form method="POST">
        From:
        <input type="hidden" id="type" name="type" value="area">
        <input type="number" name="value" id="input" required>
        <select name="from_unit" id="opt1" name="opt1">
            <?php
            foreach ($squareMeter as $key => $value) {
                echo "<option value='$key'>$key</option>";
            }
            ?>
        </select>
        <br>
        To:
        <input type="text" class="output" readonly id="output" />
        <select name="to_unit" id="opt2" name="opt2">
            <?php
            foreach ($squareMeter as $key => $value) {
                echo "<option value='$key'>$key</option>";
            }
            ?>
        </select>
    </form>
    <br><br>
    <a href="/">Return to menu</a>

    <script src="js/script.js"></script>
</body>

</html>