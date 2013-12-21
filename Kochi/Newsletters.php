
<?php require "Include/Header.php";




$MenuID=$_GET['MenuID'];


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
            <li><a href="../newsletters.html" class="active">e-Connect Newsletter</a></li>
            <!-- <li><a href="officespace.html">Office Space</a></li>
            <li><a href="javascript:;" class="active">SCM01</a></li> -->
          </ul>
          <p><img src="ui/media/dist/icons/social.jpg" /></p>
        </div>

        <div class="title"><h2>Newsletters</h2></div>
        <div class="content">

          <div class="row media-center-thumbs newsletter">
            <ul>
			
			<? $sql_news = mysql_query("SELECT imagegallery.* FROM menulink INNER JOIN imagegallery ON MenuLink.LinkID = imagegallery.ImageGalleryID WHERE  LinkWith = 'imagegallery' AND MenuID='$MenuID'") or die(mysql_error());
		


        $row_id = 0;
		
		
		while($row_news = mysql_fetch_array($sql_news)){  
		
			$ImageGalleryID=$row_news['ImageGalleryID'];
			
			$i=0;
			 $sql_list = mysql_query("SELECT * from imagelist WHERE ImageGalleryID ='$ImageGalleryID'") or die(mysql_error());
			while($row_list = mysql_fetch_array($sql_list)){  
		
		if($margin_flag==$i) { $margin_flag=$i + 3; ?>
		
		
              <li class="col-17">
                <a href="" class="img"><img src="Admin/Upload/<? echo $row_list['SmallImage']?>" />
				
				</a>
              </li><? } else { ?>
              
			    <li class="col-17 offset-1">
                <a href="" class="img"><img src="Admin/Upload/<? echo $row_list['SmallImage']?>" />
				
				</a>
              </li>
			  <? } ?>
			  <? $i=$i+1; } ?>
			  
			  
			  
            </ul>
          </div>
              <?	 } ?>

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

<?php require "Include/Footer.php";
?>