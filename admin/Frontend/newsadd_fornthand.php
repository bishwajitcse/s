
<?php require "../Include/front_header.php";
require "../Include/tree_menu_header.php";
$NewsID=$_GET['NewsID'];
$flagpop=$_GET['flagpop'];
$menuId=$_GET['MenuId'];
$mssg=$_GET['mssg'];

function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }

?>

<!--start content-->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

	
  <!--start Site Performance-->

<!---------------------developed by bishwajit----------------------->
<style>
    /* consider "display: none/block" instead of visibility: hidden/visible
   if you don't want the hidden divs to occupy space */

    .helpText {
        visibility: hidden;
        display: none;
    }
    .helpTextShow {
        visibility: visible;
        display:inline;
    }

</style>

<script language="javascript">
    function optionCheck() {

        var i, len, optionVal, helpDiv,
            selectOptions = document.getElementById("options");

        // loop through the options in case there
        // are multiple selected values
        for (i = 0, len = selectOptions.options.length; i < len; i++) {

            // get the selected option value
            optionVal = selectOptions.options[i].value;

            // find the corresponding help div
            helpDiv = document.getElementById("showhide");

            // move on if we didn't find one
            if (!helpDiv) { continue; }

            // set CSS classes to show/hide help div
            if (selectOptions.options[i].selected) {
                helpDiv.className = "helpText helpTextShow";
            } else {
                helpDiv.className = "helpText";
            }
        }
    }


</script>
<!------------------------------------------------------------------->
 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD  </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="../Action/news_add1.php?flagpop=1" method="post" enctype="multipart/form-data">

  <!--start form-->
      <div class="all_form">    

