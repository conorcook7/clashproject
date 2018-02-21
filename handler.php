<?php


$name = $_POST["name"];
$comment = $_POST["comment"];
file_put_contents("comments", $name|$comment\n", FILE_APPEND);
header("Location: comments.php");
exit;
?>