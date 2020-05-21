<?php 
   
   header("Refresh: 5; url=../index.html");

   $dbhost = 'localhost';
   $dbuser = 'sarthak';
   $dbpass = 'livehappy';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   $name = mysqli_real_escape_string($conn, $_POST['name']); 
   $email = mysqli_real_escape_string($conn, $_POST['mail']);
   $phone = mysqli_real_escape_string($conn, $_POST['phn']);
   $cause = mysqli_real_escape_string($conn, $_POST['cause']);
   $dob = mysqli_real_escape_string($conn, $_POST['dob']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);

   $sql = "INSERT INTO volunteers (V_NAME, V_DOB, V_EMAIL, V_PHONE, V_CAUSE, V_GENDER) VALUES
   ('$name','$dob','$email','$phone','$cause','$gender')";
      
   mysqli_select_db($conn, 'paristithi');
   $retval = mysqli_query($conn, $sql );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($conn));
   }
   
   echo "Volunteer registration successful\n Returning to Paristithi Home page in a few seconds. Please wait....";
   
   mysqli_close($conn);
/* 
   $to = "somebody@example.com";
   $subject = "My subject";
   $txt = "Hello world!";
   $headers = "From: webmaster@example.com" . "\r\n" .
   "CC: somebodyelse@example.com";

   mail($to,$subject,$txt,$headers); 
*/
/*
$p_name = "Paristithi";
$p_mail = "admin@paristithi.com";
$message = "Thank you for registering as a volunteer with Paristithi!";
$base_subject = "We have recieved your information.";
$my_subject = "Volunteer confirmation";
$eol = PHP_EOL;
$separator = md5(time());

$headers = "From: " . $p_name . "<" . $p_mail . ">" . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;
$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
$headers .= "This is a MIME encoded message." . $eol . $eol;

// message
$headers .= "--" . $separator . $eol;
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
$headers .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
$headers .= $message . $eol . $eol;

if (mail("stk.gupta.2711@gmail.com", $my_subject, $message, $headers)) 
{
     echo "mail send ... OK";
     echo '<script>alert("Mail returns true");</script>';
     $headers = 'From: Paristithi <no_reply@paristithi.com>' . "\r\n";

} 
else 
{
   echo "mail send ... ERROR!";
   echo '<script>alert("Mail returns false");</script>';

}

*/
?>