<?php
session_start();

// Check if the admin is not logged in, then redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #555;
        }

        nav a:hover {
            background-color: #777;
        }
    </style>
</head>
<body>

    <header>
        <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
        <nav>
            <a href="adminreservation.php">Reservations</a>
            <a href="manage_cars.php">Manage Cars</a>
            <a href="admin.php">Logout</a>
        </nav>
    </header>

    

</body>
</html>
