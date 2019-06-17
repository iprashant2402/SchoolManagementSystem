<?php include("header.php");?>
<div class="row">
    <?php include("sidebar.php");?>
    <div class="col col-sm-9 col-md-10">
        <div class="page-header">
            <h1>MESSAGES</h1>
        </div>
        <div class="list-group">
            <?php 
                include("db.php");
                $sql="SELECT * FROM admissions ORDER BY ID DESC";
                $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "<div class='list-group-item card sf-card'><div class='card-container'>"."<p><b>NAME:</b>&nbsp;".$row["student_name"]."</p>".
                        "<p><b>E-MAIL:</b>&nbsp;".$row["email"]."</p>"."<p><b>CONTACT NO:</b>&nbsp;".$row["phone"]."</p>"
                        ."</div></div>";
                    }
                }
                $conn->close();
            ?>
        </div>
    </div>
</div>
<?php include("footer.php");?>