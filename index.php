<?php
include("PHP/mysqlconnect.php");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Paristithi | A Green Wave</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/paristithi.css">
  <link rel="stylesheet" type="text/css" href="theme/jquery-ui.css">
  
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">PARISTITHI</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
        <li><a href="#events">EVENTS</a></li>
        <li><a href="#" data-toggle="modal" data-target="#formModal">VOLUNTEER</a></li>
        <li><a href="#donate">DONATE</a></li>       
        <li><a href="#contact">CONTACT US</a></li>

      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/slideshow3.jpg" class="slideshowimg" alt="" width="1200" height="700" >
        <div class="carousel-caption">
          <h3>THE DRUM CIRCLE</h3>
          <p>Creating awareness and fundraising for events</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slideshow2.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>EDUCATION</h3>
          <p>Educating the ones who will make a difference in the coming years</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/slideshow1.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>TREE PLANTATIONS</h3>
          <p>Our motto is to make the concrete jungle green again</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel1.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>SWACH BHARAT ABHIYAAN</h3>
          <p>Leaning against Cleaning</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel2.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>STATIONERY DISTRIBUTION</h3>
          <p>Everyone can start small yet make a big collective difference</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel3.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>THE PARISTITHI TEAM</h3>
          <p>One small step for the youth, One Giant Leap for the city</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slideshow5.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>MOVEMENT AGAINST DEFORESTATION</h3>
          <p>Help us win the fight against deforestation</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slideshow6.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>START SMALL, MAKE BIG</h3>
          <p>Everyone can start small yet make a big collective difference</p>
        </div>
      </div>

      <div class="item">
        <img src="images/slideshow7.jpg" class="slideshowimg" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h3>VOLUNTEER WITH US</h3>
          <p>Let us help each other to protect mother nature</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     
    </a>
</div>

<!-- Container (The About us Section) -->
<div id="aboutus" class="container text-center">
  <img src="images/logo.png">
  
  <p><em>Paristithi</em> &nbsp;is a not-for-profit organization founded by a group of activist college going students in the city of dehradun. The sole purpose of the organization is the betterment of the environment and a better ecosystem for everyone who live in it. We identify the major threats and causes to the environment, both on a global and a local scale. Events are held every weekend to create awareness, and contribute towards change for good. Our vision and mission is a healthy environment by any means possible. Several events have been held like tree plantations, climate change awareness campaigns and Fundraisers to keep the organization going. Soon, we plan to execute our vision of a clean city, by literally, cleaning the city and attending to the waste properly. Join us in our cause and work with us. Volunteer today, for a safe and clean tomorrow.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Jai Sharma</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="images/founder_1_crop.jpg" class="img-circle person" alt="Name" width="400" height="300">
      </a>
      <div id="demo" class="collapse">
        <p>St. Joseph's Academy</p>
        <p>Delhi University</p>
        <p>Handles collaborations and govenment permissions</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Satvika Goyal</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="images/founder_2_crop.jpg" class="img-circle person" alt="Name" width="400" max-height="300">
      </a>
      <div id="demo2" class="collapse">
        <p>St.Thomas College</p>
        <p>University of Petroleum</p>
        <p>Event Manager</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Priyanka Purwal</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="images/founder_3_crop.jpg" class="img-circle person" alt="Name" width="400" height="300">
      </a>
      <div id="demo3" class="collapse">
        <p>St. Joseph's Academy</p>
        <p>Doon University</p>
        <p>Treasurer and Financial Head</p>
      </div>
    </div>
  </div>
</div>

<?php
   $sql1="SELECT E_NAME, E_DATE, E_image FROM events ORDER BY E_ID DESC LIMIT 1 OFFSET 0";
   $sql2="SELECT E_NAME, E_DATE, E_image  FROM events ORDER BY E_ID DESC LIMIT 1 OFFSET 1";
   $sql3="SELECT E_NAME, E_DATE, E_image FROM events ORDER BY E_ID DESC LIMIT 1 OFFSET 2";
   
   $event1=mysqli_query($link, $sql1); if(!$event1)  {die('Could not retrieve data 1: ' . mysqli_error($link));}
   $event2=mysqli_query($link, $sql2); if(!$event2)  {die('Could not retrieve data 2: ' . mysqli_error($link));}
   $event3=mysqli_query($link, $sql3); if(!$event3)  {die('Could not retrieve data 3: ' . mysqli_error($link));}

