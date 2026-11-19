<?php
include 'menu.php';
include 'database.php';

//1. write sql query to fetch all rows from the games table
$sql = "SELECT * FROM games";

//2. execute the query and store the result in $result
$result = mysqli_query($conn, $sql);
?>

<h2>List of Games</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Game ID</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Release Year</th>
        <th>Action</th>
    </tr>

    <?php

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['gameID'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['genre'] . "</td>";
            echo "<td>" . $row['releaseYear'] . "</td>";

            //delete and edit button
            echo "<td>";
            echo "<a href='edit.php?id=" . $row['gameID'] . "'>Edit</a> | ";
            echo "<a href='delete.php?id=" . $row['gameID'] . "' onclick='return confirm(\"Are you sure you want to delete this game?\")'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }
    } else {
        //print no games no data inside table
        echo "<tr><td colspan='5'>No games found in the database.</td></tr>";
    }
    ?>
</table>