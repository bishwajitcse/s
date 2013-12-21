
<?php require "Include/header.php";
require "Include/tree_menu_header.php";
$UserID=$_GET['UserID'];









function section_select($option, $db_select){
	 if ($db_select == $option)
	  return "selected='selected'";
	 else
	  return "";
 }?>
<!--start content-->
 

	
  <!--start Site Performance-->
 

 
  <div class="site_performance_full">
  <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD USER </span>   <div class="add_new"></div>
  <div class="clear"></div></div>
  
 <!--end Site Performance-->
 <form name="" class="cmxform" id="commentForm" action="Action/user_add1.php" method="post" enctype="multipart/form-data"> 

  <!--start form-->
      <div class="all_form">    
	  <?php
	  if($UserID!=""){
	   $sql = "SELECT * FROM `user` where UserID=$UserID";
	  $result = mysql_query($sql);
$row = mysql_fetch_array($result);}

?>
      
	                      <label for=""> User Name <span></span></label>
						  <div class="controls">
                            <input name="UserName" type="text" value="<? echo $row['UserName'] ?>" id="cname" required>
                          </div>
						   <label for=""> Password <span></span></label>
						  <div class="controls">
                            <input name="Password" type="text" value="<? echo $row['Password'] ?>" id="cname" required>
                          </div>
						  
						   <label for=""> Email <span></span></label>
						  <div class="controls">
                            <input name="Email" type="text" value="<? echo $row['Email'] ?>" id="cname" required>
                          </div>
						  
						  
						   <label for=""> User Role <span></span></label>
						  <div class="controls">
                           <select id="cname" name="UserRole"  required>
	                    <option value="0">Select User</option> 
						
						
						       <?
           if (isset($UserID)){

    
$sqllink = "SELECT * FROM user where UserID=$UserID";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["UserRole"];
     ?>
          
	 <option value="Super Admin" <? echo section_select("Super Admin", $rowlink["UserRole"]); ?>>Super Admin</option>
	  <option value="Smartcity" <? echo section_select("Smartcity", $rowlink["UserRole"]); ?>>Smartcity</option>
	   <option value="Smartcity Malta" <? echo section_select("User1", $rowlink["UserRole"]); ?>>Smartcity Malta</option>
	      <option value="Smartcity Kochi" <? echo section_select("User2", $rowlink["UserRole"]); ?>>Smartcity Kochi</option>
<? }else{ ?>
	<option value="Super Admin">Super Admin</option> 
	<option value="Smartcity">Smartcity</option> 
	<option value="Smartcity Malta">Smartcity Malta</option> 
	<option value="Smartcity Kochi">Smartcity Kochi</option> 
<?	}  ?>
				  
				   </select>
                          </div>
						  
						  
						  
						  
						  
						  
							   <label for=""> City Access <span></span></label>
						  <div class="controls">
                           <select id="cname" name="CityAccess"  required>
	                    <option value="0">Select City Access</option> 
						
						
						       <?
           if (isset($UserID)){

    
$sqllink = "SELECT * FROM user where UserID=$UserID";        
$resultlink = mysql_query($sqllink);
$rowlink = mysql_fetch_array($resultlink);
$select = "";
$select = $rowlink["CityAccess"];
     ?>
          
	 <option value="0" <? echo section_select("0", $rowlink["UserRole"]); ?>>All</option>
	  <option value="1" <? echo section_select("1", $rowlink["UserRole"]); ?>>Smartcity</option>
	   <option value="2" <? echo section_select("2", $rowlink["UserRole"]); ?>>Smartcity Malta</option>
	      <option value="3" <? echo section_select("3", $rowlink["UserRole"]); ?>>Smartcity Kochi</option>
<? }else{ ?>
	<option value="0">All</option> 
	<option value="1">Smartcity</option> 
	<option value="2">Smartcity Malta</option> 
	<option value="3">Smartcity Kochi</option> 
<?	}  ?>  
				   </select>
                          </div>  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						
						  
						  <label for=""> Status <span></span></label>
						  <div class="controls">
						  <?php  $chk=$row['Status'];
	                   if ($chk==1 && $UserID!="")  { ?> 
	               <input type="checkbox" id="" checked="checked" name="Status"  value="<?php  echo $row['Status'];?>"> 
	                 <? } else {
	                      ?>
                            <input name="Status" type="checkbox" value="1" id="txtUser"> <? }?>
                          </div>
						  
						   <label for="">  <span></span></label>
						  <div class="controls">
                            <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
							  <input type="hidden" name="UserID" Value="<? echo $UserID ?>" />
							  	  <input type="hidden" name="UserID" Value="<? echo $UserID ?>" />
							
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