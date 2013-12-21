

<?php
       
  include "../Include/db.php";
       
  

       
if(isset($_POST['Submit']))  {
      $Title=$_POST['Title'];
	    $CID=$_POST['CID'];
		 $SmallDetails=$_POST['SmallDetails'];
		   $BigDetails=$_POST['BigDetails'];
	  $SortIndex=$_POST['SortIndex'];
	  $Status=$_POST['Status'];
 $menuId=$_POST['menuId'];
     $flagpop=$_GET['flagpop'];
	  
		  $BigImage=$_POST['BigimageHd'];
		    $SmallImage=$_POST['SmallimageHd'];
			   $Type=$_POST['Type'];
			   
			   	 $EventsDate=$_POST['abc'];
				
			
$arr = explode('/', $EventsDate);
$EventsDate = $arr[2].'-'.$arr[0].'-'.$arr[1];

				

				    $EventsTime=$_POST['EventsTime'];
					  $Duration=$_POST['Duration'];
					  $DownloadLink=$_POST['DownloadLinkHd'];
		
     $NewsID=$_POST['NewsID'];

	 




		

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
$max_file_size = 1024*800; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(100 =>200);


	if( $_FILES['SmallImage']['size'] < $max_file_size ){
		// get file extension
		$ext = strtolower(pathinfo($_FILES['SmallImage']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			/* resize image */
			foreach ($sizes as $w => $h) {
				$files[] = resize(80, 64);
			
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
  	
		 "Upload: " . $_FILES["DownloadLink"]["name"] . "<br />";
 if($_FILES["DownloadLink"]["name"]!=""){
 move_uploaded_file($_FILES["DownloadLink"]["tmp_name"], "../Upload/" . $_FILES["DownloadLink"]["name"]);
  $DownloadLink=$_FILES["DownloadLink"]["name"];}
 else{
 
 }
   if($_FILES["SmallImage"]["name"]!=""){
		
	$resize_image='80'.'x'.'64'.'_'.$_FILES['SmallImage']['name'];}
	else{
	 $resize_image=$_POST['SmallimageHd'];
	}


//	echo $start_date;
		
if($NewsID==""){
      $q=mysql_query("INSERT INTO `news` (`CID`,`Title`,`SmallImage`,`BigImage`,`SmallDetails`,`BigDetails`,`Type`,`Status`,`EventsDate`,`EventsTime`,`Duration`,`DownloadLink`,`DateofPost`) VALUES ('$CID','$Title','$resize_image','$BigImage','$SmallDetails','$BigDetails','$Type','$Status','$EventsDate','$EventsTime','$Duration','$DownloadLink',CURDATE())")or die (mysql_error ());
	

 echo "<script>window.location='../news_list.php?&NewsID=$NewsID&mssg=Inserted Successfully';</script>";   
	 }	

else{
	
	 $q=mysql_query("UPDATE `news` SET `NewsID`='$NewsID',`CID`='$CID',`Title`='$Title',`SmallImage`='$resize_image',`BigImage`='$BigImage',`SmallDetails`='$SmallDetails',`BigDetails`='$BigDetails',`Type`='$Type' ,`Status`='$Status',`EventsDate`='$EventsDate',`EventsTime`='$EventsTime',`Duration`='$Duration',`Duration`='$Duration',`DownloadLink`='$DownloadLink',`DateofPost`=CURDATE() WHERE `NewsID`='$NewsID'")or die (mysql_error ());

             
		   if($flagpop!=1){
       echo "<script>window.location='../news_list.php?&NewsID=$NewsID&mssg=Updated Successfully';</script>";   
        }
        else{
            echo "<script>window.location='../Frontend/newsadd_fornthand.php?menuId=$menuId&NewsID=$NewsID&mssg=Updated Successfully';</script>";
        }
	
	
	}
  }?>
		 
			 

	  

 