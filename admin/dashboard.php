<?php include("header.php"); ?>
<?php require("overview.php");?>
<div class="row">
<?php include("sidebar.php"); ?>
<div class="col-sm-9 col-md-10 main">
<div class="page-header">
    <h1>DASHBOARD <small>administered by <?php echo $_SESSION["email"];?></small></h1>
</div>
<div class="row">
    <div class="col col-md-3">
        <div class="card">
            <div class="card-container" align="center">
                <h2>No. of Messages</h2>
                <h1><?php echo $no_of_messages;?></h1>
            </div>
        </div>
    </div>
    <div class="col col-md-3">
        <div class="card">
            <div class="card-container" align="center">
                <h2>No. of Admission Enquiries</h2>
                <h1><?php echo $no_of_admission_enquiries;?></h1>
            </div>
        </div>
    </div>
    <div class="col col-md-3">
        <div class="card">
            <div class="card-container" align="center">
                <h2>No. of Posts</h2>
                <h1><?php echo $no_of_news;?></h1>
            </div>
        </div>
    </div>
    <div class="col col-md-3">
        <div class="card">
            <div class="card-container" align="center">
                <h2>No. of Staff Members</h2>
                <h1><?php echo $no_of_staff;?></h1>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-md-3">
        <div class="card">
            <div class="card-container" align="center">
                <h2>No. of Testimonials</h2>
                <h1><?php echo $no_of_testimonials;?></h1>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include("footer.php"); ?>