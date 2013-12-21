
<?php require "Include/header.php";
require "Include/tree_menu_header.php";

$ParentID=$_GET['ParentID'];
//$Title=$_GET['Title'];

$CID=$_GET['CID'];


function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }
?>
<!--start content-->

   <!--Add Tree Menu Div start--> 

   <div class="site_performance_forall">
  <div class="site_performance_tree">HOME  >  <span class="site_text"> ADD MENU </span>      <div class="add_new"><a href="landing_page.php"><img width="" height="" alt="" src="assets/image/back.png"></a></div>
  <div class="clear"></div></div>
  <!--Add menu form start--> 


 <!--start form-->
      <div class="all_form">    


<div class="error_messg"><?php echo $_GET['mssg'];?></div>
 <form name="" class="cmxform" id="commentForm" action="Action/add_new_tree_menu1.php" method="post" enctype="multipart/form-data"> 
<?php $sql = "SELECT * FROM `menu` where MenuID=$ParentID";
$result = mysql_query($sql);

 
$row = mysql_fetch_array($result);

         $pId= $row['Parent_id'];

?> 

  
	
  
 
                          <label for="">   Add Submenu: <span></span></label>
						  <div class="controls">
                            <input type="text" id="cname" name="Title" value="" required>
                          </div>
  

                            <label for="">   Add Parent Menu: <span></span></label>
                  <div class="controls">
           <select id="mymenu" name="MenuID">
	     <?
	 
	   ?>
 <option value="0">Select Menu</option>
      
              <? 
				  

$sql1 = "SELECT * FROM `menu` where CID=$CID";

$result1 = mysql_query($sql1);

while ($row1 = mysql_fetch_array($result1)) {
    if ($ParentID == $row1['MenuID']){
?> 
<option value="<?php echo $row1['MenuID'];?>" selected="selected"><?php  echo $row1['Title'];?></option>

<?
} else{
?>
<option value="<?php echo $row1['MenuID'];?>" disabled="disabled"><?php  echo $row1['Title'];?></option>
      <?php }
	   }?></select>

	 </div>
	 
	        
  

	
	
	
	
	   <label for=""> Template <span></span></label>
						  <div class="controls">
                           <select id="cname" name="Template"  required>
	                    <option value="0">Select Template</option> 
						
						
     <option value="Home">Home</option> 
	   <option value="Index"> Malta Home</option> 
	      <option value="Index"> Kochi Home</option> 
	<option value="Html">Html</option> 
	<option value="HtmlList">Html List</option> 
	<option value="Gallery">Gallery</option> 
	<option value="List">List</option> 
		<option value="PressRelease">Press Release</option> 
		<option value="Newsletters">Newsletters</option> 
		<option value="Press-Kit">Press Kit</option> 
	<option value="Contact">Contact</option> 
	<option value="Business-spaces">Business Spaces</option> 
		  
				   </select>
                          </div>
						  
						  
						  
						  
						  
						  
	
	
	 
 <label for=""> URL: <span></span></label>
	<div class="controls">
     <input type="text" id="" name="URL" value=""></td>
   </div>
  



   <label for=""> Placement <span></span></label>
						  <div class="controls">
                           <select id="cname" name="Placement"  required>
	                    <option value="0">Select Placement</option> 
						
						
						
	<option value="Top">Top</option> 
	<option value="Bottom">Bottom</option> 


		  
				   </select>
                          </div>
						  
						  






<?php /*?>
 <label for="">  Placement:<span></span></label>
	<div class="controls">
   <select id="" name="Placement">                      
<option value="<?php  echo $row['Placement'];?>">  <?php  echo $row['Placement'];?></option>
<option value="Top">Top</option>
<option value="Bottom">Bottom</option>

</select>
   </div>
   <?php */?>
   
   
   
   
   
	
	 
   <label for="">   Sort Index:<span></span></label>
	<div class="controls">
   <input type="text" id="" name="SortIndex" value=""> 
  
	  </div>
		
   <label for="">  Status <span></span></label>
	<div class="controls">

	<input type="checkbox" id="" checked="checked" name="Status"  value="1"> 

  
		  </div>
	
  
   


			                                                                                                 
 <input type="hidden" name="CID" Value="<? echo $CID ?>" />
  <input type="hidden" name="ParentID" Value="<? echo $ParentID ?>" />
     <input type="hidden" name="pId" Value="<? echo $pId ?>" />
<input type="submit" name="Submit" Value="Submit" class="submit" />

 </form> 




  <!--Add menu form end--> 
</div></div>

 <div class="clear"></div>

  <!--Tree Menu Div end--> 



<?php require "Include/footer.php";?>