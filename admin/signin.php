<?php
session_start();
require("functions.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=test_input($_POST["email"]);
    $pass=md5(test_input($_POST["pass"]));
    if(empty($email) || empty($pass)){
        require("login.php");
        echo "<div class='alert alert-danger'>You cannot leave any field empty.</div>";
    }
}
include "db.php";
$sql="SELECT * FROM users WHERE email="."'".$email."'";
$result=$conn->query($sql);
if($result->num_rows==1){
    while($row=$result->fetch_assoc()){
        if($pass==$row["password"]){
            $_SESSION["loggedin"]=true;
            $_SESSION["email"]=$row["email"];
            redirect("dashboard.php");
        }
    }
}
$conn->close();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>