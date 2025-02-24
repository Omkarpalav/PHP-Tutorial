<!-- Sanitization in PHP is crucial for preventing security vulnerabilities like XSS (Cross-Site Scripting) and ensuring clean user input. PHP provides functions like htmlspecialchars() and strip_tags() for this purpose. -->

<!-- 1]. htmlspecialchars() => Convert HTML entities to special characters to prevent XSS attacks -->

<!-- 2]. strip_tags() => Remove the all HTML and PHP tag from entry -->


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        function sanitizeInput($data){
            $data = trim($data); // remove unnecessary space
            $data = strip_tags($data); //Remove all html and php tag
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = sanitizeInput($_POST['name']);
        $email = sanitizeInput($_POST['email']);
        $message = sanitizeInput($_POST['message']);


        echo "Name : " . $name . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Message : " . $message . "<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitization in PHP</title>
</head>
<body>
    <form action="" method="post">
        <label>Name :</label>
        <input type="text" name="name" placeholder="Enter Your Name" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter Your Email" required><br><br>
        <label>Message:</label>
        <input type="text" name="message" placeholder="Enter Your Message" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>