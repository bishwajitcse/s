
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


<!-- Banner -->
<section class="row">
  <div class="container">

    <div class="innerslide flexslider">
      <ul class="slides">
	  
	  
	  
	   <?
		$sql = mysql_query("SELECT banner.* FROM menulink INNER JOIN banner ON MenuLink.LinkID = banner.BannerID WHERE  LinkWith = 'banner' and MenuID='$MenuID'") or die(mysql_error());

        $row_id = 0;
		while($row = mysql_fetch_array($sql)){  
			
				$row_id = $row['BannerID'];
				
			?>
			   <li>
        <?   echo (" <img src=../Admin/Upload/".$row[BigImage]." width='' height=''/>"); ?>
          <span class="banner-text">
            <span class="heading"><?  echo $row['Title'] ?></span>
            <span class="desc"><? echo $row["SmallDetails"];?></span>
          </span>
        </li><? }?>

	
	  
      
      </ul>
    </div>

  </div>
</section>
<!-- Banner -->



<section class="row">
  <div class="container page-content">

    <div class="col-20">
      <aside>
        <ul class="aside-menu">
         <?php require "Include/Bussiness-left-menu.php"; ?>
        </ul>

      </aside>
    </div>

    <div class="col-76">
      <div class="box">

        <div class="breadcrumbs">
          <ul>
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Business Spaces</a></li>
            <li><a href="javascript:;" class="active">Office Space</a></li>
          </ul>
          <p><img src="../ui/media/dist/icons/social.jpg" /></p>
        </div>



	
		<?	$sql_news = mysql_query("SELECT Html.* FROM menulink INNER JOIN Html ON MenuLink.LinkID = Html.HtmlID WHERE  LinkWith = 'Html' AND MenuID='$MenuID'") or die(mysql_error());
		
   $row_id = 0;
		
         while($row_news = mysql_fetch_array($sql_news)){  
			
	
			
		
			 ?>
		
        <div class="title"><h2>Office Space</h2></div>
        <div class="content">
          <p><img class="content-img" src="../ui/media/dist/images/office-space.jpg" align="left" />More than 103,000m2 of premium office spaces incorporate the highest international standards of commercial buildings. Set amidst breath-taking landscapes and inspired by traditional Maltese architecture, each office block harmoniously balances modernity in form and function.</p>

          <p>Nearly all offices boast sea views and an abundance of light amidst elegant interiors create the ideal work environment for all at SmartCity Malta.</p>

          <p>Companies also have the option of taking long leases on land parcels in order to develop built-to-suit facilities and infrastructure.</p>
		  
		  
		  <? } ?>

          <div class="row content-buttons">
            <div class="pull-right">
              <div>
                <!-- <a href="javascript:;" class="col-10 normal-button">Downloads</a> -->
                <a href="javascript:;" class="col-10 normal-button-gray">Email</a>
                <a href="javascript:;" class="col-10 normal-button-lgray">Print</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<?php require "Include/Footer.php";?>