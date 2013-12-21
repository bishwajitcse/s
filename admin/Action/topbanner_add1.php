

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	  $SectionName=$_POST['SectionName'];
	    $ImgAltText=$_POST['ImgAltText'];
	  $SortIndex=$_POST['SortIndex'];
	  $Status=$_POST['Status'];
     $Link=$_POST['Link'];
	      $flagpop=$_GET['flagpop'];
		  $BigImage=$_POST['BigimageHd'];
		    $SmallImage=$_POST['SmallimageHd'];
		   $SmallDetails=$_POST['SmallDetails'];
     $BannerID=$_POST['BannerID'];

 $menuId=$_POST['menuId'];




		

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
		
if($BannerID==""){
      $q=mysql_query("INSERT INTO `banner` (`SectionName`,`Title`,`ImgAltText`,`SmallImage`,`BigImage`,`SmallDetails`,`Link`,`SortIndex`,`Status`,`LastUpdated`) VALUES ('$SectionName','$Title','$ImgAltText','$resize_image','$BigImage','$SmallDetails','$Link','$SortIndex','$Status',CURDATE())")or die (mysql_error ());

            echo "<script>window.location='../top_bannerlist.php?&mssg=Inserted Successfully';</script>";   
			
	 }	

else{
	
	 $q=mysql_query("UPDATE `banner` SET `BannerID`='$BannerID',`Title`='$Title',`SectionName`='$SectionName',`SmallImage`='$resize_image',`BigImage`='$BigImage',`ImgAltText`='$ImgAltText',`Link`='$Link',`SmallDetails`='$SmallDetails',`SortIndex`='$SortIndex' ,`Status`='$Status',`LastUpdated`=CURDATE() WHERE `BannerID`='$BannerID'")or die (mysql_error ());

              if($flagpop!=1){
             echo "<script>window.location='../top_bannerlist.php?&mssg=Updated Successfully';</script>";
        }
        else{
            echo "<script>window.location='../Frontend/topbanner_frontadd.php?menuId=$menuId&BannerID=$BannerID&mssg=Updated Successfully';</script>";
        }
		
	
	}
  }?>
		 
			 

	  

 