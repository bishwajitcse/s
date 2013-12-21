
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$MenuID=$_GET['MenuID'];
$Title=$_GET['Title'];
$CID=$_GET['CID'];

?>
<!--start content-->
<div class="Tree_menu">
   <!--Add Tree Menu Div start--> 

 <form name="" action="add_new_tree_menu1.php" method="post" enctype="multipart/form-data"> 
 



 Add Parent Menu/Submenu:     <input type="text" name="Title" value="">
       <select id="mymenu" name="MenuID">
<option value="0" selected="selected">Select Menu</option>
      
                   <?php 
				   

$sql = "SELECT * FROM menu where CID=$CID";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {
         
?> 

<option value="<? echo $row['MenuID'];?>"><?php  echo $row['Title'];?></option>
      <?  }?></select>
			
				
                 </select>&nbsp;<font size="2"> <?php echo "<font color=red>$_GET[a]</font>";?></font></td>
                    </select>                                                                                                    
  <input type="hidden" name="CID" Value="<? echo $CID ?>" />
    
<input type="submit" name="Submit" Value="Submit" class="submit" />
 
            </form> 



 
  </div>
  <!--Tree Menu Div end--> 



<?php require "Include/footer.php";?>