<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visited Cookie</title>
</head>
<body>
    <h1>Cookie Time</h1>
    <?php
    if(isset($_COOKIE['last_visited'])) {
        $lastVisited = $_COOKIE['last_visited'];
        echo "Last visited on: " . $lastVisited;
    } else {
        // Set the cookie with the current date/time
        $currentDateTime = date('Y-m-d H:i:s');
        setcookie('last_visited', $currentDateTime, time() + (86400 * 30), '/');
        echo "Welcome! This is your first visit.";
    }
    ?>
</body>
</html>