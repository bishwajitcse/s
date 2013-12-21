

<?php
       
  include "../Include/db.php";
           
  

       
if(isset($_POST['Submit'])) 
    $MenuID=$_POST['MenuID'];
	   $CID=$_POST['CID'];
	echo $CID;
    $Title=$_POST['Title'];   

//	echo $start_date;
	

 {
$b=mysql_query("UPDATE `menu` SET `Title`='$Title' WHERE `MenuID`='$MenuID'");

               //  header ('location:adproject.php?b=insert successfully');
		 /*?> $b="Insert successfully";
			   ?>
			   
			   <meta HTTP-EQUIV="REFRESH" content="0; url= City_menu.php">
			   <?
     exit;<?php */
             echo "<script>window.location='../City_menu.php?&CID=$CID';</script>";    
     }  


ob_end_flush();
?>
 