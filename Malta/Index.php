

<?php require "Include/Header.php";


if(isset($_GET['MenuID'])){
$MenuID=$_GET['MenuID'];
}
else{
$sql_menuid = mysql_query("SELECT * from menu where Title='Home'") or die(mysql_error());
$row_menuid = mysql_fetch_array($sql_menuid);
$MenuID=$row_menuid['MenuID'];
 echo "<script>window.location='Index.php?MenuID=$MenuID';</script>";   

}





 ?>
<!-- Banner -->
<section class="row">
  <div class="container">

    <div class="homeslider flexslider">
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
        </li>

		
			
			<?
				
			 } ?>

     
		
		
		
      </ul>
    </div>

  </div>
</section>
<!-- Banner -->

<!-- Two Boxes -->
<section class="row home-boxes">
  <div class="container">


<?
		$sql_html = mysql_query("SELECT html.* FROM menulink INNER JOIN html ON MenuLink.LinkID = html.HtmlID WHERE MenuID=" . $MenuID . " and LinkWith = 'html' order by SortIndex ") or die(mysql_error());
		$overview = "";
        $x = 0;
		while($row_html = mysql_fetch_array($sql_html)){  
			$x++;
			if ($x == 4){
		$overview .= "<div class='title'><h2>" . $row_html["Title"] . "</h2></div>";
        $overview .= "<div class='content'><h4>". $row_html["SmallDetails"] ."</h4>" . $row_html["BigDetails"] . 
          "<div class='row'><a href='javascript:;' class='normal-button col-12'>Read More</a></div></div>";
			
			}else{
				
			?>
	    <!-- Box -->
    <div class="col-32">
      <div class="box box-1"> 
         <div class="img"><?   echo (" <img src=../Admin/Upload/".$row_html[BigImage]." width='' height=''/>"); ?></div>
        <div class="title">
          <h2><?  echo $row_html['Title'] ?></h2>
          <p><? echo $row_html["SmallDetails"];?></p>
          <a href="malta.html">Enter</a>
        </div>
      </div>
    </div>
    <!-- Box -->
		
			
			<?
				}
			 } ?>





  </div>
</section>
<!-- Two Boxes -->


<!-- Three Boxes -->
<!--
<section class="row home-boxes">
  <div class="container">

    <div class="col-32">
      <div class="box box-1">
        <div class="img"><img src="ui/media/dist/images/thumb-1.jpg" /></div>
        <div class="title">
          <h2>Business Opportunities</h2>
          <p>Opening up a world of opportunities and connections, SmartCity is a global network of self-sustainable.</p>
          <a href="javascript:;">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-32">
      <div class="box box-2">
        <div class="img"><img src="ui/media/dist/images/thumb-2.jpg" /></div>
        <div class="title">
          <h2>Products & Services</h2>
          <p>Opening up a world of opportunities and connections, SmartCity is a global network of self-sustainable.</p>
          <a href="javascript:;">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-32">
      <div class="box box-3 last">
        <div class="img"><img src="ui/media/dist/images/thumb-3.jpg" /></div>
        <div class="title">
          <h2>Environment</h2>
          <p>Opening up a world of opportunities and connections, SmartCity is a global network of self-sustainable.</p>
          <a href="javascript:;">Explore</a>
        </div>
      </div>
    </div>

  </div>
</section> -->
<!-- Three Boxes -->

<section class="row">
  <div class="container page-content">

    <div class="col-64">
      <div class="box">
        <? echo $overview; ?>
      </div>
    </div>

    <div class="col-32">
      <div class="news-box box">
        <div class="title"><h2>News & Events</h2></div>
        <div class="content">
          <ul>
		  
		   <?
		$sql_news = mysql_query("SELECT news.* FROM menulink INNER JOIN news ON MenuLink.LinkID = news.NewsID WHERE  LinkWith = 'news'") or die(mysql_error());

        $row_id = 0;
		while($row_news = mysql_fetch_array($sql_news)){  
			
				
				
			?>
		
 <li>
              <span class="img">  <?   echo (" <img src=../Admin/Upload/".$row_news[SmallImage]." width='' height=''/>"); ?></span>
              <span class="text">
                <h2><? 
				if (strlen($row_news['Title']) >50){
               $str = substr($row_news['Title'], 0, 30) . '...';
                echo $str ;} else{
				echo $row_news['Title'];
				
				}
			
			
				 ?> </h2>
                <p><? 	if (strlen($row_news['SmallDetails']) >100){
               $str_small = substr($row_news['SmallDetails'], 0, 80) . '...';
              echo $str_small ;} else {
			 echo  $row_news['SmallDetails'];
			  
			  
			  }?></p>
                <a href="news_detail.php?NewsID=<? echo $row_news['NewsID']?>">Read more...</a>
              </span>
            </li>
		
			
			<?
				
			 } ?>

		  
		  
           
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require "Include/Footer.php";
?>