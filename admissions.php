<?php include("header.php");?>
<div class="container">
    <div class="jumbotron sf-jumbo">
        <h1>ADMISSIONS</h1><br><br>
        <p class="alert alert-danger">
            Sorry, currently the admissions are closed.<br>
            To know more, enter your details below&nbsp;<i class="fa fa-arrow-down"></i> and we we'll get in touch with you.
        </p>
    </div>
</div>
<div class="container">
    <h2 align="center">ENTER YOUR DETAILS HERE</h2><br><br>
    <div class="col col-md-6 col-xs-12 sf-vr" align="center">
            <form class="sf-form" action="admission_apply.php" name="admissions_form" method="post" align="center">
    
                <input type="text" class="sf-input" name="adname"  required placeholder="Student's Name"/>
                <input type="email" class="sf-input" name="admail"  required placeholder="Your E-mail"/>
                <input type="tel" class="sf-input" name="adtel"  required placeholder="Your Phone"/>
                <button type="submit" class="sf-btn">Submit</button>
            </form>
    </div>
    <div class="col col-md-6 col-xs-12" align="center">
        <a href="http://jyotsanapublicschool.in/wp-content/uploads/2016/12/Prospectus.pdf" class="featurette-heading"><i class="fa fa-download"></i></a>
        <p class="lead">DOWNLOAD PROSPECTUS</p>
    </div>
</div>
<?php include("footer.php");?>