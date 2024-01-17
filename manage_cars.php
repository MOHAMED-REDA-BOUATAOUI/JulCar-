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

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Cars</title>




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
        input {
            width: 10%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #555;
            color: white;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .delete-button, .update-button {
            padding: 8px 12px;
            background-color: #d9534f;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .update-button {
            background-color: #5bc0de;
            cursor: pointer;
        }

        .add-button {
            padding: 8px 12px;
            background-color: #5cb85c; 
            border: none;
            color: white;
            border-radius: 5px; 
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h2>Admin Control </h2>
        <nav>
            <a href="adminreservation.php">Reservations</a>
            <a href="manage_cars.php">Manage Cars</a>
            <a href="add_cars.php">Add Cars</a>
            <a href="admin.php">Logout</a>
        </nav>
    </header>

    <h2>Manage Cars</h2>

    <table id="table1">
        <tr>
           
            <th >Matricule</th>
            <th >Marque</th>
            <th >Model</th>
            <th>Type de Carburant</th>
            <th>Actions</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
    
            echo "<td class='matricule'>" . $row["matricule"] . "</td>";
            echo "<td class='marque'>" . $row["marque"] . "</td>";
            echo "<td class='model'>" . $row["model"] . "</td>";
            echo "<td class='type_carburant'>" . $row["type_carburant"] . "</td>";
            echo "<td class='action-buttons'>
                    <button class='update-button' onclick='updateCar(" . $row["matricule"] . ")'>Update</button>
                    <button class='delete-button' onclick='deleteCar(" . $row["matricule"] . ")'>Delete</button>
                    <button class='add-button' onclick='addCar(" . $row["matricule"] . ")'>Add Car</button>
                    
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
            
    


    
    </div>
            
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
    
            echo "<td class='matricule'>" . $row["matricule"] . "</td>";
            echo "<td class='marque'>" . $row["marque"] . "</td>";
            echo "<td class='model'>" . $row["model"] . "</td>";
            echo "<td class='type_carburant'>" . $row["type_carburant"] . "</td>";
            echo "<td class='action-buttons'>
                    <button class='update-button' onclick='updateCar(" . $row["matricule"] . ")'>Update</button>
                    <button class='delete-button' onclick='deleteCar(" . $row["matricule"] . ")'>Delete</button>
                    <button class='add-button' onclick='addCar(" . $row["matricule"] . ")'>Add Car</button>
                    
                  </td>";
            echo "</tr>";
        }
        ?>



<script src ="update.js"></script>


<script>
    function deleteCar(matricule) {
        if (confirm("Are you sure you want to delete this car with Matricule: " + matricule)) {
           
            fetch('delete_car.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ matricule: matricule }),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Car deleted:', data);
                window.location.reload();
            })
            .catch(error => {
                console.error('Error deleting car:', error);
            });
        }
    }
</script>

 



</body>

</html>

