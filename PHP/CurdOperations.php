<?php

    $username = "root";
    $password = "";
    $server = 'localhost';
    $db = 'TODO';
    $con = new mysqli($server, $username, $password, $db);
    // CREATE TABLE `TODO`.`todo` (`id` INT NOT NULL AUTO_INCREMENT , `task` VARCHAR(100) NOT NULL , `data` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `status` BIT(1) NOT NULL DEFAULT b'' , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }
    if(isset($_GET['action'])){
        if($_GET['action'] == 'add'){
            $task = $_POST['task'];
            $insert = "INSERT INTO todo (task) VALUES ('$task')";
            $con->query($insert);
            header('location: CurdOperations.php');
        }
        if($_GET['action'] == 'delete'){
            $id = $_GET['id'];
            $delete = "DELETE FROM todo WHERE id = $id";
            $con->query($delete);
            header('location: CurdOperations.php');
        }
        if($_GET['action'] == 'edit'){
            $id = $_GET['id'];
            $select = "SELECT * FROM todo WHERE id = $id";
            $result = $con->query($select);
            $row = $result->fetch_assoc();
            if(isset($_POST['submit'])){
                $task = $_POST['task'];
                $update = "UPDATE todo SET task = '$task' WHERE id = $id";
                $con->query($update);
                header('location: CurdOperations.php');
            }
            echo "<form action='CurdOperations.php?action=edit&id=$id' method='post'>
                    <input type='text' name='task' value='".$row['task']."'>
                    <input type='submit' name='submit' value='Update'>
                </form>";
                
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD</h1>
    <form action="CurdOperations.php?action=add" method="post">
        <input type="text" name="task" placeholder="Enter Task">
        <input type="submit" name="submit" value="Add">
    </form>
    <table border="1">
        <tr>
            <th>Task</th>
            <th>Action</th>
        </tr>
        <?php
            $select = "SELECT * FROM todo";
            $result = $con->query($select);
            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['task']; ?></td>
            <td>
                <a href="CurdOperations.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
                <a href="CurdOperations.php?action=edit&id=<?php echo $row['id']; ?>">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
                
</body>
</html>