<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method PHP</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Your Name"><br><br>
        <input type="number" name="age" placeholder="Enter your Age"><br><br>
        <input type="submit" value="Submit Data">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['age'])){
        $name = $_POST['name'];
        $age = $_POST['age'];

        echo "User Name : $name" . "<br>";
        echo "User Age : $age";

    }else{
        echo "No Data Received";
    }
?>