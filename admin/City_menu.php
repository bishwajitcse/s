

<?php require "Include/header.php";
require "Include/tree_menu_header.php";
require "Include/validation.php";
$CID=$_GET['CID'];

?>
<style>
	li{
		list-style:none;
	}
.tree_gray a{
color:#7c7c7c !important;
font-size:16px;
text-transform:capitalize !important;}
</style>

<script language="javascript">
function show(subCategory, path){
	var thesub;
	var theimage;
	var imageid;
	var testingdiv;
	
	thesub = document.getElementById(subCategory);
	
	imageid = "img_"+subCategory;
	theimage = document.getElementById(imageid);
	
	testingdiv = document.getElementById("testing");
	
	if(thesub.style.display == 'block'){
		//collapse...
		thesub.style.display = 'none';
		theimage.src = path+'Assets/image/treeicons/plus.png';
		
		/*
		//testing...
		testingdiv.style.display = 'block';
		testingdiv.innerHTML = path+'common/parts_manuals/open.gif';
		*/

	}else{
		//expand/display...
		thesub.style.display = 'block';
		theimage.src =path+'Assets/image/treeicons/minus.png';
		
		/*
		//testing...
		testingdiv.style.display = 'block';
		testingdiv.innerHTML = path+'common/parts_manuals/up.gif';
		*/
	}
	
}
</script>

<script language="javascript" type="text/javascript">
	function nokids(){
		var kidnot;
		kidnot = new Array();
		
		<?php
			for($i=0; $i<count($no_children); $i++){
				print("kidnot.push(\"".$no_children[$i]."\");\n");
			}
		?>
		
		for(i in kidnot){
			
			var theid;
			theid = kidnot[i];
			
			//document.getElementById("testing").innerHTML += theid+", ";
			document.getElementById(kidnot[i]).style.color = "green";
			/*
			var nodelings = document.getElementById(kidnot[i]).childNodes;
			for(var i=0; i<nodelings.length; i++){
				alert(nodelings[i]);
			}
			*/
		}
	}
</script>

</head>

<!--start content-->
 
  <div class="site_performance_forall">
  <div class="site_performance_tree"><span class="site_text">HOME  </span>      <div class="add_new"><a href="add_tree_menu.php?CID=<?php echo $CID ?>"><img width="" height="" alt="" src="assets/image/add-menu.jpg"></a> <a href="landing_page.php"><img width="" height="" alt="" src="assets/image/back.png"></a></div>
  <div class="clear"></div></div>
  
   <!--Tree Menu Div start--> 
<div class="treeview_format">
 <!--Content start-->
 <?php 
 //#########################################################################
$children = 0;
$no_children = array();

// $parent is the parent of the children we want to see
// $level is increased when we go deeper into the tree, used to display a nice indented tree
function display_children($parent, $level) {
	global $children;
	global $no_children;
$CID=$_GET['CID'];

   // retrieve all children of $parent
  $sql = sprintf("SELECT Title, MenuID
                        FROM menu 
                        WHERE CID=".$CID." AND parent_id = %d",
                        $parent);
						
						
      $result = mysql_query($sql);

	//if this is a sub category nest the list...
       if($level > 0)
            echo "<ul id='$parent' class='tree_menu_ul' style='display:none;'>\n";

   $list_id='';
   // display each child
   while ($row = mysql_fetch_array($result)) {
   
   		$children++;
   		$list_id = 'list_'.$children;
		
		
       //display each child
	   echo '<li id="'.$list_id.'" class="parentli">';
	   echo '<a href="#" onClick="show('.$row['MenuID'].', \''.$HTTP_PATH.'\')">';
       echo '<img src="'.$HTTP_PATH.'Assets/image/treeicons/plus.png" title="expand" border="0" id="img_'.$row['MenuID'].'">';
       echo '</a>&nbsp;&nbsp;';
	   ?>
	   <?php echo $row['Title'] ?>
	   <span class="tree_gray">(<a href="menu_link.php?CID=<?php echo $CID ?>&MenuLinkID=<?php echo $row['MenuID'] ?>">open-</a>
	   <a href="add_tree_menu.php?MID=<?php echo $row['MenuID'] ?>&Title=<?php echo $row['Title'] ?>&CID=<?php echo $CID ?>">edit-</a>
	   <a href="add_sub_menu.php?Title=<?php echo $row['Title'] ?>&CID=<?php echo $CID ?>&ParentID=<?php echo $row['MenuID'] ?>">Add sub</a>)</span><?php //." <span style='color:red;'>".$list_id."</span>";
	   echo '</li>';

       // call this function again to display this child's children
       display_children($row['MenuID'], $level+1);
   }
   
  
   
   //if this is a sub category nest the list...
       if($level > 0)
            echo "</ul>\n";

		$no_children[] =  'list_'.$children;
		
		//if the category has at least one product in it allow us to expand and see that product...
		if($child_product)
			array_pop($no_children);

}
//#########################################################################
//#########################################################################


echo "<ul style='list-style:none;'>";
display_children('',0);
echo "</ul>";

/*
echo "<pre style='color: red'> ";
print_r($no_children);
echo "</pre>";
*/

?>
<!--<div style="display:block; border: 1px solid red;" id="testing"></div>-->

 
 
  </div>  </div>
  <!--Tree Menu Div end--> 










<?php require "Include/footer.php";?>