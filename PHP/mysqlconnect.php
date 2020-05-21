<?php
   $dbhost = 'localhost';
   $dbuser = 'sarthak';
   $dbpass = 'livehappy';
   $link = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $link ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   $db_select=mysqli_select_db($link, 'paristithi');
   if(!$db_select)
   {
   	 die('Cant use foo: ' . mysqli_connect_error());
   }

?>