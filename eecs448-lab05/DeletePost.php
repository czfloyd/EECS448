<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c827f144", "eiphah4k", "c827f144");
echo '<html><head><title>Post Deletion Landing</title><link href="../styles/style.css" rel="stylesheet" type="text/css" /></head>';
echo '<body>';

$postsToDelete = $_POST["postsToDelete"];
/* check connection */
if ($mysqli->connect_errno) {
    echo("Connect failed: %s\n" . $mysqli->connect_error);
    exit();
}

echo "The Following posts: <br/>";
$query = "DELETE FROM Posts WHERE post_id IN (";
foreach ($postsToDelete as $postsToDelete=>$post){
    $query = $query . "" . $post . ", ";
    echo $post . "<br/>";
}
$query = substr($query, 0, -2) . ")";

if ($result = $mysqli->query($query)) {
    echo "were deleted successfully.";
}
else {
    echo "failes to delete.";
}

echo '</body>';
/* close connection */
$mysqli->close();
echo '</html>'
?>
