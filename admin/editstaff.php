<?php include("header.php");?>
<?php
include("db.php");
// define variables and set to empty values
$name = $designation = $qualification = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["staff_name"]);
  $designation = test_input($_POST["staff_desig"]);
  $qualification = test_input($_POST["staff_qual"]);
  $sql="INSERT INTO staff (name,designation,qualification) VALUES ('".$name."','".$designation."','".$qualification."')";
if($conn->query($sql)==true){
    $_GET["message"]="Staff Member successfully added.";
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
<div class="row">
    <?php include("sidebar.php");?>
    <div class="col col-sm-9 col-md-10">
        <div class="page-header">
            <h1>STAFF</h1>
        </div>
        <?php
            if(isset($_GET["message"])){
                echo"<p class='alert alert-success'>".$_GET["message"]."</p>";
            }
        ?>
        <table class="table table-striped">
            <tr>
               
                <th>Name</th>
                <th>Designation</th>
                <th>Qualification</th>
                <th>Action</th>
            </tr>
        <?php 
        include "db.php";
        $sql="SELECT * FROM staff";
        $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>"."<td>".$row["name"]."</td>"."<td>".$row["designation"]."</td>"."<td>".$row["qualification"]
                    ."</td>"."<td>"."<a href='remove_entry.php?id=".$row["ID"]."&table=staff&url=editstaff.php"."'>"."Remove"."</a>"."</td>"."</tr>";
             }
            }
            else{
                echo "0 results";
             }
             $conn->close();
        ?>
</table>
    </div>
</div>
<nav class="navbar bg-primary navbar-fixed-bottom">
<form class="navbar-form navbar-left" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
    <input type="text" class="form-control" name="staff_name" placeholder="Enter Staff Name."/>
    <input type="text" class="form-control" name="staff_desig" placeholder="Enter Staff Designation."/>
    <input type="text" class="form-control" name="staff_qual" placeholder="Enter Staff Qualification."/>
    </div>
    <button class="btn navbar-btn btn-success" type="submit">Add</button>
</form>
<p class="navbar-text">2017 &copy; Prashant Singh. All Rights Reserved. Powered By insquoo.</p>
</nav>
<?php include("footer.php");?>