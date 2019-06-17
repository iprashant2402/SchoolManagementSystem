<?php include("header.php"); ?>
<div class="container">
    <div class="row" align="center"><br><br><br>
        <div class="col-md-4 col-md-offset-4">
            <div class="card">
                <div class="card-container">
                    <h3 align="center">SIGN IN</h3><br><br>
                    <form action="signin.php" method="post"/>
                        <input type="email" name="email" class="sf-input" placeholder="Enter your E-mail"/><br><br>
                        <input type="password" name="pass" class="sf-input" placeholder="Password"/><br><br>
                        <button type="submit" class="sf-btn btn btn-primary">Sign In</button><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php include("footer.php");?>