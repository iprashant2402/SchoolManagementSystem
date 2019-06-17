<?php include("db-airplane-connect.php");?>
<?php 

	$sql="SELECT * FROM airport";
    $result=$conn->query($sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Management Portal</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h1>Employee Management Portal</h1>
        <p class="lead">Enter employee details below to add to database.</p>
      </div>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Employee Info</h4>
          <form class="needs-validation" novalidate action="submit_form.php" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="middleName">Middle initial</label>
                <input type="text" class="form-control" id="MiddleName" name="mname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid middle name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="passp">SSN <span class="text-muted">(Mandatory)</span></label>
              <input type="text" class="form-control" id="pass" name="passp" placeholder="">
              <div class="invalid-feedback">
                Please enter a valid SSN no.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="add" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your address as per your passport.
              </div>
            </div>


            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Phone</label>
                <input type="phone" class="Form-control" id="phone" name="phone" required>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Gender</label>
                <select class="custom-select d-block w-100" id="sex" name="sex" required>
                  <option value="M">MALE</option>
                  <option value="F">FEMALE</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid gender.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="age">AGE</label>
                <input type="number" class="form-control" id="zip" name="age" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="j_type">Job Type:</label>
              <input type="text" class="form-control" id="jtype" name="jtype" placeholder="e.g. Traffic Monitor" required>
              <div class="invalid-feedback">
                Please enter your address as per your passport.
              </div>
            </div>

            <div class="mb-3">
              <label for="astype">ASTYPE</label>
              <input type="text" class="form-control" id="astype" name="astype" placeholder="e.g. Data Entry Worker" required>
              <div class="invalid-feedback">
                Please enter your address as per your passport.
              </div>
            </div>

            <div class="mb-3">
              <label for="pos">Shift</label>
              <input type="text" class="form-control" id="shift" name="shift" placeholder="Day/Night" required>
              <div class="invalid-feedback">
                Please enter your address as per your passport.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Position</label>
              <input type="text" class="form-control" id="address" name="pos" placeholder="e.g. Manager" required>
              <div class="invalid-feedback">
                Please enter your address as per your passport.
              </div>
            </div>

            <div class="mb-3">
              <label for="airport">Airport</label>
                <select class="custom-select d-block w-100" id="ap" name="ap" required>
                  <?php
                  while($row=$result->fetch_assoc()){
                            echo "<option value='".$row["AP_NAME"]."'>".$row["AP_NAME"]."</option>";
                        }
                        ?>
                </select>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">SUbmit</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2019 Prashant Singh & Anurag Gautam</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>
