

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	  $SortIndex=$_POST['SortIndex'];

     $PressKitID=$_POST['PressKitID'];
	  $Description=$_POST['Description'];
     $PressKitListID=$_POST['PressKitListID'];
     $resize_image=$_POST['SmallimageHd'];
	 echo $resize_image;
     $DownloadLink=$_POST['DownloadLinkHd'];
	      $rounded=$_POST['SizeHd'];
		  
		  
		  
		       $FileType=$_POST['FileTypeHd'];


// outputs e.g.  somefile.txt: 1024 bytes


function resize($width, $height){
	/* Get original image x y*/
	list($w, $h) = getimagesize($_FILES['SmallImage']['tmp_name']);
	/* calculate new image size with ratio */
	$ratio = max($width/$w, $height/$h);
	$h = ceil($height / $ratio);
	$x = ($w - $width / $ratio) / 2;
	$w = ceil($width / $ratio);
	/* new file name */
	$path = '../Upload/'.$width.'x'.$height.'_'.$_FILES['SmallImage']['name'];
	$image_name=$resize_image=$_FILES['SmallImage']['name'];

	/* read binary data from image file */
	$imgString = file_get_contents($_FILES['SmallImage']['tmp_name']);
	/* create image from string */
	$image = imagecreatefromstring($imgString);
	$tmp = imagecreatetruecolor($width, $height);
	imagecopyresampled($tmp, $image,
  	0, 0,
  	$x, 0,
  	$width, $height,
  	$w, $h);
	/* Save image */
	switch ($_FILES['SmallImage']['type']) {
		case 'image/jpeg':
			imagejpeg($tmp, $path, 100);
			break;
		case 'image/png':
			imagepng($tmp, $path, 0);
			break;
		case 'image/gif':
			imagegif($tmp, $path);
			break;
		default:
			exit;
			break;
	} 
	return $path;
	
	
	/* cleanup memory */
	imagedestroy($image);
	imagedestroy($tmp);
}

		// settings
$max_file_size = 1500*1000; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(100 => 100);


	if( $_FILES['SmallImage']['size'] < $max_file_size ){
		// get file extension
		$ext = strtolower(pathinfo($_FILES['SmallImage']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			/* resize image */
			
	
			foreach ($sizes as $w => $h) {
		    $files[] = resize(276, 144);
			}

		} else {
			$msg = 'Unsupported file';
		}
	} else{
		$msg = 'Please upload image smaller than 200KB';
	}

  		
		"Upload: " . $_FILES["SmallImage"]["name"] . "<br />";

 move_uploaded_file($_FILES["SmallImage"]["tmp_name"], "../Upload/" . $_FILES["BigImage"]["name"]);
  $SmallImage=$_FILES["SmallImage"]["name"];
	
	 "Upload: " . $_FILES["DownloadLink"]["name"] . "<br />";
 if($_FILES["DownloadLink"]["name"]!=""){
 move_uploaded_file($_FILES["DownloadLink"]["tmp_name"], "../Upload/" . $_FILES["DownloadLink"]["name"]);
  $DownloadLink=$_FILES["DownloadLink"]["name"];
  
 
   $Size=($_FILES["DownloadLink"]["size"])/1024/1024 . 'MB';
  
$rounded = round($Size, 2) . ' MB';


  $path_info = pathinfo($_FILES["DownloadLink"]["name"]);

  $FileType=$path_info['extension'];
  }
 else{
 
 }


 if($_FILES["SmallImage"]["name"]!=""){
	$resize_image='276'.'x'.'144'.'_'.$SmallImage;}
	else{
	$resize_image=$_POST['SmallimageHd'];
	}
	
	

//	echo $start_date;
		
if($PressKitListID==""){
      $q=mysql_query("INSERT INTO `presskitlist` (`PressKitID`,`Title`,`Size`,`SmallImage`,`Description`,`DownloadLink`,`FileType`) VALUES ('$PressKitID','$Title','$rounded','$resize_image','$Description','$DownloadLink','$FileType')")or die (mysql_error ());

           echo "<script>window.location='../presskitdata_list.php?PressKitID=$PressKitID&mssg=Inserted Successfully';</script>";   
	 }	

else{
	
	 $q=mysql_query("UPDATE `presskitlist` SET `PressKitID`='$PressKitID',`Title`='$Title',`Size`='$rounded ',`SmallImage`='$resize_image',`Description`='$Description',`DownloadLink`='$DownloadLink',`FileType`='$FileType' WHERE `PressKitListID`='$PressKitListID'")or die (mysql_error ());

          echo "<script>window.location='../presskitdata_list.php?&PressKitID=$PressKitID&mssg=Updated Successfully';</script>";  
		
	
	}
  }?>
		 
			 

	  

 