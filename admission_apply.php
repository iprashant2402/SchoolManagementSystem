<?php

    // define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["adname"]);
  $email = test_input($_POST["admail"]);
  $phone = test_input($_POST["adtel"]);
}

include "db-connect.php";

$sql="INSERT INTO admissions (student_name,email,phone) VALUES('".$name."','".$email."','".$phone."')";
if ($conn->query($sql) === TRUE) {
    include ("header.php");
    echo"<div class='container' align='center'>";
    echo "<p class'alert alert-success' role='alert'>We've recieved your request for admission. Our admission department will contact you soon.</p>";
    echo "<a href='index.php'>Go Back to Home</a>";
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