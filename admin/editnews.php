<?php include("header.php");?>
<?php
include("db.php");
// define variables and set to empty values
$title = $content = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = test_input($_POST["news_title"]);
  $content = test_input($_POST["news_content"]);
  $sql="INSERT INTO news (title,content) VALUES ('".$title."','".$content."')";
if($conn->query($sql)==true){
    $_GET["message"]="News Successfully Published.";
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
            <h1>NEWS AND NOTICES</h1>
        </div>
        <?php
            if(isset($_GET["message"])){
                echo"<p class='alert alert-success'>".$_GET["message"]."</p>";
            }
        ?>
        <table class="table table-striped">
            <tr>
                <th>Title</th>
                <th>Time and Date Published</th>
                <th>Action</th>
            </tr>
        <?php 
        include "db.php";
        $sql="SELECT * FROM news ORDER BY pub_time DESC";
        $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>"."<td>".$row["title"]."</td>"."<td>".$row["pub_time"]."</td>"
                    ."<td>"."<a href='remove_entry.php?id=".$row["ID"]."&table=news&url=editnews.php"."'>"."Remove"."</a>"."</td>"."</tr>";
             }
            }
            else{
                echo "0 results";
             }
             $conn->close();
        ?>
</table>
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="form-group">
    <label for="news_title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="news_title" placeholder="News/Notice Title.">
    </div>
  </div>
  <div class="form-group">
    <label for="news_content" class="col-sm-2 control-label">Content</label>
    <div class="col-sm-10">
      <textarea rows="10" cols="30" class="form-control" name="news_content" placeholder="News content."></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
    </div>
</div>
<nav class="navbar bg-primary navbar-fixed-bottom" align="center">
<p class="navbar-text">2017 &copy; Prashant Singh. All Rights Reserved. Powered By insquoo.</p>
</nav>
<?php include("footer.php");?>