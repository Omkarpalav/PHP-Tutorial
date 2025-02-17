<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Name : </label>
        <input type="text" name="name" placeholder="enter your Name"><br> <br>
        <label for="">Age : </label>
        <input type="number" name="age" placeholder="Enter your Age"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php
    if(isset($_GET['name']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $age = $_GET['age'];

        echo "<h2>Data Received</h2>";
        echo $name . "<br>";
        echo $age;
    }else{
        echo "Data not recieved";
    }

?>