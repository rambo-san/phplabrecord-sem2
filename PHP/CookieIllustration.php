<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        setcookie("username", $username, time() + 3600, "/");

        header("Location: CookieIllustration.php");
        exit;
    }

    if(isset($_COOKIE["username"])) {
        echo "Welcome back, " . $_COOKIE["username"] . "!";
        unset($_COOKIE['username']);
    } else {
        echo '<form method="post" action="">
                <label for="username">Enter your username:</label>
                <input type="text" name="username" id="username" required>
                <input type="submit" name="submit" value="Submit">
              </form>';
    }
    ?>
</body>
</html>