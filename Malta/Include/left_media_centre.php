

<?php require "Include/db.php";
$mssg=$_GET['mssg'];
$MenuID=$_GET['MenuID'];
require "validation.php";

/*$ImageGalleryID=$_GET['ImageGalleryID'];
	$sql = mysql_query("SELECT * FROM menu INNER JOIN Menu Menu2 ON Menu.Parent_id = Menu2.Parent_id WHERE Menu.MenuID=" . $MenuID . "") or die(mysql_error());
while($row = mysql_fetch_array($sql)){


  $parent_id= $row['Parent_id']; echo $parent_id; }*/
?>

    <div class="col-20">
      <aside>
        <ul class="aside-menu">
          
		  
	  <?php	


    $resultSubmenu = mysql_query("SELECT * FROM menu INNER JOIN Menu Menu2 ON Menu.Parent_id = Menu2.Parent_id WHERE Menu.MenuID=" . $MenuID . " ORDER BY Menu.SortIndex ASC") or die(mysql_error());
    if(mysql_num_rows($resultSubmenu) >= 1){
       ?><? while($rowSub = mysql_fetch_array($resultSubmenu)){
	   
	    $Template=$rowSub['Template'];

		 
		 if($rowSub['Template']!='Gallery'){
           ?><li>  <a href="<? echo $rowSub['Template']; ?>.php?MenuID=<? echo $rowSub['MenuID']; ?>"><? echo $rowSub['Title']; ?></a>  </li> <? } else {
		   
		  ?> <li>  <a href="<? echo $rowSub['Template']; ?>.php?MenuID=<? echo $rowSub['MenuID']; ?>" class="active"><? echo $rowSub['Title']; ?></a> 
		  
		    <ul>
           <?  $sql_list = mysql_query("SELECT imagegallery.* FROM menulink INNER JOIN imagegallery ON MenuLink.LinkID = imagegallery.ImageGalleryID WHERE  LinkWith = 'imagegallery' AND MenuID='$MenuID'") or die(mysql_error());
			 while($row_list = mysql_fetch_array($sql_list)){ 
			 
			 	$ImageGalleryID=$row_list['ImageGalleryID'];
			
		
			   ?> <li> <a href="Gallery.php?ImageGalleryID=<? echo $ImageGalleryID; ?>&MenuID=<? echo $MenuID; ?>" class="active"><?  echo $row_list['Title'] ?></a></li><? }
			?>
            </ul>
		  
		   </li> 
		   
		   
		  <? }  }  }?><? /*?>	   
		 /*  $sql_list = mysql_query("SELECT * from imagegallery") or die(mysql_error());
			 while($row_list = mysql_fetch_array($sql_list)){ 
			
		
			   ?> <li> <a href="javascript:;" class="active"><?  echo $row_list['Title'] ?></a></li><? }
			*/
		?>
		
 
	
          
        </ul>
      </aside>

      <!-- SideBox -->
      <div class="side-box">

        <!-- Press Kit -->
        <h2>Press Kit</h2>
        <div class="press-kit">
          <ul>
            <li>
              <span>SmartCity Corporate Profile and Fact Sheet</span>
              <a href="" class="download" title="Download"><img src="../ui/media/dist/icons/download-icon.png" />1.90 MB</a>
            </li>
            <li>
              <span>SmartCity Logos</span>
              <a class="download" title="Download" href=""><img src="../ui/media/dist/icons/download-icon.png" />3.53 MB</a>
            </li>
          </ul>
        </div>
        <!-- Press Kit -->

        <!-- Newsletter -->
        <h2>Newsletter Registration</h2>
        <div class="newsletter">
		 <? if ($mssg!=""){  echo '<div class=submission_mssg style="color:#8b0f04;">' .$mssg. '</div>' ; }?>
          <label>Email</label>
          <div>
		  
		    <form name="" class="cmxform" id="commentForm"  action="Include/newsletter_add.php" method="post" enctype="multipart/form-data"> 
		  
            <input class="col-12 tf" type="text" type="Email"  name="Email" id="cEmail" required/>
            <input class="col-7 btn" type="submit" name="Submit" value="Submit" />
				<input type="hidden" name="MenuID" Value="<? echo $MenuID ?>" /><? ?>
				
				<input type="hidden" name="Template" Value="<?  echo $rowSub['Template'] ?>" />
				
			</form>
          </div>
        </div>
        <!-- Newsletter -->

      </div>
      <!-- SideBox -->