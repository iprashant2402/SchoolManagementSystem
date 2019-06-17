<?php include ("header.php");?>
<?php
require("functions.php");
    if(!isset($_SESSION["loggedin"])){
        redirect("login.php");
    }
    else{
        redirect("dashboard.php");
    }
 ?>
<?php include ("footer.php");?>