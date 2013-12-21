


<?php require "Include/header.php";
require "Include/tree_menu_header.php";

$ContactinfoID=$_GET['ContactinfoID'];
$mssg=$_GET['mssg'];
$message="";
if($_GET['Task']=="delete")
{
 $q=mysql_query("delete from `contactinfo` WHERE `ContactinfoID`='$ContactinfoID'")or die (mysql_error ());

 $message="Deleted Succesfully";      
}




?>

<!--start content-->


   
   
   
    <!--Right Section start-->

  <!--start Site Performance-->
 

 
  <div class="site_performance_forall">
  <div class="site_performance_top">HOME > <span class="site_text"> CONTACT LIST   </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
    <!--table start-->
 <div class="gallery_table">
 
	<? if ($message!=""){  echo '<div class=submission_mssg>' .$message. '</div>' ; }?>
	<? if ($mssg!=""){  echo '<div class=submission_mssg>' .$mssg. '</div>' ; }?>
	
	
	
	
	
	
	
	
	
	
	
	 <? $sql_page = "SELECT COUNT(*) as cnt FROM `Contactinfo`";
		 
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
			<th scope="col">City ID</th>
			<th scope="col"> First Name  </th>
		     <th scope="col"> LastName  </th>
			   <th scope="col"> Title  </th>
             <th scope="col"> Company  </th>
		   <th scope="col"> Enquiry </th>
		
			
			  <th scope="col"></th>
		   </tr>
		
		
		 <?

    $i=1;
$sql = "SELECT * FROM Contactinfo order by ContactinfoID DESC LIMIT $offset ,$rowsperpage";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {




?>
		
		     <tr class="">
			 		<td class="tdrow"><? echo $i; ?></td>			
          <td class=""><?php echo $row['CID'];?></td>
		  <td class=""><?php echo $row['FirstName'];?></td>
	
		<td><?php  echo $row['LastName'];?></td>
			<td><?php  echo $row['Title'];?></td>
			<td><?php  echo $row['Company'];?></td>
	  <td class=""><?php echo $row['Enquiry'];?></td>




				
					<td><a href="contactinfo_list.php?ContactinfoID=<? echo $row['ContactinfoID'] ?>&Task=delete" onClick='return confirmSubmit()'><img src="Assets/image/delete.png" /></a></td>
		     
  </tr>
<? $i=$i+1; } ?>
	</tbody></table>
	
                        
	  <div class="paging"><ul>
	<?
       $range = 5;// if not on page 1, don't show back links
       if ($currentpage > 1) {
        // show << link to go back to page 1
         echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=1&ContactinfoID=$ContactinfoID'>First</a></li>";
           // get previous page num
            $prevpage = $currentpage - 1;
             // show < link to go back to 1 page
              echo " <li><a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&ContactinfoID=$ContactinfoID'><<</a></li> ";
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
                    echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x&ContactinfoID=$ContactinfoID'>$x</a></li>";
                        } // end else
                          } // end if
                           } // end for
                                     // if not on last page, show forward and last page links
                        if ($currentpage != $totalpages && $totalpages>1) {
                                          // get next page
                             $nextpage = $currentpage + 1;
                                             // echo forward link for next page
echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&ContactinfoID=$ContactinfoID'>>></a></li>";
                                                 // echo forward link for lastpage
         echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&ContactinfoID=$ContactinfoID'>Last</a></li>";}
                                                  // end if/****** end build pagination links ******/




  echo "</ul>" ;  ?>
  
  
  </div>
					
						
						
						
 </div>
   <!--table end-->
 </div>
  <!--end Site Performance-->

  <!--Right Section End-->

 

  <!--Home end--> 
 




<!--end content-->
 <div style="clear:both"></div>




<?php require "Include/footer.php";?>