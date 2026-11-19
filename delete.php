<?php
//1. include database.php to get the $conn connection
include 'database.php';

//2. catch the gameID from the URL using $_GET['id']
$id = $_GET['id'];

// 3. Write the SQL DELETE query (Remember the WHERE clause so you don't delete ALL games!)
// Hint: "DELETE FROM games WHERE gameID = '$id'"
$sql = "DELETE FROM games WHERE gameID = '$id'";

// 4. Execute the query with mysqli_query($conn, $sql)
if (mysqli_query($conn, $sql)) {
    // If true: redirect back to list.php using header("Location: list.php"); exit();
    header("Location: list.php");
    exit();
} else { // If false: print mysqli_error($conn)
    echo "Error deleting record: " . mysqli_error($conn);
}
?>