<?php
//1. include menu.php and database.php
include 'menu.php';
include 'database.php';

//catch the gameID from the URL using $_GET['id']
$id = $_GET['id'];

//3. write and run the SELECT query for only that gameID
$sql = "SELECT * FROM games WHERE gameID = '$id'";

//4. execute query and store the result in $result
$result = mysqli_query($conn, $sql);

//5. unwrap the single row into $row (no while loop needed)
$row = mysqli_fetch_assoc($result);
?>

<!-- display the data that can be edited -->
<h2>Edit Games</h2>
<!-- 5. Create a form with action="update.php" and method="post" -->
<form action="update.php" method="post">
    <!-- Hidden input remembers the original ID before the user edits it -->
    <input type="hidden" name="old_gameID" value="<?php echo $row['gameID']; ?>">

    Game ID: <input type="text" name="gameID" value="<?php echo $row['gameID']; ?>" required><br><br>
    Title: <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br><br>
    Genre: <input type="text" name="genre" value="<?php echo $row['genre']; ?>" required><br><br>
    Release Year: <input type="number" name="releaseYear" value="<?php echo $row['releaseYear']; ?>" required><br><br>
    <input type="submit" value="Save Changes">

    <!-- value is where we put the prefilled data from the $row -->
</form>