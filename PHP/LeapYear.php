<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
    <h1>Leap Year</h1>
    <form action="" method="post">
        <input type="text" name="year" placeholder="Enter Year">
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $year = $_POST['year'];
            if($year % 4 == 0){
                if($year % 100 == 0){
                    if($year % 400 == 0){
                        echo "Year is Leap Year";
                    }else{
                        echo "Year is not Leap Year";
                    }
                }else{
                    echo "Year is Leap Year";
                }
            }else{
                echo "Year is not Leap Year";
            }
        }
    ?>
</body>
</html>