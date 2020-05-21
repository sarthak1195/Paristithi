<?php

   
   header("Refresh: 5; url=../index.php");

   $dbhost = 'localhost';
   $dbuser = 'sarthak';
   $dbpass = 'livehappy';
   $link = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $link ) {
      die('Could not connect: ' . mysqli_connect_error());
   }

   $dname = mysqli_real_escape_string($link, $_POST['d_name']); 
   $dmail = mysqli_real_escape_string($link, $_POST['d_mail']);
   $dcause = mysqli_real_escape_string($link, $_POST['d_cause']);
   $amount = mysqli_real_escape_string($link, $_POST['d_amt']);

    $sqlquery = "INSERT INTO sponsor (S_NAME, S_EMAIL, S_CAUSE, S_AMOUNT, ADMIN_ID) VALUES
   ('$dname', '$dmail', '$dcause','$amount', 1)";
      
   mysqli_select_db($link, 'paristithi');
   $retvalue = mysqli_query($link, $sqlquery);
   
   if(! $retvalue ) {
      die('Could not enter data: ' . mysqli_error($link));
   }
   
   echo "DONOR REGISTRATION SUCCESSFUL\n\t PLEASE WAIT WHILE YOU ARE DIRECTED TO A MERCHANT WEBSITE";
   



   mysqli_close($link);
?>