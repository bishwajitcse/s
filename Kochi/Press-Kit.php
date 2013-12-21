
<?php require "Include/Header.php";




if(isset($_GET['ImageGalleryID'])){
$ImageGalleryID1=$_GET['ImageGalleryID'];
}


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
		   
		   

			$sql_news = mysql_query("SELECT imagegallery.* FROM menulink INNER JOIN imagegallery ON MenuLink.LinkID = imagegallery.ImageGalleryID WHERE  LinkWith = 'imagegallery' AND MenuID='$MenuID'") or die(mysql_error());
		


        $row_id = 0;
		
		
		while($row_news = mysql_fetch_array($sql_news)){  
		
			$ImageGalleryID=$row_news['ImageGalleryID'];
				
				
			?>

		 <h3><a href=""><?  echo $row_news['Title'] ?></a></h3>
          <div class="row media-center-thumbs">
            <ul>
			
			<?
			
			$i=0;
			
	
			 $sql_list = mysql_query("SELECT * from imagelist WHERE  ImageGalleryID = '$ImageGalleryID'") or die(mysql_error());
			while($row_list = mysql_fetch_array($sql_list)){  
		
			
			
			?> <? if($margin_flag==$i) { $margin_flag=$i + 3; ?>
              <li class="col-23">
             
                <a href="gallery-detail.php?" class="img"><?   echo (" <img src=Admin/Upload/".$row_list[SmallImage]." width='276' height='144'/>"); ?></a>
				   <a href="" class="text"><?  echo $row_list['Title'] ?></a>
              </li> <? } else { ?>
			  
			  <li class="col-23 offset-1">
               
                <a href="pressrelease-detail.html" clss="img"><?   echo (" <img src=Admin/Upload/".$row_list[SmallImage]." width='276' height='144'/>"); ?></a>
				 <a href="" class="text"><?  echo $row_list['Title'] ?></a>
              </li> 
             
			  <? } ?>
			  <? $i=$i+1; } }?>
			  
			 
			 
			 
			 
			 
			 
			 
			 
            </ul>
          </div>



    
        


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

<?php require "Include/Footer.php";?>