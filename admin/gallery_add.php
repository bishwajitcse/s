
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$ImageGalleryID=$_GET['ImageGalleryID'];




function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }
?>
<!--start content-->


	
  <!--start Site Performance-->
 

 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD GALLERY </span>   <div class="add_new"><a href="gallery_add.php"><img width="" height="" alt="" src="assets/image/add_new.png"></a></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="Action/gallery_add1.php" method="post" enctype="multipart/form-data"> 

  <!--start form-->
      <div class="all_form">    
	  <?php
	      if($ImageGalleryID!=""){
	   $sql = "SELECT * FROM `imagegallery` where ImageGalleryID=$ImageGalleryID";
	  $result = mysql_query($sql);
$row = mysql_fetch_array($result);
}
?>
      
	                      <label for=""> Title <span></span></label>
						  <div class="controls">
                            <input name="Title" type="text" value="<? echo $row['Title'] ?>" id="cname" required>
                          </div>
						  
						  
						  
						  
						  		  
						   <label for=""> Category <span></span></label>
						  <div class="controls">
                           <select id="" name="Category"  required>
	                    <option value="0">Select User</option> 
						
						
						       <?
           if (isset($ImageGalleryID)){

    
$sqllink = "SELECT * FROM imagegallery where ImageGalleryID=$ImageGalleryID";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["Category"];
     ?>
          
	 <option value="Gallery" <? echo section_select("Gallery", $rowlink["Category"]); ?>>Gallery</option>
	  <option value="Newsletter" <? echo section_select("Newsletter", $rowlink["Category"]); ?>>Newsletter</option>
	   <option value="Press Kit" <? echo section_select("Press Kit", $rowlink["Category"]); ?>>Press Kit</option>
	
<? }else{ ?>

	<option value="Gallery">Gallery</option> 
	<option value="Newsletter">Newsletter</option> 
	<option value="Press Kit">Press Kit</option> 
<?	}  ?>
				  
				   </select>
                          </div>
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						   <label for=""> Small Image <span></span></label>
						  <div class="controls">
				
						   <? 
						    $SmallimageHd=$row['SmallImage'];
						   
						   if ($ImageGalleryID!="") { echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70'/>"); } else {
						   
						   echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70' style='display:none;'/>");}
						   ?>
                            <input name="SmallImage" type="file" value="" id="file">
                          </div>
						  
						  <label for=""> Image Alt Text <span></span></label>
						  <div class="controls">
                            <input name="ImgAltText" type="text" value="<? echo $row['ImgAltText'] ?>" id="txtUser">
                          </div>
						  
						
						    <label for=""> Sort Index <span></span></label>
						  <div class="controls">
                            <input name="SortIndex" type="text" value="<? echo $row['SortIndex'] ?>" id="txtUser">
                          </div>
						  
						  <label for=""> Status <span></span></label>
						  <div class="controls">
						  <?php  $chk=$row['Status'];
	                   if ($chk=1 && $ImageGalleryID!="")  { ?> 
	               <input type="checkbox" id="" checked="checked" name="Status"  value="<?php  echo $row['Status'];?>"> 
	                 <? } else {
	                      ?>
                            <input name="Status" type="checkbox" value="1" id="txtUser"> <? }?>
                          </div>
						  
						   <label for="">  <span></span></label>
						  <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
							  <input type="hidden" name="ImageGalleryID" Value="<? echo $ImageGalleryID ?>" />
							    <input type="hidden" name="SmallimageHd" Value="<? echo $SmallimageHd ?>" />
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