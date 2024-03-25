<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amstong</title>
</head>
<body>
    <h1>Check Amstrong</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            $sum = 0;
            $temp = $number;
            while($temp != 0){
                $remainder = $temp % 10;
                $sum = $sum + ($remainder * $remainder * $remainder);
                $temp = $temp / 10;
            }
            if($number == $sum){
                echo "Number is Amstrong";
            }else{
                echo "Number is not Amstrong";
            }
        }
    ?>
</body>
</html>