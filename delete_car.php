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


$matricule = $_POST['matricule'];

$sql = "DELETE FROM cars WHERE matricule = '$matricule'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$conn->close();

error_log("Delete request received");
$matricule = $_POST['matricule'];
error_log("Matricule to delete: " . $matricule);
?>
