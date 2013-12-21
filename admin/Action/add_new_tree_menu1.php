

<?php
       
  include "../Include/db.php";
           
  

       
if(isset($_POST['Submit']))  {
      $MenuID=$_POST['MenuID'];
	
	   $MID=$_POST['MID'];

	  

	   $CID=$_POST['CID'];

     $Title=$_POST['Title'];
	 $Template=$_POST['Template'];  
	  $URL=$_POST['URL']; 
	  $Placement=$_POST['Placement'];   
      $SortIndex=$_POST['SortIndex'];  
	   $Status=$_POST['Status'];
//	echo $start_date;
	
if($MID=="")
{
      $q=mysql_query("INSERT INTO `menu` (`Title`,`CID`,`Parent_id`,`Template`,`URL`,`Placement`,`SortIndex`,`Status`) VALUES (    '$Title','$CID','$MenuID','$Template','$URL','$Placement','$SortIndex','$Status')")or die (mysql_error ());
$MenuLinkID=mysql_insert_id();
echo $MenuLinkID;
  echo "<script>window.location='../menu_link.php?&CID=$CID&MenuLinkID=$MenuLinkID';</script>";   
		
}
else{
	
	 $q=mysql_query("UPDATE `menu` SET `Title`='$Title',`CID`='$CID',`Template`='$Template',`Parent_id`='$MenuID',`Title`='$Title',`Title`='$Title',`URL`='$URL',`Placement`='$Placement',`SortIndex`='$SortIndex',`Status`='$Status' WHERE `MenuID`='$MID'")or die (mysql_error ());

             echo "<script>window.location='../City_menu.php?&CID=$CID&MenuID=$MenuID';</script>";   
		
	
	}
	
		 
			 
      }




?>
 