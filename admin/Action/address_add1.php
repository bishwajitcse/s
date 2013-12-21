

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	  $Country=$_POST['Country'];
	    $State=$_POST['State'];
	  $Postcode=$_POST['Postcode'];
	  $Addressline1=$_POST['Addressline1'];
     $Addressline2=$_POST['Addressline2'];
	 
     $AddressID=$_POST['AddressID'];






		


//	echo $start_date;
		
if($AddressID==""){
      $q=mysql_query("INSERT INTO `address` (`Title`,`Country`,`State`,`Postcode`,`Addressline1`,`Addressline2`,`LastUpdated`) VALUES ('$Title','$Country','$State','$Postcode','$Addressline1','$Addressline2',CURDATE())")or die (mysql_error ());

            echo "<script>window.location='../address_list.php?&mssg=Inserted Successfully';</script>";   
	 }	

else{
	
	 $q=mysql_query("UPDATE `address` SET `AddressID`='$AddressID',`Title`='$Title',`Country`='$Country',`State`='$State',`Postcode`='$Postcode',`Addressline1`='$Addressline1',`Addressline2`='$Addressline2',`LastUpdated`=CURDATE() WHERE `AddressID`='$AddressID'")or die (mysql_error ());

             echo "<script>window.location='../address_list.php?&mssg=Updated Successfully';</script>";   
		
	
	}
  }?>
		 
			 

	  

 