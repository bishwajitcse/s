
<?php require "Include/MainHeader.php";




if(isset($_GET['MenuID'])){
$MenuID=$_GET['MenuID'];
}

else{

$sql_menuid = mysql_query("SELECT * from menu where Title='Home'") or die(mysql_error());
$row_menuid = mysql_fetch_array($sql_menuid);
$MenuID=$row_menuid['MenuID'];
 echo "<script>window.location='home.php?MenuID=$MenuID';</script>";   

}
 ?>


<section class="row">
  <div class="container page-content">


<?php require "Include/left_media_centre.php";?>


    </div>


    <div class="col-76">
      <div class="box">

        <div class="breadcrumbs">
          <ul>
            <li><a href="javascript:;">Home</a></li>
            <li><a href="mediacenter.html">Media Centre</a></li>
            <li><a href="../malta-press-kit.html" class="active">Press Kit</a></li>
          </ul>
          <p><img src="ui/media/dist/icons/social.jpg" /></p>
        </div>

        <div class="title"><h2>Press Kit</h2></div>
        <div class="content">
		
		
      
          <div class="row media-center-thumbs">
            <ul>
             
			 
			 
			 
			 
			 
		   <?
		   
		   

			$sql_news = mysql_query("SELECT presskit.* FROM menulink INNER JOIN presskit ON MenuLink.LinkID = presskit.PressKitID WHERE  LinkWith = 'presskit' AND MenuID='$MenuID' order by PressKitID ASC") or die(mysql_error());
		


        $row_id = 0;
		
		
		while($row_news = mysql_fetch_array($sql_news)){  
		
			$PressKitID=$row_news['PressKitID'];
				
				
			?>

		 <h3><a href=""><?  echo $row_news['Title'] ?></a></h3>
          <div class="row media-center-thumbs">
            <ul>
			
			<?
			
			$i=0;
			
	
			 $sql_list = mysql_query("SELECT * from presskitlist WHERE  PressKitID = '$PressKitID'") or die(mysql_error());
			while($row_list = mysql_fetch_array($sql_list)){  
		
			
			
			?> <? if($margin_flag==$i) { $margin_flag=$i + 3; ?>
              <li class="col-23">
             
                <a href="gallery-detail.php?" class="img"><?   echo (" <img src=Admin/Upload/".$row_list[SmallImage]." width='' height=''/>"); ?></a>
				   <a href="" class="text"><?  echo $row_list['Title'] ?></a>
              </li> <? } else { ?>
			  
			  <li class="col-23 offset-1">
               
                <a href="pressrelease-detail.html" clss="img"><?   echo (" <img src=Admin/Upload/".$row_list[SmallImage]." width='' height=''/>"); ?></a>
				 <a href="" class="text"><?  echo $row_list['Title'] ?></a>
              </li> 
             
			  <? } ?>
			  <? $i=$i+1; } ?>
			  
			 
			 
			 
			 
			 
			 
			 
			 
            </ul>
          </div>
<? }?>


    
        


          <div class="row content-buttons">
            <div class="pull-right">
              <div>
                <a href="javascript:;" class="normal-button download">Downloads</a>
                <a href="javascript:;" class="normal-button-gray email">Email</a>
                <a href="javascript:;" class="normal-button-lgray print">Print</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require "Include/MainFooter.php";?>