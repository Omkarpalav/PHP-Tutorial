<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Correct SQL Query
    $sql = "INSERT INTO users(name, email, age) VALUES(:name, :email, :age)";
    $stmt = $pdo->prepare($sql);
    
    // Correct Parameter Binding
    $stmt->execute([
        'name' => $name, 
        'email' => $email, 
        'age' => $age
    ]);

    header("location: index.php");
    exit(); // Always exit after header redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name : <input type="text" name="name" required><br><br>
        Email : <input type="text" name="email" required><br><br>
        Age : <input type="number" name="age" required><br><br>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
