

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $UserName=$_POST['UserName'];
	  $Password=$_POST['Password'];
	    $Email=$_POST['Email'];
	  $UserRole=$_POST['UserRole'];
	  $Status=$_POST['Status'];
     $CityAccess=$_POST['CityAccess'];
	  
		  $BigImage=$_POST['BigimageHd'];
		    $SmallImage=$_POST['SmallimageHd'];
		   $SmallDetails=$_POST['SmallDetails'];
     $UserID=$_POST['UserID'];






		

//	echo $start_date;
		
if($UserID==""){
      $q=mysql_query("INSERT INTO `user` (`UserName`,`Password`,`Email`,`UserRole`,`CityAccess`,`Status`) VALUES ('$UserName','$Password','$Email','$UserRole','$CityAccess','$Status')")or die (mysql_error ());

            echo "<script>window.location='../user_list.php?&mssg=Inserted Successfully';</script>";   
	 }	

else{
	
	 $q=mysql_query("UPDATE `user` SET `UserID`='$UserID',`UserName`='$UserName',`Password`='$Password',`Email`='$Email',`UserRole`='$UserRole',`CityAccess`='$CityAccess',`Status`='$Status' WHERE `UserID`='$UserID'")or die (mysql_error ());

             echo "<script>window.location='../user_list.php?&UserID=$UserID&mssg=Updated Successfully';</script>";   
		
	
	}
  }?>
		 
			 

	  

 