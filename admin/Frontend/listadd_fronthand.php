
<?php require "Include/front_header.php";
require "Include/tree_menu_header.php";

$ListID=$_GET['ListID'];
$CID=$_GET['CID'];
$menuid=$_GET['menuId'];

?>

<!--start content-->


	
  <!--start Site Performance-->
 

 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD  </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="Action/list_add1.php?CID=<?php echo $CID?> &flagid=1&menuId=<?php echo $menuid?> " method="post" enctype="multipart/form-data">

  <!--start form-->
      <div class="all_form">    
	  <?php
	   if($ListID!=""){
	   $sql = "SELECT * FROM `list` where ListID=$ListID";
	  $result = mysql_query($sql);
$row = mysql_fetch_array($result);}

?>
      
	                      <label for=""> Title <span></span></label>
						  <div class="controls">
                            <input name="Title" type="text" value="<? echo $row['Title'] ?>" id="cname" required>
                          </div>
						   <label for=""> Small  Details <span></span></label>
						  <div class="controls">
                   
							<textarea name="SmallDetails" cols="50"><? echo $row['SmallDetails'] ?></textarea>
                          </div>
						  	   <label for=""> Big  Details <span></span></label>
						  <div class="controls" style="width:670px;">
                   
							<textarea name="BigDetails"><? echo $row['BigDetails'] ?></textarea>
                          </div>
						  
				        <script type="text/javascript">
                        CKEDITOR.replace( 'BigDetails' );
                        </script>
						  
						  
						  
						  
						  <div class="controls">
				
						   <? 
						  
						   
						   if ($ListID!="") { echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70'/>"); } else {
						   
						   echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70' style='display:none;'/>");}
						   ?>
                          
                          </div>
						  
						  
						  
						  
						  
						  
						    <label for=""> Big Image <span></span></label>
						  <div class="controls">
				
						   <? 
						    $BigimageHd=$row['BigImage'];
							$SmallimageHd=$row['SmallImage'];
							?>
						   
						  
                            <input name="BigImage" type="file" value="" id="file">
                          </div>
						  
						  
						  
						  
						  
						  
						  <label for=""> Image Alt Text <span></span></label>
						  <div class="controls">
                            <input name="ImgAltText" type="text" value="<? echo $row['ImgAltText'] ?>" id="txtUser">
                          </div>
						  
						
						    <label for=""> Sort Index <span></span></label>
						  <div class="controls">
                            <input name="SortIndex" type="text" value="<? echo $row['SortIndex'] ?>" id="txtUser">
                          </div>
						  
						  
						    <label for=""> Featured <span></span></label>
						  <div class="controls">
						  <?php  $chk=$row['Featured'];
	                   if ($chk==1 && $ListID!="")  { ?> 
	               <input type="checkbox" id="" checked="checked" name="Featured"  value="<?php  echo $row['Featured'];?>"> 
	                 <? } else {
	                      ?>
                            <input name="Featured" type="checkbox" value="1" id="txtUser"> <? }?>
                          </div>
						  
						  
						  
						  
						  
						  
						  
						  
						  <label for=""> Status <span></span></label>
						  <div class="controls">
						  <?php  $chk=$row['Status'];
	                   if ($chk==1 && $ListID!="")  { ?> 
	               <input type="checkbox" id="" checked="checked" name="Status"  value="<?php  echo $row['Status'];?>"> 
	                 <? } else {
	                      ?>
                            <input name="Status" type="checkbox" value="1" id="txtUser"> <? }?>
                          </div>
						  
						   <label for="">  <span></span></label>
						  <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
							  <input type="hidden" name="ListID" Value="<? echo $ListID ?>" />
							  	
							   <input type="hidden" name="SmallimageHd" Value="<? echo $SmallimageHd ?>" />
								<input type="hidden" name="BigimageHd" Value="<? echo $BigimageHd ?>" />
                          </div>
						  
						  
						  
			</div>	
			</form>		
    <!--end form--> 
 
 
  </div>
  <!--Home end--> 
 




<!--end content-->
 <div style="clear:both"></div>

  <!--Tree Menu Div end--> 
