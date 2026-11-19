<?php include 'menu.php'; ?>
<h2> Add New Game</h2>

<form action="insert.php" method="post">
    Game ID: <input type="text" name="gameID" required><br><br>
    Title: <input type="text" name="title" required><br><br>
    Genre: <input type="text" name="genre" required><br><br>
    Release Year: <input type="number" name="releaseYear" required><br><br>
    <input type="submit" value="Save Game">
</form>

<!--- action="insert.php": Tells the browser which file to send the data to when the submit button is clicked.