


<?php require "Include/header.php";
require "Include/tree_menu_header.php";

$ListID=$_GET['ListID'];
$ListDataID=$_GET['ListDataID'];
$mssg=$_GET['mssg'];
$message="";
if($_GET['Task']=="delete")
{
 $q=mysql_query("delete from `listdata` WHERE `ListDataID`='$ListDataID'")or die (mysql_error ());

 $message="Deleted Succesfully";      
}




?>

<!--start content-->

 <!--Left Section start-->
<!--start menubar-->
<div class="left_section">
<ul class="buttonmenu">
<li><a href="" class=" first"><img width="" height="" alt="" src="assets/image/top_banner.png"/>  LIST PRODUCT </a></li>
<li class="selected"><a href="" class="selected"> <img width="" height="" alt="" src="assets/image/gallery.png"/>  ALL LIST DATA </a></li>
<li><a href=""><img width="" height="" alt="" src="assets/image/video.png"/>  OTHERS </a></li>

</ul>
</div>
<!--end menubar-->

<!--Left Section End-->
   
   
   
    <!--Right Section start-->
	<div class="right_section">
  <!--start Site Performance-->
 

 
  <div class="site_performance_rest">
  <div class="site_performance_top"><span class="site_text">ALL </span> LIST DATA     <div class="add_new"><a href="list_data_add.php?&ListID=<? echo $ListID ?>"><img width="" height="" alt="" src="assets/image/add_new.png"></a></div>
  <div class="clear"></div></div>
  
    <!--table start-->
 <div class="gallery_table">
 
	<? if ($message!=""){  echo '<div class=submission_mssg>' .$message. '</div>' ; }?>
	<? if ($mssg!=""){  echo '<div class=submission_mssg>' .$mssg. '</div>' ; }?>
	
	
	
	
	
	
	
	
	
	
	
	 <? $sql_page = "SELECT COUNT(*) as cnt FROM `listdata` where ListID='$ListID'";
		 
      $result_page = mysql_query($sql_page) or die("this is tst".mysql_error()) ;
      $r = mysql_fetch_array($result_page);

      $numrows = $r[cnt];

      $rowsperpage =15;

      $totalpages = ceil($numrows / $rowsperpage);

      if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage']))

      {   // cast var as int
 $currentpage = (int) $_GET['currentpage'];
      }
      else
      {
   // default page num
      $currentpage = 1;
      }

    if ($currentpage > $totalpages)
    {
      $currentpage = $totalpages;
    } // end if// if current page is less than first page...
    if ($currentpage < 1)
    {   // set current page to first page
      $currentpage = 1;
    } // end if// the offset of the list, based on current page

    $offset = ($currentpage - 1) * $rowsperpage;

?>
 
	
	
	
	
	
	
	
	
	
	
	
<table cellspacing="0" border="0" cellpadding="4" width="100%" style="border-top:1px solid; border-bottom:1px solid; text-align:center" id="ctl00_ContentPlaceHolder1_GridView1" rules="all" class="gallery_table_list">
		<tbody><tr class="tbleheader">
			<th scope="col">ID</th>
			<th scope="col"> Title  </th>
		     <th scope="col"> Small Details  </th>
         <th scope="col"> Small Image  </th>
		   <th scope="col"> Sort Order </th>
		   
			 <th scope="col"></th>
			  <th scope="col"></th>
		   </tr>
		
		
		 <?

    $i=1;
$sql = "SELECT * FROM listdata where ListID='$ListID' order by ListDataID DESC LIMIT $offset ,$rowsperpage";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {




?>
		
		     <tr class="">
			 		<td class="tdrow"><? echo $i; ?></td>			
          <td class=""><?php echo $row['Title'];?></td>
		<td><?php  echo $row['SmallDetails'];?></td>
			<td><? echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70'>");?></td>
			

<td class=""><?php echo $row['SortIndex'];?></td>


				<td><a href="list_data_add.php?ListID=<? echo $ListID ?>&ListDataID=<? echo $row['ListDataID']?>" style="text-align:center;"><img src="Assets/image/edit.png" /></a></td>
					<td><a href="list_data_view.php?ListDataID=<? echo $row['ListDataID'] ?>&Task=delete" onClick='return confirmSubmit()'><img src="Assets/image/delete.png" /></a></td>
		     
  </tr>
<? $i=$i+1; } ?>
	</tbody></table>
	
                        
	  <div class="paging"><ul>
	<?
       $range = 5;// if not on page 1, don't show back links
       if ($currentpage > 1) {
        // show << link to go back to page 1
         echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=1&ListDataID=$ListDataID'>First</a></li>";
           // get previous page num
            $prevpage = $currentpage - 1;
             // show < link to go back to 1 page
              echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&ListDataID=$ListDataID'><<</a></li> ";
              }
              // end if // loop to show links to range of pages around current page

              for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++)

               {
               // if it's a valid page number...

               if (($x > 0) && ($x <= $totalpages && $totalpages!=1)) {

                // if we're on current page...
                if ($x == $currentpage) {

                // 'highlight' it but don't make a link

                echo "<li class=current>$x</li>";
                // if not current page...
                 } else {
                    // make it a link
                    echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x&ListDataID=$ListDataID'>$x</a></li>";
                        } // end else
                          } // end if
                           } // end for
                                     // if not on last page, show forward and last page links
                        if ($currentpage != $totalpages && $totalpages>1) {
                                          // get next page
                             $nextpage = $currentpage + 1;
                                             // echo forward link for next page
echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&ListDataID=$ListDataID'>>></a></li>";
                                                 // echo forward link for lastpage
         echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&ListDataID=$ListDataID'>Last</a></li>";}
                                                  // end if/****** end build pagination links ******/




  echo "</ul>" ;  ?>
  
  
  </div>
					
						
						
						
 </div>
   <!--table end-->
 </div>
  <!--end Site Performance-->

  <!--Right Section End-->

 
 
  </div>
  <!--Home end--> 
 




<!--end content-->
 <div style="clear:both"></div>




<?php require "Include/footer.php";?>