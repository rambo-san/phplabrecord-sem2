<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal TO Binary</title>
</head>
<body>
    <?php   
    if(isset($_POST['decimal'])) {
        $decimal = $_POST['decimal'];
        $binary = decbin($decimal);
        echo "Binary representation of $decimal is $binary";
    }
    ?>

    <form method="POST" action="">
        <label for="decimal">Enter a decimal number:</label>
        <input type="number" name="decimal" id="decimal" required>
        <button type="submit">Convert</button>
    </form>
</body>
</html>