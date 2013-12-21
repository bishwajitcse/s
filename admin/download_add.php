
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$downloadID=$_GET['DownloadID'];




function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }?>
<!--start content-->
 

	
  <!--start Site Performance-->
 

 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD DOWNLOAD </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="Action/download_dbadd.php" method="post" enctype="multipart/form-data">

  <!--start form-->
      <div class="all_form">    
	  <?php
	  if($downloadID!=""){

	    $sql = "SELECT * FROM `Downloads` where DownloadId=$downloadID";
	    $result = mysql_query($sql);
        $row = mysql_fetch_array($result);}

?>

	                      <label for="">Title <span></span></label>
						  <div class="controls">
                            <input name="ntitle" type="text" value="<? echo $row['Title'] ?>" id="iTitle" required>
                          </div>

						  <label for=""> Total Bulilding Area <span></span></label>

						  <div class="controls">
                            <input name="nArea" type="text" value="<? echo $row['Area'] ?>" id="iArea" required>
                          </div>
						  
						   <label for=""> No. of Floors <span></span></label>
						  <div class="controls">
                            <input name="nFloor" type="text" value="<? echo $row['Floor'] ?>" id="iFloor" required>
                          </div>

                            <label for=""> Status <span></span></label>
                            <div class="controls">

                            <select id="" name="nStatus"  required>

                             <option value="0">Select Status</option>

                                <?

                                if (isset($downloadID)){
                                    $sqllink = "SELECT * FROM Downloads where DownloadID=$downloadID";
                                    $resultlink = mysql_query($sqllink);
                                    $rowlink = mysql_fetch_array($resultlink);
                                    $select = "";
                                    $select = $rowlink['Status'];

                                ?>
                                    <option value="Ready for leasing" <? echo section_select("Ready for leasing", $rowlink['Status']); ?>>Ready for leasing</option>
                                     <option value="Pendding" <? echo section_select("Pendding", $rowlink['Status']); ?>>Pendding</option>
                                <?
                                }else{ ?>
                                    <option value="Ready for leasing">Ready for leasing</option>
                                    <option value="Pendding">Pendding</option>

                                    

                  <?	}  ?>

              </select>
          </div>



					    <label for=""> Download <span></span></label>
						 <div class="controls">
                             <input name="nDownload" type="file" value="" id="file">

                        </div>


						 <label for="">  <span></span></label>
						 <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="ntxtdownload">

							<input type="hidden" name="DownloadId" Value="<? echo $downloadID ?>" />

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