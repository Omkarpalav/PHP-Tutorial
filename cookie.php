<?php
    if(isset($_POST['set_cookie'])){
        setcookie("user","Omkar", time()+3600, "/");
        $message = "cookie has been Set !";
    }

    if(isset($_POST['delete_cookie'])){
        setcookie("user", "", time() - 3600, "/");
        $message = "Cookie has been deleted!";
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['user'])){
            echo "<p>Welcome back , " . $_COOKIE['user'] . "!</p>";
        }else{
            echo "No cookie found";
        }

        if(isset($message)){
            echo "<p style='color: green;'>$message</p>";
        }
    ?>
    <form action="" method="post">
        <button type="submit" name="set_cookie">Set Cookie</button>
        <button type="submit" name="delete_cookie">Delete Cookie</button>
    </form>
</body>
</html>