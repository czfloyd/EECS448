<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c827f144", "eiphah4k", "c827f144");
echo '<html><head><title>User List</title><link href="../styles/style.css" rel="stylesheet" type="text/css" /></head>';
echo '<body>';

$user = $_POST["user"];
/* check connection */
if ($mysqli->connect_errno) {
    echo("Connect failed: %s\n" . $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Users";

if ($result = $mysqli->query($query)) {
    echo "<table><tr>";
    echo "<th>UserID</th>";
    echo "</tr>";
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        echo("<tr><td>" . $row['user_id'] . "</td></tr>");
    }
    echo "</table>";

    /* free result set */
    $result->free();
}

echo '</body>';
/* close connection */
$mysqli->close();
echo '</html>'
?>
