<?php 
include("db-connect.php");
$id=$_GET["id"];
$SQL="SELECT * FROM news WHERE id=".$id;
$result=$conn->query($SQL);
?>
<?php include("header.php");?>
<?php 
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<h1 class='news-title'>".$row["title"]."</h1>";
            echo "<p class='lead'>".$row["content"]."</p>";
        }
    }
 ?>
<?php include("footer.php");?>