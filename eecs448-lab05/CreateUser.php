<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c827f144", "eiphah4k", "c827f144");
echo '<head><title>User Creation Landing</title><link href="../styles/style.css" rel="stylesheet" type="text/css" /></head>';

echo '<body>';
$user = $_POST["user"];

/* check connection */
if ($mysqli->connect_errno) {
    echo("Connect failed: %s\n" . $mysqli->connect_error);
    echo '</body>';
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('" . $user . "')";

if ($result = $mysqli->query($query) && $user != "") {
    echo 'User ' . $user . ' added successfully!';
}
else {
    echo 'Bad Request';
}

echo '</body>';
/* close connection */
$mysqli->close();
?>
