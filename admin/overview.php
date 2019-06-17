<?php 
include("db.php");
$sql_one="SELECT * FROM contact_us";
$sql_two="SELECT * FROM admissions";
$sql_three="SELECT * FROM testimonials";
$sql_four="SELECT * FROM news";
$sql_five="SELECT * FROM staff";

$result=$conn->query($sql_one);
$no_of_messages=$result->num_rows;

$result=$conn->query($sql_two);
$no_of_admission_enquiries=$result->num_rows;

$result=$conn->query($sql_three);
$no_of_testimonials=$result->num_rows;

$result=$conn->query($sql_four);
$no_of_news=$result->num_rows;

$result=$conn->query($sql_five);
$no_of_staff=$result->num_rows;

$conn->close();
?>