<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "jul_car_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $error = array();
    $error_username = '';
    $error_password = '';

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $checkUsername = $conn->prepare('SELECT * FROM admins WHERE username = ? ');
        
        if ($checkUsername === false) {
            die("Prepare failed: " . $conn->error);
        }
        
        $checkUsername->bind_param('s', $username);
        $checkUsername->execute();
        $checkUsername->store_result();

        if ($checkUsername->num_rows >= 1) {
            $checkUsername->bind_result($id ,$username, $password);
            $checkUsername->fetch();
            
            
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;

            header('Location: admindashboard.php');
            exit(); // Ensure script stops after the redirect
        } else {
            $error['username'] = 'Username does not exist';
        }
    } else {
        $error['username'] = 'Please enter a username';
        $error['password'] = 'Please enter a password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-image: url("background.avif");
    background-size: cover;
    background-position: center;
}

form {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

h2 {
    text-align: center;
    color: white;
    margin-top: 0;
}

label {
    display: block;
    margin: 10px 0;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

p {
    color: red;
    margin: 5px 0;
}

    </style>
</head>

<body>

    

    <?php
    if (isset($error['username'])) {
        echo "<p style='color: red;'>{$error['username']}</p>";
    }
    if (isset($error['password'])) {
        echo "<p style='color: red;'>{$error['password']}</p>";
    }
    ?>

    <form action="admin.php" method="post">
    <h2 style="color: black;">Admin Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" name="submit" value="Login">
        <a style="color :black;" href="login.php">Back To Client Login</a>
    </form>
        

</body>


</html>

