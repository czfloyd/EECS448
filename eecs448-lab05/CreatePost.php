<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c827f144", "eiphah4k", "c827f144");
echo '<head><title>Post Creation Landing</title><link href="../styles/style.css" rel="stylesheet" type="text/css" /></head>';
echo '<body>';

$user = $_POST["user"];
$content = $_POST["content"];
/* check connection */
if ($mysqli->connect_errno) {
    echo("Connect failed: %s\n" . $mysqli->connect_error);
    echo '</body';
    exit();
}

$query = "INSERT INTO Posts (content, author_id) VALUES ('" . $content . "', '" . $user . "')";

if ($content != "" && $result = $mysqli->query($query)) {
    echo 'Message posted successfully!';
}
else {
    echo 'Bad request';
}

echo '</body>';
/* close connection */
$mysqli->close();
?>