?>
<!-- Container (EVENT Section) -->
<div id="events" class="bg-1">
  <div class="container">
    <h3 class="text-center">EVENTS</h3>
    <p class="text-center">Volunteered yet?<br> Remember to register as a volunteer!</p>
    <?php
       while($row=mysqli_fetch_assoc($event1))
       {   
    ?>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo 'PHP/'.$row['E_image'] ?>" alt="Image from Database" width="400" height="300">
          <p><strong><?php echo $row['E_NAME']; ?></strong></p>
          <p><?php echo $row['E_DATE']; ?></p>
          <button class="btn" data-toggle="modal" data-target="#formModal">Volunteer</button>
        </div>
      </div>
      <?php
         }
         while($row=mysqli_fetch_assoc($event2))
         {
      ?>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo 'PHP/'.$row['E_image'] ?>" alt="Image from Database" width="400" height="300">
          <p><strong><?php echo $row['E_NAME']; ?></strong></p>
          <p><?php echo $row['E_DATE']; ?></p>
          <button class="btn" data-toggle="modal" data-target="#formModal">Volunteer</button>
        </div>
      </div>
      <?php
         }
         while($row=mysqli_fetch_assoc($event3))
         {
      ?>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo 'PHP/'.$row['E_image'] ?>" alt="Image from Database" width="400" height="300">
          <p><strong><?php echo $row['E_NAME']; ?></strong></p>
          <p><?php echo $row['E_DATE']; ?></p>
          <button class="btn" data-toggle="modal" data-target="#formModal">Volunteer</button>
        </div>
      </div>
      <?php
         } 
      ?>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade donateModal" id="donateModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-leaf"></span>&nbsp;Donate<br><small>Contribute towards Paristithi's goals</small></h4>
        </div>
        <div class="modal-body">
          <form id="donateForm" role="form" method="POST" action="PHP/donate.php">
            <div class="form-group">
              <label for="d_name"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Name</label>
              <input type="text" class="form-control" id="d_name" placeholder="Enter your full name" name="d_name">
            </div>
            <div class="form-group">
              <label for="d_mail"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Email</label>
              <input type="text" class="form-control" id="d_mail" placeholder="Enter email" name="d_mail">
            </div>
             <div class="form-group">
              <label for="d_cause"><span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;Which Paristithi objective do you find the most appealing?</label>
              <select class="form-control" id="d_cause" name="d_cause">
                <option>Educating the under-privileged</option>
                <option>Awareness campaigns against climate change</option>
                <option>Cleanliness, Health and Sanitation</option>
                <option>Tree plantation drives</option>
              </select>
            </div>
            <div class="form-group">
              <label for="d_amt"><span class="glyphicon glyphicon-piggy-bank"></span>&nbsp;&nbsp;Amount</label>
              <input type="text" class="form-control" id="d_amt" placeholder="Donation amount" name="d_amt">
            </div>
              <button type="submit" class="btn btn-block">Donate
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
  <div class="modal fade formModal" id="formModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-leaf"></span>&nbsp;Volunteer Registration</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="PHP/volunteer.php" id="volunteerForm">
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Name<span class="danger">*</span></label>
              <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name">
            </div>
            <div class="form-group">
              <label for="mail"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Email<span class="danger">*</span></label>
              <input type="text" class="form-control" id="mail" placeholder="Enter email" name="mail">
            </div>
            <div class="form-group">
              <label for="dob"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Date of Birth<span class="danger">*</span></label>
              <input type="text" class="form-control" id="dob" placeholder="Enter date of birth" name="dob">
            </div>
            <div class="form-group">
              <label for="gender">Gender
              <label class="radio-inline"><input type="radio" name="gender" value="male" checked="checked">Male <span class="glyphicon glyphicon-king"></label>
              <label class="radio-inline"><input type="radio" name="gender" value="female">Female <span class="glyphicon glyphicon-queen"></label></label>
              
            </div>
            <div class="form-group">
              <label for="phn"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;Contact Number<span class="danger">*</span></label>
              <input type="text" class="form-control" id="phn" placeholder="Contact number" name="phn">
            </div>
            <div class="form-group">
              <label for="cause"><span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;Cause of joining<span class="danger">*</span></label>
              <select class="form-control" id="cause" name="cause">
                <option>I have been a volunteer before</option>
                <option>Concerned about environment</option>
                <option>Only joinng for Certificate</option>
                <option>Recommended by a friend</option>
              </select>
             
            </div>
              <button type="submit" class="btn btn-block">Register
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (The Donate Section) -->
<div id="donate" class="container text-center">
  
  <img src="images/logo.png">
  <h2>Donate for our cause.</h2>
  <h3>Help us bring a change to our society.</h3>
  
  <p>We conduct and cordinate plantation drives in the heart of the doon valley. With the help of volunteers, we fertilize a piece of uncultivated land and plant seeds every week. This also includes helping us with maintainence and taking care of the saplings we plant. Our goal is to bring shade to the all the outdoor parking lots and bus stands.</p><br>
  
  <p>Our health and sanitation drives encourages all classes of the society to maintain standard cleanliness. A clean city is a healthy city. Help us by donating money which will be used to buy dustbins and waste disposal systems to areas where sewage disposals are questionable and needed most. We also create awareness for the same by educating the young ones.</p><br>
  
  <p>We also organize and conduct weekly stationery and knowledge distribution drives where we distribute books, notebooks and other stationery. Knowledge distribution drives focus on environmental subjects so as to create awareness among the young ones and anybody who is capable of teching can volunteer.</p><br>
    <button class="btn btn-success center-block" data-toggle="modal" data-target="#donateModal"><span class="donateButton">DONATE</span></button>
  <br>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  

  <div class="row" id="contact_row">
    <div class="col-md-6">
      <p><i>Drop a note!</i></p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Dehradun, Uttarakhand</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 9897454316</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: paristithi@gmail.com</p>
    </div>
    <div class="col-md-6">
      <div class="row">
      <form role="form" method="POST" action="PHP/feedback.php" id="feedbackform">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <br>
 
</div>

<div id="googleMap"></div>

<!-- Add Google Maps -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="valid/jquery.validate.js"></script>
  <script type="text/javascript" src="theme/jquery-ui.js"></script>
  <script type="text/javascript" src="js/paristithi.js"></script> 
 
</body>
</html>

