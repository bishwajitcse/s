
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$PressKitID=$_GET['PressKitID'];

$PressKitListID=$_GET['PressKitListID'];







function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }?>
<!--start content-->
 

	
  <!--start Site Performance-->
 

 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD PRESSKITLIST </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="Action/presskitlist_add1.php" method="post" enctype="multipart/form-data"> 

  <!--start form-->
      <div class="all_form">    
	  <?php
	  if($PressKitListID!=""){
	   $sql = "SELECT * FROM `presskitlist` where PressKitListID=$PressKitListID";
	  $result = mysql_query($sql);
$row = mysql_fetch_array($result);}

?>
      
	                      <label for=""> Title <span></span></label>
						  <div class="controls">
                            <input name="Title" type="text" value="<? echo $row['Title'] ?>" id="cname" required>
                          </div>
						     <label for=""> Small Image <span></span></label>
						  <div class="controls">
				
						   <? 
						    $SmallimageHd=$row['SmallImage'];
						   
						   if ($PressKitListID!="") { echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70'/>"); } else {
						   
						   echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70' style='display:none;'/>");}
						   ?>
                            <input name="SmallImage" type="file" value="" id="file">
                          </div>
						
						
						
						 <label for=""> Description <span></span></label>
						  <div class="controls">
                   
							<textarea name="Description" cols="50"><? echo $row['Description'] ?></textarea>
                          </div>
						  
						  
						  
						  
						  
						      <label for=""> Download File <span></span></label>
						  <div class="controls">
				
						   <? 
						    $DownloadLinkHd=$row['DownloadLink'];
							$SizeHd=$row['Size'];
						   $FileTypeHd=$row['FileType'];
						   if ($PressKitListID!="") { echo (" <img src=Upload/".$row[DownloadLink]." width='100' height='70'/>"); } else {
						   
						   echo (" <img src=Upload/".$row[DownloadLink]." width='100' height='70' style='display:none;'/>");}
						   ?>
                            <input name="DownloadLink" type="file" value="" id="file">
                          </div>
						
						  
						  
						  
						  
						  
						  
						  
						  
						  
						   <label for="">  <span></span></label>
						  <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
						  <input type="hidden" name="SmallimageHd" Value="<? echo $SmallimageHd ?>" />
							  <input type="hidden" name="PressKitID" Value="<? echo $PressKitID ?>" />
							 <input type="hidden" name="PressKitListID" Value="<? echo $PressKitListID ?>" />
							  <input type="hidden" name="DownloadLinkHd" Value="<? echo $DownloadLinkHd ?>" />
							   <input type="hidden" name="SizeHd" Value="<? echo $SizeHd ?>" />
							    <input type="hidden" name="FileTypeHd" Value="<? echo $FileTypeHd ?>" />	
                          </div>
						  
						  
						  
			</div>	
			</form>		
    <!--end form--> 
 
 
  </div>
  <!--Home end--> 
 




<!--end content-->
 <div style="clear:both"></div>

  <!--Tree Menu Div end--> 



<?php require "Include/footer.php";?>