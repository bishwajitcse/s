

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['ntitle'];
	  $Area=$_POST['nArea'];
	  $floor=$_POST['nFloor'];
	  $Status=$_POST['nStatus'];
      $downloadfile=$_FILES['nDownload']['name'];

      $downloadID=$_POST['DownloadId'];

//	echo $start_date;
		
if($downloadID==""){

    move_uploaded_file($_FILES["nDownload"]["tmp_name"], "../Upload/" . $_FILES["nDownload"]["name"]);

      $q=mysql_query("INSERT INTO `Downloads` (Title,Area,Floor,Status,DownloadFile) VALUES ('$Title','$Area','$floor','$Status','$downloadfile')")or die (mysql_error ());

            echo "<script>window.location='../download_list.php?&mssg=Inserted Successfully';</script>";
	 }

else{

	 $q=mysql_query("UPDATE `Downloads` SET `Title`='$Title',`Area`='$Area',`Floor`='$floor',`Status`='$Status',`DownloadFile`='$downloadfile' WHERE `DownloadID`='$downloadID'")or die (mysql_error ());

             echo "<script>window.location='../download_list.php?&UserID=$downloadID&mssg=Updated Successfully';</script>";


	}
  }


?>
		 
			 

	  

 