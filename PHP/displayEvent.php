<?php
   include("mysqlconnect.php");
?>
<!DOCTYPE html>
<html>
 <head>
	<title>DISPLAYING EVENTS</title>
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


    </style> 
 </head>
<body>

<?php

//header("content-type:image/jpeg");
session_start();
$select_query="SELECT E_image FROM events ORDER BY E_ID DESC";
$sql="SELECT E_NAME, E_DATE, E_PLACE, E_TIME FROM events"; 
$retval = mysqli_query($link, $sql);      
?>      
<div id="eventstable" class="container">
<h3 id="eventdiv">Events</h3>
<table border="2">
  <thead>
    <tr>
      <th>NAME OF EVENT</th>
      <th>DATE of EVENT</th>
      <th>PLACE of EVENT</th>
      <th>TIME of EVENT</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(mysqli_num_rows( $retval )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $retval ) ){
          echo "<tr><td>{$row['E_NAME']}
                </td><td>{$row['E_DATE']}
                </td><td>{$row['E_PLACE']}
                </td><td>{$row['E_TIME']}
                </td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</div>
<?php
   $sql1="SELECT E_NAME, E_image FROM events ORDER BY E_ID DESC"; 
   $retvalue = mysqli_query($link, $sql1);      
?>
<div id="eventsimage" class="container">
<h3 id="imagediv">Volunteers</h3>
<table border="2">
  <thead>
    <tr>
      <th>NAME OF EVENT</th>
      <th>IMAGE OF EVENT</th> 
    </tr>
  </thead>
  <tbody>
    <?php
      if(mysqli_num_rows( $retvalue )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $retvalue ) ){
        ?>

        <tr>
        	<td><?php echo $row['E_NAME']?></td>
        	<td><img src="<?php echo $row["E_image"]; ?>" alt="Event Image from database" hieght="400px" width="300px"/></td>
        	
        </tr>   
        <?php        
        }
      }
    ?>

</body>
</html>


<?php
/*       $retvalue = mysqli_query($link, $select_query);
   
               if(! $retvalue ) 
                 {
                  die('Could not retrieve data: ' . mysqli_error($link));
                 }

        while($row=mysqli_fetch_array($retvalue, MYSQLI_BOTH))
        {           

?>
  
       
      <img src="<?php echo $row['E_image'];?>" alt="Image from database" hieght="400px" width="300px">

      <?php
         }
      */
      ?>