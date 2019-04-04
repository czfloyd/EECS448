<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c827f144", "eiphah4k", "c827f144");
echo '<html><head><title>User List</title><link href="../styles/style.css" rel="stylesheet" type="text/css" /></head>';
echo '<body>';

$postsToDelete = $_POST["postsToDelete"];
/* check connection */
if ($mysqli->connect_errno) {
    echo("Connect failed: %s\n" . $mysqli->connect_error);
    exit();
}

$query = "DELETE FROM Posts WHERE post_id IN (";
foreach ($postsToDelete as $postsToDelete=>$post){
    $query = $query . "" . $post . ", ";
}
$query = substr($query, 0, -2) . ")";

if ($result = $mysqli->query($query)) {
    echo("Posts deleted successfully");
}

echo '</body>';
/* close connection */
$mysqli->close();
echo '</html>'
?>
