


<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$MID=$_GET['MID'];
$MenuID=$_GET['MenuID'];
$MenuLinkID=$_GET['MenuLinkID'];
if($_GET['MenuLinkID']==$MenuLinkID){
$MenuLinkID=$_GET['MenuLinkID'];}
else{
$MenuLinkID=$MenuID;
}
$LinkID=$_GET['LinkID'];
if($LinkWith!=""){
$LinkWith=$_GET['LinkWith'];}

//$Title=$_GET['Title'];
$mssg=$_GET['mssg'];
echo $Title;
$CID=$_GET['CID'];

if($_GET['Task']=="delete")
{
 $q=mysql_query("delete from `menulink` WHERE `MID`='$MID'")or die (mysql_error ());

$message="deleted succesfully";         
}

function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }


?>

<!--start content-->
 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >   ADD MENU > <span class="site_text"> LINK WITH </span>   <div class="add_new"><a href="City_menu.php?CID=<? echo $CID ?>"><img width="" height="" alt="" src="assets/image/back.png"></a></div>
  <div class="clear"></div></div>
  
   <!--Add Tree Menu Div start--> 

 
  <!--Add menu form start--> 
<div class="add_new_tree_menu">
	<? if ($message!=""){  echo '<div class=submission_mssg>' .$message. '</div>' ; }?>
	<? if ($mssg!=""){  echo '<div class=submission_mssg>' .$mssg. '</div>' ; }?>
	
	
	

 <form name="" class="cmxform" id="commentForm" action="Action/menu_link1.php" method="post" enctype="multipart/form-data"> 
<?php $sql = "SELECT * FROM `menu` where CID=$CID";
$result = mysql_query($sql);

 


         $pId= $row['Parent_id'];

?> 





  
 
   <label for="">    Menu:  <span></span></label>
 
         <div class="controls">
		 
		 <select id="mymenu" name="MenuID">

 <option value="0" >Select Menu</option>
 
<? while($row = mysql_fetch_array($result)){;?>

<option value="<?php echo $row['MenuID'];?>" <? if ($row['MenuID']==$MenuLinkID) {  ?>selected=selected  <? } ?>><?php  echo $row['Title'];?></option><? }?>
</select>











	  </div>
<?php ?>	<script>
$(document).ready(function(){
$("#LinkWith").change(function(){
        
            $.get("onchange_menu_content.php?lw="+$("#LinkWith").val(), function(t){
                //alert(call);
				   $("#Linkcontent").html(t);
            });
        });
		});
</script><?php ?>











  <label for="">
 Link With:<span></span></label>
	
    <div class="controls"> 
	
<?php /*?>	 <select id="LinkWith" name="LinkWith">
	 <option value="0" >Select LinkWith</option>
	       <?

    
$sqllink = "SELECT * FROM menulink";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink)?>

<option value="<?php echo $rowlink['LinkWith'];?>" <? if ($rowlink['LinkWith']==$LinkWith) {  ?>selected=selected  <? } ?>><?php  echo $rowlink['LinkWith'];?></option>

<option value="html">Html</option>
<option value="newsletter">Newsletter</option>
<option value="contactinfo">Contactinfo</option>
<option value="imagegallery">Imagegallery</option>
</select>
<?php */?>

   <select id="LinkWith" name="LinkWith"  required>
	                    <option value="0">Select LinkWith</option> 
						
						
						       <?
           if (isset($LinkWith)){

    
$sqllink = "SELECT * FROM menulink where LinkWith=$LinkWith";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["LinkWith"];
     ?>
          
	 <option value="html" <? echo section_select("html", $rowlink["LinkWith"]); ?>>Html</option>
	  <option value="newsletter" <? echo section_select("newsletter", $rowlink["LinkWith"]); ?>>Newsletter</option>
	   <option value="contactinfo" <? echo section_select("contactinfo", $rowlink["LinkWith"]); ?>>Contactinfo</option>
	      <option value="imagegallery" <? echo section_select("imagegallery", $rowlink["LinkWith"]); ?>>Imagegallery</option>
		    <option value="banner" <? echo section_select("banner", $rowlink["LinkWith"]); ?>>Top Banner</option>
		   <option value="list" <? echo section_select("list", $rowlink["LinkWith"]); ?>>List</option>
		    <option value="presskit" <? echo section_select("news", $rowlink["presskit"]); ?>>Press Kit</option>
			
<? }else{ ?>

<option value="banner">Top Banner</option>
<option value="html">Html</option>
<option value="newsletter">Newsletter</option>
<option value="contactinfo">Contactinfo</option>
<option value="imagegallery">Imagegallery</option>
<option value="list">List</option>
<option value="news">News & Events</option>
<option value="presskit">Press Kit</option>
<?	}  ?>
		  
				   </select>

   </div>
 
    <label for=""> Link Content: <span></span></label>
	
  <div class="controls"> 
  
  <select id="Linkcontent" name="LinkID">
  	 <option value="0" >Select Content</option>
	                   


   </select>
   </div>
	
	

			                                                                                                 
 <input type="hidden" name="CID" Value="<? echo $CID ?>" />
 
    <input type="hidden" name="MID" Value="<? echo $MID ?>" />
<input type="submit" name="Submit" Value="Submit" class="submit" style="margin-left:150px;" />

 </form> 


<div class="clear"></div>

  <!--Add menu form end--> 
  
  
  
    <!--Menu Link Table list start--> 
	<div class="menulink_table">
	<? echo $message ;?>
<table cellspacing="0" border="1" cellpadding="4" style="border-style:None;border-collapse:collapse; width:417px; text-align:center;" id="ctl00_ContentPlaceHolder1_GridView1" rules="all" class="gallery_table_list" style="margin-bottom:20px; width:417px;">
		<tbody><tr class="tbleheader">
			<th scope="col">Menu Name</th>
			<th scope="col"> Link With  </th>
		     <th scope="col"> Link Content  </th>
          <th scope="col">  </th>
		   <th scope="col"> </th>
		   </tr>
		
		
		 <?

    
$sql = "SELECT * FROM menulink Inner join menu on menulink.MenuID=menu.MenuID Where menu.CID=$CID";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
$MID=$row['MID'];
$MenuID=$row['MenuID'];
$LinkID=$row['LinkID'];

?>
		
		     <tr class="">
			<td class="tdrow"><?php echo $row['Title'];?></td>
			<td><?php  echo $row['LinkWith'];?></td>
			<td><?php  echo $row['LinkID'];?></td>
				<td><a href="menu_link.php?MID=<? echo $MID ?>&CID=<? echo $CID ?>&MenuID=<? echo $MenuID ?>&LinkID=<? echo $LinkID ?>&LinkWith=<?php  echo $row['LinkWith'];?>" style="text-align:center;"><img src="Assets/image/edit.png" /></a></td>
					<td><a href="menu_link.php?MID=<? echo $MID ?>&CID=<? echo $CID ?>&Task=delete" onClick='return confirmSubmit()'><img src="Assets/image/delete.png" /></a></td>
		        </tr>
	

<? } ?>
	</tbody></table>
	
  
   <!--Menu Link Table list end--> 
  
  
  
  
  
  <div class="margintop" style="margin-top:10px; margin-bottom:20px;"></div>

 </div> </div>
 <div class="clear"></div>
  </div>
  <!--Tree Menu Div end--> 



<?php require "Include/footer.php";?>