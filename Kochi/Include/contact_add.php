

<?php
       
  include "db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	
	    $FirstName=$_POST['FirstName'];
	  $LastName=$_POST['LastName'];

     $Company=$_POST['Company'];
	 
     $URL=$_POST['URL'];
   $Email=$_POST['Email'];
$Enquiry=$_POST['Enquiry'];




		


//	echo $start_date;
		

      $q=mysql_query("INSERT INTO `contactinfo` (`CID`,`Title`,`FirstName`,`LastName`,`Company`,`URL`,`Email`,`Enquiry`,`ContactinfoDate`) VALUES ('3','$Title','$FirstName','$LastName','$Company','$URL','$Email','$Enquiry',CURDATE())")or die (mysql_error ());

            echo "<script>window.location='../Contact.php?&mssg=Inserted Successfully';</script>";   


  }?>
		 
			 

	  

 