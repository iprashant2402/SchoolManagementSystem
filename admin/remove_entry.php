<?php
session_start();
require("db.php");
require("functions.php");
$id=$_GET["id"];
$url=$_GET["url"];
$table=$_GET["table"];
$sql="DELETE FROM ".$table." WHERE ID='".$id."'";
$result=$conn->query($sql);
$conn->close();
redirect($url."?message=Record+Successfully+Deleted");
?>