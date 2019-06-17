<?php include("db-connect.php");?>
<?php
$sql="SELECT * FROM news ORDER BY ID DESC";
$result=$conn->query($sql);
?>
<?php include("header.php"); ?>
<h1>LATEST NEWS AND INFO</h1>
<div class="list-group">
    <?php
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<a href='single_news.php?id=".$row["ID"]."' class='list-group-item'><i class='fa fa-arrow-circle-right'></i>&nbsp&nbsp&nbsp".$row["title"]."</a>";
            }
        }
        $conn->close();
     ?>
</div>   
<?php include("footer.php"); ?>