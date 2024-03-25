<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Oper</title>
</head>
<body>
    <?php
    $names = array("Joyce", "Shelvin", "Abhijith", "Roshan", "Ivin", "Dillu", "Binoy", "Aashu", "Vaishu", "Pupa");

    // 8.1. Display the contents using each statement.
    echo "Contents of the array using each statement: ";
    reset($names);
    foreach ($names as $value) {
        echo $value . " ,";
    }
    echo "<br><br>";

    // 8.2. Display the array in sorted order.
    sort($names);
    echo "Array in sorted order: ";
    foreach ($names as $name) {
        echo $name . " ,";
    }
    echo "<br><br>";

    // 8.3. Display the array without duplicate elements.
    $uniqueNames = array_unique($names);
    echo "Array without duplicate elements: ";
    foreach ($uniqueNames as $name) {
        echo $name . " ,";
    }
    echo "<br><br>";

    // 8.4. Remove the last element and display.
    $lastElement = array_pop($names);
    echo "Removed last element: " . $lastElement . "<br><br>";

    // 8.5. Display the array in reverse order.
    $reverseNames = array_reverse($names);
    echo "Array in reverse order: ";
    foreach ($reverseNames as $name) {
        echo $name . " ,";
    }
    echo "<br><br>";

    // 8.6. Search for an element in the given array.
    $searchElement = "Joyce";
    if (in_array($searchElement, $names)) {
        echo $searchElement . " is found in the array.";
    } else {
        echo $searchElement . " is not found in the array.";
    }
    ?>
</body>
</html>