<?php

$fname = $lname = $mname = $ssn = $address = $age = $sex = $jtype = $astype = $shift = $phone = $position = $airport = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = test_input($_POST["fname"]);
	$lname = test_input($_POST["lname"]);
	$mname = test_input($_POST["mname"]);
	$ssn = test_input($_POST["passp"]);
	$address = test_input($_POST["add"]);
	$age = test_input($_POST["age"]);
	$sex = test_input($_POST["sex"]);
	$jtype = test_input($_POST["jtype"]);
	$astype = test_input($_POST["astype"]);
	$shift = test_input($_POST["shift"]);
	$phone = test_input($_POST["phone"]);
	$position = test_input($_POST["pos"]);
	$airport =   test_input($_POST["ap"]);
}

include "db-airplane-connect.php";

$sql="INSERT INTO employee1 (SSN,FNAME,M,LNAME,ADDRESS,PHONE,AGE,SEX,JOBTYPE,ASTYPE,SHIFT,POSITION,AP_NAME) VALUES('".$ssn."','".$fname."','".$mname."','".$lname."','".$address."','".$phone."','".$age."','".$sex."','".$jtype."','".$astype."','".$shift."','".$position."','".$airport."')";

if ($conn->query($sql) === TRUE) {
    echo"<div class='container' align='center'>";
    echo "<p class'alert alert-success' role='alert'>EMPLOYEE SUCCESSFULLY ADDED.</p>";
    echo "<a href='index.php'>Go Back to Home</a>";
    echo "</div>";
} 
$conn->close();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>