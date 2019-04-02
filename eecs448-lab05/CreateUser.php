<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c827f144", "eiphah4k", "c827f144");
echo '<head><title>User Creation Landing</title><link href="../../styles/style.css" rel="stylesheet" type="text/css" /></head>';

$user = $_POST["user"];
/* check connection */
if ($mysqli->connect_errno) {
    echo("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('" . $user . "')";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        echo("User added successfully");
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>
