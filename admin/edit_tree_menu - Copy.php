
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$MenuID=$_GET['MenuID'];
$Title=$_GET['Title'];
$CID=$_GET['CID'];

?>
<!--start content-->
<div class="Tree_menu">
<div class="edit_tree_menu">
   <!--Add Tree Menu Div start--> 
<div class="error_messg"><?php echo $_GET['mssg'];?></div>
 <form name="" action="edit_tree_menu1.php" method="post" enctype="multipart/form-data"> 
 



 Title:     <input type="text" name="Title" value="<? echo $Title ?>">
                                                                                
  <input type="hidden" name="CID" Value="<? echo $CID ?>" />
    <input type="hidden" name="MenuID" Value="<? echo $MenuID ?>" />
<input type="submit" name="Submit" Value="Submit" class="submit" />
 
            </form> 



 
  </div>  </div>
  <!--Tree Menu Div end--> 



<?php require "Include/footer.php";?>