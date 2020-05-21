<?php
   include("mysqlconnect.php");
?> 

<?php
   header("Refresh: 5; url=../admin/login_success.php");
   session_start();
   function getImageExtension($imagetype)
   {
   	  if(empty($imagetype))
   	  	return false;
   	  switch($imagetype)
   	  {
   	  	case 'image/bmp': return '.bmp';
   	  	case 'image/gif': return '.gif';
   	  	case 'image/jpeg': return '.jpg';
   	  	case 'image/png': return '.png';
   	  	default: return false;
   	  }
   }

    $ename = mysqli_real_escape_string($link, $_POST['e_name']); 
    $edate = mysqli_real_escape_string($link, $_POST['e_date']);
    $eplace = mysqli_real_escape_string($link, $_POST['e_place']);
    $etime = mysqli_real_escape_string($link, $_POST['e_time']);

    echo "$ename\n $edate\n $eplace \n $etime\n"; 
    echo PHP_EOL;
    if(!empty($_FILES['e_pic']['name']))
    {
    	$file_name=$_FILES['e_pic']['name'];
    	$temp_name=$_FILES['e_pic']['tmp_name'];
    	$imgtype=$_FILES['e_pic']['type'];
    	$ext= getImageExtension($imgtype);
    	$imagename=date("d-m-Y")."-".time().$ext;
    	$target_path="events/".$imagename;
        
        echo "$imagename \n $target_path \n $ext";
        echo PHP_EOL;


    	if(move_uploaded_file($temp_name, $target_path))
    	{
    		$query_upload="INSERT INTO events (E_NAME, E_DATE, E_PLACE, E_TIME, ADMIN_ID, E_image) VALUES ('$ename', '$edate', '$eplace', '$etime', 1, '$target_path')";
    	    $retvalue = mysqli_query($link, $query_upload);
   
               if(! $retvalue ) 
                 {
                  die('Could not enter data: ' . mysqli_error($link));
                 }
                 echo "------DATA ENETRED------\n"; 
    	}
    	else
    	{
             exit("ERROR while uploading files to server");
        }
    }
    
?>






















