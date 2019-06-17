<?php include("header.php");?>
<div class="container">
<div class="jumbotron sf-jumbo">
        <h1 align="center"><span class="red">CONTACT US</span></h1><br><br>
        <div class="col col-md-6 col-xs-12 sf-vr">
            <form class="sf-form" action="enquiry.php" name="contact_form" method="post" align="center">
    
                <input type="text" class="sf-input" name="fname" id="name" required placeholder="Your Name"/>
                <input type="email" class="sf-input" name="mail" id="email" required placeholder="Your E-mail"/>
                <input type="text" class="sf-input" name="subject" id="sub" required placeholder="Subject of Enquiry"/>
                <textarea name="message" id="mess" class="sf-input" rows="10" cols="30" placeholder="Your Message"></textarea>
                <button type="submit" class="sf-btn"><i class="fa fa-send"></i>&nbsp;Send</button>
            </form>
        </div>
        <div class="col col-md-6 col-xs-12 red">
            <p class="lead"><i class="fa fa-phone"></i>&nbsp;+91 (7822) 251025</p>
            <p class="lead"><i class="fa fa-envelope"></i>&nbsp;principal@jyotsanapublicschool.in</p>
            <address class="lead">
                <i class="fa fa-address-card"></i>&nbsp;
                <strong>
                    Jyotsana Public School,
                </strong><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hadbado,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sidhi<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Madhya Pradesh<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;486661
            </address>
        </div>
 </div>
 </div>

<?php include("footer.php");?>