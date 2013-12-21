

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	  $SortIndex=$_POST['SortIndex'];

     $PressKitID=$_POST['PressKitID'];






		

//	echo $start_date;
		
if($PressKitID==""){
      $q=mysql_query("INSERT INTO `presskit` (`Title`,`SortIndex`) VALUES ('$Title','$SortIndex')")or die (mysql_error ());

            echo "<script>window.location='../presskit_list.php?&mssg=Inserted Successfully';</script>";   
	 }	

else{
	
	 $q=mysql_query("UPDATE `presskit` SET `Title`='$Title',`SortIndex`='$SortIndex' WHERE `PressKitID`='$PressKitID'")or die (mysql_error ());

             echo "<script>window.location='../presskit_list.php?&PressKitID=$PressKitID&mssg=Updated Successfully';</script>";   
		
	
	}
  }?>
		 
			 

	  

 