<?php include("header.php");?>
<h1>Gallery</h1><br><br>
<div class="row">
<?php
$num=1;
$files = glob('images/school_img/*.{jpg,png,gif}', GLOB_BRACE);
foreach($files as $file) {
    echo "<div class='col col-sm-6 col-md-4 img-container'>".
        "<img width='300px' height='300px' class='thumbnail' src='".$file."'/>"
        
    ."</div>";
    $num++;
}
?>
</div>
<?php include("footer.php");?>