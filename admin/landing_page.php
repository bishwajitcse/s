
<?php require "Include/header.php";

$CityAccess=$_SESSION['CityAccess'];



?>
<!--start content-->
<div class="content">
 <!--Content start-->
 

 <!--Deshboard start-->
 

  <div class="deshboard">


<div class="Citylink">
   <!--Box Menu Div start--> 
   <div class="box_menu">
  
<ul>


  <?php
  
  if($CityAccess=="0"){
  
   $query = mysql_query("SELECT * from city");
  }
  else {
  
   $query = mysql_query("SELECT * from city where CID=$CityAccess");}

  while ($row = mysql_fetch_array($query)) {

   $CID=$row['CID'];?>
	 <!--Menu  Start--> 	
    <li>

	<div class="mosaic-block cover3">
<div class="mosaic-overlay">  <a href=""><img alt="" src="assets/image/img1.png" width="" height=""></a></div>
<a href="City_menu.php?&CID=<?php echo $row['CID'];?>"class="mosaic-backdrop">
<div class="details">
<span class="box_menu_text"><?php echo $row['Name'];?></span>
<p>
<?php echo $row['SmallDetails'];?></p>
</div>
</a> </div>

 </li>
 <?php  }
  ?>
 
<!--Menu  end--> 	
  </ul>
  
   <div style="clear:both"></div> 
  </div>  
  <!--Box Menu Div end--> 
 
 
  </div>
  <!--Deshboard end--> 
   </div>

</div>
<!--end content-->

<?php require "Include/footer.php";?>