<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
$query = "DELETE FROM trips_data WHERE id = $id";
mysqli_query($conn, $query);
header('location:display.php');
?>