<?php

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
// username and password sent from form 
$myusername=$_POST['user_name']; 
$mypassword=$_POST['admin_pwd'];
$encrypted_password=md5($mypassword);

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn,$myusername);
$mypassword = mysqli_real_escape_string($conn, $mypassword);
$sql="SELECT * FROM $tbl_name WHERE A_USERID='$myusername' and A_USER_PASSWORD='$encrypted_password'";
$result=mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['user_name']="$myusername";
$_SESSION['admin_pwd']="$encrypted_password";


header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
header("Refresh: 5; url=/symbi/admin/");
}
?>