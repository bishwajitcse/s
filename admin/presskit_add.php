
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$PressKitID=$_GET['PressKitID'];









function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }?>
<!--start content-->
 

	
  <!--start Site Performance-->
 

 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD PRESSKIT </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="Action/presskit_add1.php" method="post" enctype="multipart/form-data"> 

  <!--start form-->
      <div class="all_form">    
	  <?php
	  if($PressKitID!=""){
	   $sql = "SELECT * FROM `presskit` where PressKitID=$PressKitID";
	  $result = mysql_query($sql);
$row = mysql_fetch_array($result);}

?>
      
	                      <label for=""> Title <span></span></label>
						  <div class="controls">
                            <input name="Title" type="text" value="<? echo $row['Title'] ?>" id="cname" required>
                          </div>
						   <label for=""> Sort Index <span></span></label>
						  <div class="controls">
                            <input name="SortIndex" type="text" value="<? echo $row['SortIndex'] ?>" id="cname" required>
                          </div>
						  
						  
						   <label for="">  <span></span></label>
						  <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
						
							  	  <input type="hidden" name="PressKitID" Value="<? echo $PressKitID ?>" />
							
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