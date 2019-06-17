<?php include("db-connect.php");?>
<?php 
    $sql="SELECT * FROM staff";
    $result=$conn->query($sql);
?>
<?php include("header.php");?>
<div class="container">
<div class="page-header">
    <h1>Our highly experienced staff</h1>
</div>
<table class="table table-striped">
    <tr>
    <th>S.No.</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Qualification</th>
    </tr>
    <?php 
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr>"."<td>".$row["ID"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["designation"]."</td>"."<td>".$row["qualification"]."</td>"."</tr>";
            }
        }
        else{
            echo "0 results";
        }
    ?>
</table>
</div>
<?php include("footer.php");?>