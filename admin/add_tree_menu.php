
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$MID=$_GET['MID'];
$SubID=$_GET['SubID'];
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
<?php 
if($MID!=""){
$sql = "SELECT * FROM `menu` where MenuID=$MID";
$result = mysql_query($sql);

 
$row = mysql_fetch_array($result);}

         $pId= $row['Parent_id'];

?> 

  
	
  
 
                          <label for="">   Add Parent Menu/Submenu: <span></span></label>
						  <div class="controls">
                            <input type="text" id="cname" name="Title" value="<?php  echo $row['Title'];?>" required>
                          </div>
  

                            <label for="">   Add Parent Menu: <span></span></label>
                  <div class="controls">
                     <select id="mymenu" name="MenuID">
	     <?
	   	if(isset($pId) || $pId != 0){
	   ?>
 <option value="0">Select Menu</option>
      
                   <?php 
				   }else{ ?>
				    <option value="0" selected="selected">Select Menu</option>
				   <?
				   }
				  

$sql1 = "SELECT * FROM `menu` where CID=$CID";
if (isset($_REQUEST['MID'])){
	$sql1 .=  " and MenuID!=$MID";
}
$result1 = mysql_query($sql1);

while ($row1 = mysql_fetch_array($result1)) {
    if (isset($pId) && $pId == $row1['MenuID']){
?> 
<option value="<?php echo $row1['MenuID'];?>" selected="selected"><?php  echo $row1['Title'];?></option>

<?
} else{
?>
<option value="<?php echo $row1['MenuID'];?>"><?php  echo $row1['Title'];?></option>
      <?php }
	   }?></select>

	 </div>
	 
	        
  

	
	
	
	
	   <label for=""> Template <span></span></label>
						  <div class="controls">
                           <select id="cname" name="Template"  required>
	                    <option value="0">Select Template</option> 
						
						
						       <?
           if (isset($MID)){

    
$sqllink = "SELECT * FROM menu where MenuID=$MID and CID=$CID";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["Template"];
     ?>
        <option value="Home" <? echo section_select("Home", $rowlink["Template"]); ?>>Home</option> 
		 <option value="Index" <? echo section_select("Index", $rowlink["Template"]); ?>> Malta Home</option>
		  <option value="Index" <? echo section_select("Index", $rowlink["Template"]); ?>> Kochi Home</option>         
	 <option value="Html" <? echo section_select("Html", $rowlink["Template"]); ?>>Html</option>
	 <option value="HtmlList" <? echo section_select("HtmlList", $rowlink["Template"]); ?>>Html List</option>
	  <option value="Gallery" <? echo section_select("Gallery", $rowlink["Template"]); ?>>Gallery</option>
	   <option value="List" <? echo section_select("List", $rowlink["Template"]); ?>>List</option>
	     <option value="PressRelease" <? echo section_select("PressRelease", $rowlink["Template"]); ?>>Press Release</option>
		  <option value="Newsletters" <? echo section_select("Newsletters", $rowlink["Template"]); ?>>Newsletters</option>
		  	  <option value="Press-Kit" <? echo section_select("Press-Kit", $rowlink["Template"]); ?>>Press Kit</option>
	      <option value="Contact" <? echo section_select("Contact", $rowlink["Template"]); ?>>Contact</option>
		   <option value="Business-spaces" <? echo section_select("Business-spaces", $rowlink["Template"]); ?>>Buesiness Spaces</option>
<? }else{ ?>
     <option value="Home">Home</option> 
	   <option value="Index"> Malta Home</option> 
	      <option value="Index"> Kochi Home</option> 
	<option value="Html">Html</option> 
	<option value="HtmlList">Html List</option> 
	<option value="Gallery">Gallery</option> 
	<option value="List">List</option> 
		<option value="PressRelease">Press Release</option> 
		<option value="Newsletters">Newsletters</option> 
	<option value="Contact">Contact</option> 
		<option value="Business-spaces">Buesiness-spaces</option> 
<?	}  ?>
		  
				   </select>
                          </div>
						  
						  
						  
						  
						  
						  
	
	
	 
 <label for=""> URL: <span></span></label>
	<div class="controls">
     <input type="text" id="" name="URL" value="<?php  echo $row['Title'];?>"></td>
   </div>
  



   <label for=""> Placement <span></span></label>
						  <div class="controls">
                           <select id="cname" name="Placement"  required>
	                    <option value="0">Select Placement</option> 
						
						
						       <?
           if (isset($MID)){

    
$sqllink = "SELECT * FROM menu where MenuID=$MID and CID=$CID";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["Placement"];
     ?>
          
	 <option value="Top" <? echo section_select("Top", $rowlink["Placement"]); ?>>Top</option>
	  <option value="Bottom" <? echo section_select("Bottom", $rowlink["Placement"]); ?>>Bottom</option>

<? }else{ ?>
	<option value="Top">Top</option> 
	<option value="Bottom">Bottom</option> 

<?	}  ?>
		  
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
   <input type="text" id="" name="SortIndex" value="<?php  echo $row['SortIndex'];?>"> 
  
	  </div>
		
   <label for="">  Status <span></span></label>
	<div class="controls"><?php  $chk=$row['Status'];
	if ($chk==1)  { ?> 
	<input type="checkbox" id="" checked="checked" name="Status"  value="<?php  echo $row['Status'];?>"> 
	<? } else {
	?>
	
  <input type="checkbox" id="" name="Status"  value="<?php  echo $row['Status'];?>">  <? }?>
  
		  </div>
	
  
   


			                                                                                                 
 <input type="hidden" name="CID" Value="<? echo $CID ?>" />
  <input type="hidden" name="MID" Value="<? echo $MID ?>" />
     <input type="hidden" name="pId" Value="<? echo $pId ?>" />
<input type="submit" name="Submit" Value="Submit" class="submit" />

 </form> 




  <!--Add menu form end--> 
</div></div>

 <div class="clear"></div>

  <!--Tree Menu Div end--> 



<?php require "Include/footer.php";?>