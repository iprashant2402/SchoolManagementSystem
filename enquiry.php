<?php

    // define variables and set to empty values
$name = $email = $message = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["fname"]);
  $message = test_input($_POST["message"]);
  $email = test_input($_POST["mail"]);
  $subject = test_input($_POST["subject"]);
}

include "db-connect.php";

$sql="INSERT INTO contact_us (name,email,subject,message) VALUES('".$name."','".$email."','".$subject."','".$message."')";
if ($conn->query($sql) === TRUE) {
    include ("header.php");
    echo"<div class='container'>";
    echo "<p class'alert alert-success'>We have recieved your message. We will contact you soon.</p>";
    echo "<a href='index.php' class='btn btn-primary'>Go Back to Home</a>";
    echo "</div>";
    include("footer.php");
} 
$conn->close();

//header("Location: http://localhost/admissions.php");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>