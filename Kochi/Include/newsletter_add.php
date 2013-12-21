

<?php  include "db.php";
       
  

       
if(isset($_POST['Submit']))  {


      $Email=$_POST['Email'];

  $MenuID=$_POST['MenuID'];


		


//	echo $start_date;
		

      $q=mysql_query("INSERT INTO `newsletter` (`Email`,`SubscriptionDate`) VALUES ('$Email',CURDATE())")or die (mysql_error ());

 echo "<script>window.location='../gallery.php?MenuID=$MenuID&mssg=Submitted Successfully';</script>";  


  }?>
		 
			 

	  

 