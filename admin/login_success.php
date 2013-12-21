<?php

require "Include/db.php";
$username=$_POST['UserName'];
$password=$_POST['Password'];
$error='Invalid Username and Password';

$query = mysql_query("SELECT * FROM `user` WHERE UserName='$username' AND Password='$password'");
$row=mysql_fetch_array($query);
								 if($row)
								{
								
							          session_start();
                                    $_SESSION['username']=$row['UserName'];
								  $_SESSION['CityAccess']=$row['CityAccess'];
								
								 echo "<script>window.location='Landing_Page.php';</script>";  
								}
				
	
	else 
	{
	 echo "<script>window.location='index.php?&error=$error';</script>";  
	?>
<?php

 
 
	}   ?>
