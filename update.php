<?php
// 1. Include database.php to get the $conn connection
include 'database.php';

// 2. Catch all 4 submitted values from $_POST ('gameID', 'title', 'genre', 'releaseYear')
$id = $_POST['gameID'];
$title = $_POST['title'];
$genre = $_POST['genre'];
$year = $_POST['releaseYear'];

// 3. Write the SQL UPDATE command
$sql = "UPDATE games SET title = '$title', genre='$genre', releaseYear='$year' WHERE gameID = '$id'";


// 4. Execute mysqli_query($conn, $sql) inside an if/else block
//    If true:  header("Location: list.php"); exit();
if (mysqli_query($conn, $sql)) {
    header("Location: list.php");
    exit();
}
//    If false: echo "Error updating record: " . mysqli_error($conn);
else {
    echo "Error updating record:" . mysqli_error($conn);
}

?>