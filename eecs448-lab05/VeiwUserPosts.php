<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c827f144", "eiphah4k", "c827f144");
echo '<html><head><title>User List</title><link href="../../styles/style.css" rel="stylesheet" type="text/css" /></head>';

$user = $_POST["user"];
/* check connection */
if ($mysqli->connect_errno) {
    echo("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Posts WHERE author_id = " . $user;

if ($result = $mysqli->query($query)) {
    echo "<tr>";
    echo "<th>PostID</th><th>AuthorID</th><th>Content</th>";
    echo "</tr>"
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        echo("<tr><td>" . $row['post_id'] . "</td><td>" . $row['author_id'] . "</td><td>" . $row['content'] . "</td></tr>");
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
echo '</html>'
?>
