

<?php
       
  include "../Include/db.php";
           
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	    $ImgAltText=$_POST['ImgAltText'];
	  $SortIndex=$_POST['SortIndex'];
	  $Status=$_POST['Status'];
     $LinkWith=$_POST['LinkWith'];
	  $Category=$_POST['Category'];
	    $SmallImage=$_POST['SmallimageHd'];
		
     $ImageGalleryID=$_POST['ImageGalleryID'];
	 echo $ImageGalleryID;
	 


        
 "Upload: " . $_FILES["SmallImage"]["name"] . "<br />";
 if($_FILES["SmallImage"]["name"]!=""){
 move_uploaded_file($_FILES["SmallImage"]["tmp_name"], "../Upload/" . $_FILES["SmallImage"]["name"]);
  $SmallImage=$_FILES["SmallImage"]["name"];}
 else{
 
 }


//	echo $start_date;
		
if($ImageGalleryID==""){
      $q=mysql_query("INSERT INTO `imagegallery` (`Title`,`Category`,`ImgAltText`,`SmallImage`,`SortIndex`,`Status`,`LastUpdated`) VALUES ('$Title','$Category','$ImgAltText','$SmallImage','$SortIndex','$Status',CURDATE())")or die (mysql_error ());

             echo "<script>window.location='../gallery_list.php?&mssg=Inserted Successfully';</script>";    
	 }	

else{
	
	 $q=mysql_query("UPDATE `imagegallery` SET `Title`='$Title',`Category`='$Category',`SmallImage`='$SmallImage',`SortIndex`='$SortIndex' ,`Status`='$Status',`LastUpdated`=CURDATE() WHERE `ImageGalleryID`='$ImageGalleryID'")or die (mysql_error ());

             echo "<script>window.location='../gallery_list.php?&mssg=Updated Successfully';</script>";   
		
	
	}
  }?>
		 
			 

	  

 