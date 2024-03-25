<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Key</title>
</head>
<body>
    <?php
        $globalVariable = "Hello, world!";

        function printGlobalVariable() {
            global $globalVariable;
            echo $globalVariable;
        }

        if(isset($_POST['keypress'])) {
            printGlobalVariable();
        }
    ?>

    <form method="post">
        <input type="submit" name="keypress" value="Press Me">
    </form>
</body>
</html>