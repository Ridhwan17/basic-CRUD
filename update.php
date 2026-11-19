<?php
include 'database.php';

// 1. Catch the old ID and the new values from $_POST
$old_id = $_POST['old_gameID'];
$new_id = $_POST['gameID'];
$title = $_POST['title'];
$genre = $_POST['genre'];
$year = $_POST['releaseYear'];

// 2. Try to update directly
$sql = "UPDATE games 
        SET gameID = '$new_id', title = '$title', genre = '$genre', releaseYear = '$year' 
        WHERE gameID = '$old_id'";

// 3. Check the result
if (mysqli_query($conn, $sql)) {
    // Worked! Go back to list.php
    header("Location: list.php");
    exit();
} elseif (mysqli_errno($conn) == 1062) {
    // Error 1062 = Duplicate Primary Key!
    echo "Warning: Game ID '$new_id' is already in the database! Changes cancelled.<br><br>";
    echo "<a href='edit.php?id=$old_id'>Go back to Edit</a>";
} else {
    // Any other database error
    echo "Error updating record: " . mysqli_error($conn);
}
?>