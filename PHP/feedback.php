<?php
   $dbhost = 'localhost';
   $dbuser = 'sarthak';
   $dbpass = 'livehappy';
   $link = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $link ) {
      die('Could not connect: ' . mysqli_connect_error());
   }

   mysqli_select_db($link, 'paristithi');
   
   
   $name = mysqli_real_escape_string($link, $_POST['name']); 
   $mail = mysqli_real_escape_string($link, $_POST['email']);
   $comment = mysqli_real_escape_string($link, $_POST['comments']);

   $sql ="INSERT INTO feedback (NAME, EMAIL, COMMENTS) VALUES ('$name', '$mail', '$comment')";
   $retvalue = mysqli_query($link, $sql);

   if(! $retvalue ) {
      die('Could not enter data: ' . mysqli_error($link));
   }
   
   echo "FEEDBACK SUCCESSFUL..........PLEASE WAIT WHILE YOU ARE DIRECTED BACK TO PARISTITHI HOMEPAGE";
   header("Refresh: 5; url=/symbi/");
?>