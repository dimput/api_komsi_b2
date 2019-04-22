<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'proya';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Get id from URL to delete that user
$id = $_GET['id'];
echo $id;
// Delete user row from table based on given id
$sql = "DELETE FROM pengguna WHERE id=$id";
$result = $conn->query($sql);
echo $result;

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>