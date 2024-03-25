<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Properties</title>
</head>
<body>
    <?php
    class MyClass {
        public static $myStaticProperty = "Hello, I am a static";

        public function displayStaticProperty() {
            echo self::$myStaticProperty;
        }
    }

    $myObject = new MyClass();
    $myObject->displayStaticProperty();

    ?>
</body>
</html>