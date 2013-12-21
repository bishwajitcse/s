
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$AddressID=$_GET['AddressID'];


?>

<!--start content-->


	
  <!--start Site Performance-->
 

 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text">  ADD ADDRESS </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="Action/address_add1.php" method="post" enctype="multipart/form-data"> 

  <!--start form-->
      <div class="all_form">    
	  <?php 
	  	   if($AddressID!=""){
	  $sql = "SELECT * FROM `address` where AddressID=$AddressID";
	  $result = mysql_query($sql);
$row = mysql_fetch_array($result);}
?>
      
	                      <label for=""> Title <span></span></label>
						  <div class="controls">
                            <input name="Title" type="text" value="<? echo $row['Title'] ?>" id="cname" required>
                          </div>
						  
						  
						   <label for=""> Country <span></span></label>
						  <div class="controls">
                            <input name="Country" type="text" value="<? echo $row['Country'] ?>" id="cname" required>
                          </div>
						  
						    <label for=""> State <span></span></label>
						  <div class="controls">
                            <input name="State" type="text" value="<? echo $row['State'] ?>" id="cname" required>
                          </div>
						    <label for=""> Postcode <span></span></label>
						  <div class="controls">
                            <input name="Postcode" type="text" value="<? echo $row['Postcode'] ?>">
                          </div>
						  
						  
						  	 
						  
						  
						  
						  <label for=""> Addressline1 <span></span></label>
						  <div class="controls">
                   
							<textarea name="Addressline1" cols="50"><? echo $row['Addressline1'] ?></textarea>
                          </div>
						  
						  
						  	  <label for=""> Addressline2 <span></span></label>
						  <div class="controls">
                   
							<textarea name="Addressline2" cols="50"><? echo $row['Addressline2'] ?></textarea>
                          </div>
						  
					
						  
						   <label for="">  <span></span></label>
						  <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
							  <input type="hidden" name="AddressID" Value="<? echo $AddressID ?>" />
						
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