<? if ($mssg!=""){  echo '<div class=submission_mssg>' .$mssg. '</div>' ; }?>   
  <label for="">City:<span></span></label>
	<?php 


      if($NewsID!=""){
	   $sql = "SELECT * FROM `news` where NewsID=$NewsID";
	  $result = mysql_query($sql);
$row = mysql_fetch_array($result);
}?>

      

    <div class="controls">  
         <select id="" name="CID"  required>
	                    <option value="0">Select City</option> 





 <?
           if (isset($NewsID)){

    
$sqllink = "SELECT * FROM news where NewsID=$NewsID";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["CID"];
     ?>
          
	 <option value="1" <? echo section_select("1", $rowlink["CID"]); ?>>SmartCity</option>
	  <option value="2" <? echo section_select("2", $rowlink["CID"]); ?>>SmartCity Malta</option>
	   <option value="3" <? echo section_select("3", $rowlink["CID"]); ?>>SmartCity Kochi</option>
	      
<? }else{ ?>
 <option value="1">SmartCity</option>
          <option value="2">SmartCity Malta</option>
          <option value="3">SmartCity Kochi</option>

<?	}  ?>








        </select></div>
      
	                      <label for=""> Title <span></span></label>
						  <div class="controls">
                            <input name="Title" type="text" value="<? echo $row['Title'] ?>" id="cname" required/>
                          </div>
						   <label for=""> Small  Details <span></span></label>
						  <div class="controls">
                   
							<textarea name="SmallDetails" cols="50"><? echo $row['SmallDetails'] ?></textarea>
                          </div>
						  
						  
						  
						  
						  
						  	   <label for="">   Details <span></span></label>
						  <div class="controls" style="width:670px;">
                   
							<textarea name="BigDetails"><? echo $row['BigDetails'] ?></textarea>
                          </div>
						  
				        <script type="text/javascript">
                        CKEDITOR.replace( 'BigDetails' );
                        </script>
						  
						  
						  
						     <label for=""> Small Image(240x180 Pixels) <span></span></label>
						  <div class="controls">
				
						   <? 
						  
						   
						   if ($NewsID!="") { echo (" <img src=../Upload/".$row[SmallImage]." width='100' height='70'/>"); } else {
						   
						   echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70' style='display:none;'/>");}
						   ?>
                            <input name="SmallImage" type="file" value="" id="file"/>
                          </div>
						  
						  
						  
						  
						  
						  
						    <label for=""> Big Image (448x336 Pixels) <span></span></label>
						  <div class="controls">
				
						   <? 
						    $BigimageHd=$row['BigImage'];
							$SmallimageHd=$row['SmallImage'];
							?>
						    <? 
						  
						   
						   if ($NewsID!="") { echo (" <img src=../Upload/".$row[BigImage]."  width='150' height='100'/>"); } else {
						   
						   echo (" <img src=Upload/".$row[SmallImage]." width='150' height='100' style='display:none;'/>");}
						   ?>
						  
                            <input name="BigImage" type="file" value="" id="file"/>
                          </div>
						  
						  
						  
						  
						  
						   				  
						    <label for="">Type:<span></span></label>
	
    <div class="controls">  
         <select id="options" name="Type" onchange="optionCheck();">
	                    <option value="0">Select Type</option> 
						
   
 <?
           if (isset($NewsID)){

    
$sqllink = "SELECT * FROM news where NewsID=$NewsID";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["Type"];
     ?>
          
	 <option value="News" <? echo section_select("News", $rowlink["Type"]); ?>>News</option>
	  <option value="Events" <? echo section_select("Events", $rowlink["Type"]); ?>>Events</option>
	
	      
<? }else{ ?>

<option value="News">News</option>
<option value="Events">Events</option>



<?	}  ?>





   </select></div>
					
						  

        <div id="showhide" class="helpText">
		        <label for=""> Events Date <span></span></label>
		        <div class="controls">
	                <input name="abc" type="text" id="datepicker" value="<? echo $row['EventsDate'] ?>"/>
			    </div>
			    <label for=""> Events Time <span></span></label>
				<div class="controls">
                    <input name="EventsTime" type="text" value="<? echo $row['EventsTime'] ?>" id="txtUser"/>
                </div>
						
			    <label for=""> Duration <span></span></label>
			    <div class="controls">
                      <input name="Duration" type="text" value="<? echo $row['Duration'] ?>" id="txtUser"/>
                </div>
						  
						  
	     </div>

          <!------------------------------------------------------------------------>


						  	     <label for=""> Upload Pdf <span></span></label>
						  <div class="controls">
				
						   <? 
						  $DownloadLink=$row['DownloadLink'];
						   
						   if ($NewsID!="") { echo (" <img src=Upload/".$row[DownloadLink]." width='100' height='70'/>"); } else {
						   
						   echo (" <img src=Upload/".$row[DownloadLink]." width='100' height='70' style='display:none;'/>");}
						   ?>
                            <input name="DownloadLink" type="file" value="" id="file"/>
                          </div>
						  
						  
						  
						  
						  
						  
						  <label for=""> Status <span></span></label>
						  <div class="controls">
						  <?php  $chk=$row['Status'];
	                   if ($chk==1 && $NewsID!="")  { ?> 
	               <input type="checkbox" id="" checked="checked" name="Status"  value="<?php  echo $row['Status'];?>"> 
	                 <? } else {
	                      ?>
                            <input name="Status" type="checkbox" value="1" id="txtUser"> <? }?>
                          </div>
						  
						   <label for="">  <span></span></label>
						  <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
							  <input type="hidden" name="NewsID" Value="<? echo $NewsID ?>" />
							    <input type="hidden" name="MenuId" Value="<? echo $MenuId ?>" />
							  	 <input type="hidden" name="DownloadLinkHd" Value="<? echo $DownloadLinkHd ?>" />
							   <input type="hidden" name="SmallimageHd" Value="<? echo $SmallimageHd ?>" />
								<input type="hidden" name="BigimageHd" Value="<? echo $BigimageHd ?>" />
                          </div>
						  
						  
						  
			</div>	
			</form>		
    <!--end form--> 
 
 
  </div>
  <!--Home end--> 
 




<!--end content-->
 <div style="clear:both"></div>

  <!--Tree Menu Div end--> 


