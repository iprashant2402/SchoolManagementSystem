<?php include("db-connect.php");?>
<?php 
    $sql="SELECT * FROM faq";
    $result=$conn->query($sql);
?>
<?php include("header.php");?>

<h1 align="center" style="font-size:40px;">F<small>requently</small>.A<small>sked</small>.Q<small>uestions</small></h1>
<div class="container">
    <div class="list-group">
        <?php
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<div class='list-group-item'>"."<h3 class='list-group-item-heading'>".$row["title"]."</h3>"."<p class='list-group-item-text'>".$row["content"]."</p>"."</div>" ;
            }
        }
        ?>
    </div>
</div>
<?php include("footer.php");?>