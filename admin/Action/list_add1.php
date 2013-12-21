

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	    $ImgAltText=$_POST['ImgAltText'];
	  $SortIndex=$_POST['SortIndex'];
	  $Status=$_POST['Status'];
   $Featured=$_POST['Featured'];
	  
		  $BigImage=$_POST['BigimageHd'];
		    $SmallImage=$_POST['SmallimageHd'];
		   $SmallDetails=$_POST['SmallDetails'];
		   	   $BigDetails=$_POST['BigDetails'];
     $ListID=$_POST['ListID'];

	 




		

/**
 * Image resize while uploading
 * @author Resalat Haque
 * @link http://www.w3bees.com/2013/03/resize-image-while-upload-using-php.html
 */
 
/**
 * Image resize
 * @param int $width
 * @param int $height
 */
function resize($width, $height){
	/* Get original image x y*/
	list($w, $h) = getimagesize($_FILES['BigImage']['tmp_name']);
	/* calculate new image size with ratio */
	$ratio = max($width/$w, $height/$h);
	$h = ceil($height / $ratio);
	$x = ($w - $width / $ratio) / 2;
	$w = ceil($width / $ratio);
	/* new file name */
	$path = '../Upload/'.$width.'x'.$height.'_'.$_FILES['BigImage']['name'];
	$image_name=$resize_image=$_FILES['BigImage']['name'];

	/* read binary data from image file */
	$imgString = file_get_contents($_FILES['BigImage']['tmp_name']);
	/* create image from string */
	$image = imagecreatefromstring($imgString);
	$tmp = imagecreatetruecolor($width, $height);
	imagecopyresampled($tmp, $image,
  	0, 0,
  	$x, 0,
  	$width, $height,
  	$w, $h);
	/* Save image */
	switch ($_FILES['BigImage']['type']) {
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
$max_file_size = 1024*800; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(100 => 100);


	if( $_FILES['BigImage']['size'] < $max_file_size ){
		// get file extension
		$ext = strtolower(pathinfo($_FILES['BigImage']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			/* resize image */
			foreach ($sizes as $w => $h) {
				$files[] = resize($w, $h);
			
			}

		} else {
			$msg = 'Unsupported file';
		}
	} else{
		$msg = 'Please upload image smaller than 200KB';
	}


		
		
	 "Upload: " . $_FILES["BigImage"]["name"] . "<br />";
 if($_FILES["BigImage"]["name"]!=""){
 move_uploaded_file($_FILES["BigImage"]["tmp_name"], "../Upload/" . $_FILES["BigImage"]["name"]);
  $BigImage=$_FILES["BigImage"]["name"];}
 else{
 
 }
  	
		
		
	$resize_image='100'.'x'.'100'.'_'.$BigImage;


//	echo $start_date;
		
if($ListID==""){
      $q=mysql_query("INSERT INTO `list` (`Title`,`ImgAltText`,`SmallImage`,`BigImage`,`SmallDetails`,`BigDetails`,`SortIndex`,`Status`,`Featured`,`LastUpdated`) VALUES ('$Title','$ImgAltText','$resize_image','$BigImage','$SmallDetails','$BigDetails','$SortIndex','$Status','$Featured',CURDATE())")or die (mysql_error ());

            echo "<script>window.location='../list_view.php?&ListID=$ListID&mssg=Inserted Successfully';</script>";   
	 }	

else{
	
	 $q=mysql_query("UPDATE `list` SET `ListID`='$ListID',`Title`='$Title',`SmallImage`='$resize_image',`BigImage`='$BigImage',`ImgAltText`='$ImgAltText',`SmallDetails`='$SmallDetails',`BigDetails`='$BigDetails',`SortIndex`='$SortIndex' ,`Status`='$Status',`Featured`='$Featured',`LastUpdated`=CURDATE() WHERE `ListID`='$ListID'")or die (mysql_error ());

             echo "<script>window.location='../list_view.php?&ListID=$ListID&mssg=Updated Successfully';</script>";   
		
	
	}
  }?>
		 
			 

	  

 