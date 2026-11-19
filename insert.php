<?php
include 'database.php';

// 1. Catch data from the form (matching the input's name="..." attribute)
$id = $_POST['gameID'];
$title = $_POST['title'];
$genre = $_POST['genre'];
$year = $_POST['releaseYear'];

// 2. Write the SQL instruction string
$sql = "INSERT INTO games (gameID, title, genre, releaseYear) 
        VALUES ('$id', '$title', '$genre', '$year')";

// 3. Send the query to MySQL and check the result
if (mysqli_query($conn, $sql)) {
    echo "Game added successfully! <br>";
    echo "<a href='add_data_form.php'>Add another game</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>