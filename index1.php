<?php include("db-connect.php");?>
<?php 
    $sql="SELECT * FROM testimonials";
    $result=$conn->query($sql);
?>
<?php include("header.php");?>
    <div class="home-bg sf-jumbo jumbotron">
        <h1>NURTURING <span class="yellow">MINDS.</span> PREPARING <span class="green">BRAINS.</span></h1>
        <h3>QUALITY EDUCATION.</h3>
        <h3>GREAT PLATFORM.</h3>
        <h3>PLENTY OPPURTUNITIES.</h3>
        <h3 class="red">...YES That's what we offer.</h3>
    </div>
<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/images/creativity-home.jpg" alt="Teaching" width="140" height="140">
          <h2>Teaching</h2>
          <p>Our school has a specialized, fully dedicated knowledge centre with more than 15,000 video modules and 3D animated modules, covering subjects like English, Mathematics, Science and Social Science.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/images/teaching-home.jpg" alt="Creativity" width="140" height="140">
          <h2>Creativity</h2>
          <p>We are proud of our award-winning reputation as a creative and vibrant school and the unique opportunities that this brings to our students, staff and community.</p>
    
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/images/child-home.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Each Child Counts</h2>
          <p>We prepares students to understand, contribute to, and succeed in a rapidly changing society, and thus make the world a better and more just place. We inspire success, confidence and hope in each student.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      </div>
<div class="container">
    <div class="row">
        <div class="sf-jumbotron jumbotron">
            <h1>Why Choose <span class="green">U</span><span class="yellow">s</span>?</h1>
            <p>At JPS we are committed to the high achievement of all our students. We cultivate success and foster the highest aspirations through excellent teaching. We are a education society which has high expectations and actively seeks to celebrate the good in every individual.</p>
            <p><ul class="sf-lists">
                <li><i class="fa fa-check red"></i>&nbsp Excellent Infrastructure</li>
	        	<li><i class="fa fa-check red"></i>&nbsp A committed and caring staff</li>
                <li><i class="fa fa-check red"></i>&nbsp High qualified teachers.</li>
	            <li><i class="fa fa-check red"></i>&nbsp A focused curriculum and excellent teaching.</li>
                <li><i class="fa fa-check red"></i>&nbsp Regular physical activity for all students</li>
                <li><i class="fa fa-check red"></i>&nbsp Professional medical care for all kids included.</li>
            </ul></p>
        </div>
    </div>
</div>
    <div class="jumbotron sf-jumbo col-md-12 col-xs-12 card">
           <div class="card-container testimonials">
                <div class="page-header">
                    <h1>TESTIMONIALS <small class="red">What parents say about us?</small></h1>
                </div>
                <?php 
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<blockquote><p>".$row["content"]."</p><footer>".$row["name"]."<cite>"."(".$row["profile"].")</cite></footer>"."</blockquote>";
                        }
                    }
                    else{
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>
    </div>
<!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Our <span class="text-muted">Mission.</span></h2>
          <p class="lead">The Jyotsana Public School prepares students to understand, contribute to, and succeed in a rapidly changing society, and thus make the world a better and more just place. We inspire success, confidence and hope in each student.We will also lead in generating practical and theoretical knowledge that enables people to better understand our world and improve conditions for local and global communities.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive sf-img center-block" src="/images/school_img/14.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Our <span class="text-muted">Vision.</span></h2>
          <p class="lead">To impart knowledge to fertile, young minds, using ancient, traditional methods and blend them with cutting edge methodology, and thereby help create a promising future..</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive sf-img center-block" src="/images/school_img/13.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Our <span class="text-muted">Objectives.</span></h2><br><br>
          <p class="lead"><i class="fa fa-check red"></i>&nbspTo Provide information of new and upcoming technologies to the student.<br>
<i class="fa fa-check red"></i>&nbspTo Encourage students for research and development.<br>
<i class="fa fa-check red"></i>&nbspTo Provide career guidance through eminent personalities from academics and industries.<br>
<i class="fa fa-check red"></i>&nbspTo Organize seminars, guest lectures, industrial training for the student.<br>
<i class="fa fa-check red"></i>&nbspRegular physical activity for all students<br>
<i class="fa fa-check red"></i>&nbspTo develop personality and inculcate practical knowledge among students</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive sf-img center-block" src="/images/school_img/11.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
<?php include("footer.php");?>