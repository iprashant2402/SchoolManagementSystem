<?php include("header.php");?>
<?php
include("db.php");
// define variables and set to empty values
$name = $designation = $qualification = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $profile = test_input($_POST["profile"]);
  $content = test_input($_POST["content"]);
  $sql="INSERT INTO testimonials (name,profile,content) VALUES ('".$name."','".$profile."','".$content."')";
if($conn->query($sql)==true){
    $_GET["message"]="Testimonial successfully added.";
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
            <h1>TESTIMONIALS</h1>
        </div>
        <?php
            if(isset($_GET["message"])){
                echo"<p class='alert alert-success'>".$_GET["message"]."</p>";
            }
        ?>
        <table class="table table-striped">
            <tr>
               
                <th>Name</th>
                <th>Profile</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        <?php 
        include "db.php";
        $sql="SELECT * FROM testimonials";
        $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>"."<td>".$row["name"]."</td>"."<td>".$row["profile"]."</td>"."<td>".$row["content"]
                    ."</td>"."<td>"."<a href='remove_entry.php?id=".$row["ID"]."&table=testimonials&url=edittestimonials.php"."'>"."Remove"."</a>"."</td>"."</tr>";
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
    <input type="text" class="form-control" name="name" placeholder="Enter Name."/>
    <input type="text" class="form-control" name="profile" placeholder="Enter Profile."/>
    <input type="text" class="form-control" name="content" placeholder="Enter Testimonials."/>
    </div>
    <button class="btn navbar-btn btn-success" type="submit">Add Testimonials</button>
</form>
<p class="navbar-text">2017 &copy; Prashant Singh. All Rights Reserved. Powered By insquoo.</p>
</nav>
<?php include("footer.php");?>