<!-- espongo la media di due valori inseriti dall'utente con chiamata GET -->

<!DOCTYPE html>
<html>

<head>
    <title>Calcolo Media</title>
</head>

<body>

    <form action="index.php" method="get">
        <label for="firstNumber">Type a number:</label>
        <input type="text" id="firstNumber" name="firstNumber" required>

        <br>

        <label for="secondNumber">Type another number:</label>
        <input type="text" id="secondNumber" name="secondNumber" required>

        <br>

        <input type="submit" value="Enter">
    </form>
    <?php
    if (isset($_GET['firstNumber']) && isset($_GET['secondNumber'])) {

        $firstNumber = $_GET['firstNumber'];
        $secondNumber = $_GET['secondNumber'];

        $average = ($firstNumber + $secondNumber) / 2;

        echo "<p>The average is: $average</p>";
    } else {

        echo "<p>Errore: Insert real value.</p>";
    }
    ?>
</body>

</html>