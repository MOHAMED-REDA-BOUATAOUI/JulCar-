<?php
session_start();




$dbhost = "Localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "jul_car_db";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reservation";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2>Reservations</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Permis</th>
            <th>Marque</th>
            <th>Model</th>
            <th>Date Sortie</th>
            <th>Date Entrée</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["permis"] . "</td>";
            echo "<td>" . $row["marque"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["date_sortie"] . "</td>";
            echo "<td>" . $row["date_entrée"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <p><a href="admindashboard.php">Back to Dashboard</a></p>

</body>
</html>
