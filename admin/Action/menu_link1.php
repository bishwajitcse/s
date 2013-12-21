

<?php
       
  include "../Include/db.php";
           
  

       
if(isset($_POST['Submit']))  {
      $MenuID=$_POST['MenuID'];
	    $Task=$_GET['Task'];
	  $CID=$_POST['CID'];
	  $MID=$_POST['MID'];
     $LinkWith=$_POST['LinkWith'];
	 $LinkID=$_POST['LinkID'];  

//	echo $start_date;
		
if($MID=="")
{

      $q=mysql_query("INSERT INTO `menulink` (`LinkWith`,`MenuID`,`LinkID`) VALUES ('$LinkWith','$MenuID','$LinkID')")or die (mysql_error ());

             echo "<script>window.location='../menu_link.php?&CID=$CID&mssg=Submitted Successfully';</script>";    
	}	

else{
	
	 $q=mysql_query("UPDATE `menulink` SET `LinkWith`='$LinkWith',`MenuID`='$MenuID',`LinkID`='$LinkID' WHERE `MID`='$MID'")or die (mysql_error ());

             echo "<script>window.location='../menu_link.php?&CID=$CID&mssg=Submitted Successfully';</script>";   
		
	
	}
	
		 
			 
      }
	  
	  
	  


?>
 