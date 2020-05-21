<?php
 session_start();
 if(isset($_SESSION['$myusername']))
 {
  header("location:/symbi/admin/");
 }

$host="localhost"; // Host name 
$username="sarthak"; // Mysql username 
$password="livehappy"; // Mysql password 
$db_name="paristithi"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
$conn = mysqli_connect($host, $username, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
mysqli_select_db($conn, 'paristithi');
$sql="SELECT V_NAME, V_DOB, V_EMAIL, V_GENDER, V_PHONE, V_CAUSE FROM volunteers";
$sql1="SELECT S_NAME, S_EMAIL, S_CAUSE, S_AMOUNT FROM sponsor";
$sql2="SELECT NAME, EMAIL, COMMENTS FROM FEEDBACK";
$sql3="SELECT E_NAME, E_DATE, E_PLACE, E_TIME, E_image FROM events ORDER BY E_ID DESC";
$retval = mysqli_query($conn, $sql );
$retvalue = mysqli_query($conn, $sql1 );
$retval1 = mysqli_query($conn, $sql2);
$retvalue1 = mysqli_query($conn, $sql3);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<style type="text/css">

	th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;

}

body{
	  font: 400 20px/1.8 Lato, sans-serif;
      color: #777;
      padding
}

tr:hover {background-color: #f5f5f5}

table{border-collapse: collapse;}

.ui-datepicker{
  background-color: #ff9999;
}

  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  

</style>

</head>

<body>

<br>
 <form method="POST" action="logout.php" enctype="multipart/form-data">
  <button type="submit" class="btn btn-warning pull-right">LOGOUT</button>
</form>
 <button class="btn btn-warning center-block" data-toggle="modal" data-target="#formAddEvent">ADD EVENT</button>
<br>

<div id="tabs">
  <ul>
     <li><a href="#tab-1">Volunteers</a></li>
     <li><a href="#tab-2">Sponsors</a></li>
     <li><a href="#tab-3">Events</a></li>
     <li><a href="#tab-4">User Feedback</a></li> 
  </ul>
  

  <div id="tab-1" class="container">
   <h3 id="volunteerdiv">Volunteers</h3>
   <table border="2">
      <thead>
      <tr>
      <th>Name</th>
      <th>Date of birth</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Phone Number</th>
      <th>Cause Of Joining</th>

      </tr>
   </thead>
   <tbody>
    <?php
      if( mysqli_num_rows( $retval )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $retval ) ){
          echo "<tr><td>{$row['V_NAME']}
                </td><td>{$row['V_DOB']}
                </td><td>{$row['V_EMAIL']}
                </td><td>{$row['V_GENDER']}
                </td><td>{$row['V_PHONE']}
                </td><td>{$row['V_CAUSE']}
                </td></tr>\n";
        }
      }
    ?>
     </tbody>
    </table>
  </div><!-- tab-1 -->

  <div id="tab-2" class="container">
   <h3 id="sponsordiv">Sponsors</h3>
    <table border="2">
     <thead>
      <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Most Appealing Cause</th>
      <th>Amount donated</th> 
    </tr>
    </thead>
    <tbody>
    <?php
      if( mysqli_num_rows( $retvalue )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $retvalue ) ){
          echo "<tr><td>{$row['S_NAME']}
                </td><td>{$row['S_EMAIL']}
                </td><td>{$row['S_CAUSE']}
                </td><td>{$row['S_AMOUNT']}
                </td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</div><!-- tab-2 -->


<div id="tab-3" class="container">
<h3 id="eventdiv">Events</h3>
<table border="2">
  <thead>
    <tr>
      <th>NAME OF EVENT</th>
      <th>DATE of EVENT</th>
      <th>PLACE of EVENT</th>
      <th>TIME of EVENT</th>
      <th>IMAGE of EVENT</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(mysqli_num_rows( $retvalue1 )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $retvalue1 ) ){
          echo "<tr><td>{$row['E_NAME']}
                </td><td>{$row['E_DATE']}
                </td><td>{$row['E_PLACE']}
                </td><td>{$row['E_TIME']}"?>
                </td><td><img src="<?php echo '../PHP/' . $row['E_image'] ?>" alt="Image from database" hieght="400px" width="300px">
                </td></tr>
                <?php
        }
      }
    ?>
  </tbody>
</table>
</div> <!-- tab-3 -->

<div id="tab-4" class="container">
<h3 id="feedbackrdiv">Feedbacks</h3>
<table border="2">
  <thead>
    <tr>
      <th>Name</th>
      <th>Date of birth</th>
      <th>Comments</th>

    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $retval1 )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $retval1 ) ){
          echo "<tr><td>{$row['NAME']}
                </td><td>{$row['EMAIL']}
                </td><td>{$row['COMMENTS']}
                </td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</div>  <!-- tab-4 -->

</div>







<br />


<!--
<button class="btn btn-success center-block"><a href="../PHP/displayEvent.php">Display images</a></button>
<br>
-->
<!--<a href="../PHP/displayEvent.php" class="center-block">Display images</a>
 <!-- Modal -->
  <div class="modal fade" id="formAddEvent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-leaf"></span>&nbsp;Add Event</h4>
        </div>
        <div class="modal-body">
          <form id="addEvent" role="form" method="POST" action="../PHP/addEvent.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="e_name"><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;Event Name</label>
              <input type="text" class="form-control" id="e_name" placeholder="Enter event name" name="e_name">
            </div>
            <div class="form-group">
              <label for="e_date"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Event Date</label>
              <input type="text" class="form-control" id="e_date" placeholder="Enter date of event" name="e_date">
            </div>
            <div class="form-group">
              <label for="e_place"><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Event Place</label>
              <input type="text" class="form-control" id="e_place" placeholder="Event place" name="e_place">
            </div>
            <div class="form-group">
              <label for="e_time"><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;Event Time</label>
              <input type="text" class="form-control" id="e_time" placeholder="Time of event" name="e_time">
            </div>
             
            <div class="form-group">
              <label for="e_pic"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Upload Event poster</label>
              <input type="hidden" name="MAX_FILE_SIZE" value="300000">
              <input type="file" class="filestyle" name="e_pic" data-buttonText="Select a file">
            </div>
            
              <button type="submit" name="submit" class="btn btn-block">Submit event
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





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../theme/jquery-ui.js"></script>
  <script type="text/javascript" src="../valid/jquery.validate.js"></script>
  <script type="text/javascript" src="../js/admin.js"></script>
  <script type="text/javascript" src="../js/fileupload.js"></script>
  
</body>
</html>