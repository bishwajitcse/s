
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
            <li><a href="../pressrelease-list.html" class="active">Press Releases</a></li>
            <!-- <li><a href="officespace.html">Office Space</a></li>
            <li><a href="javascript:;" class="active">SCM01</a></li> -->
          </ul>
          <p><img src="ui/media/dist/icons/social.jpg" /></p>
        </div>

        <div class="title"><h2>Press Releases</h2></div>
        <div class="content">
          <div class="row media-center-thumbs pressrelease">
            
			
		<?	$sql_news = mysql_query("SELECT list.* FROM menulink INNER JOIN list ON MenuLink.LinkID = list.ListID WHERE  LinkWith = 'list' AND MenuID='$MenuID'") or die(mysql_error());
		
   $row_id = 0;
		
         while($row_news = mysql_fetch_array($sql_news)){  
			
		    $sql_list = mysql_query("SELECT * from listdata") or die(mysql_error());
			while($row_list = mysql_fetch_array($sql_list)){ 
			
			
			$ListDataID=$row_list['ListDataID'];
			 ?>
		
			
			
			
         <div class="row">
              <div class="col-76 item">
                <div class="col-20 img">
                  <a href="pressrelease-detail.php?ListDataID=<? echo $ListDataID?>&MenuID=<? echo $MenuID ?>"><?   echo (" <img src=../Admin/Upload/".$row_list[SmallImage]." width='' height=''/>"); ?></a>
                </div>
                <div class="col-55 offset-1">
                  <h3><a href="pressrelease-detail.php?ListDataID=<? echo $ListDataID?>&MenuID=<? echo $MenuID ?>" class="text"><?  echo $row_list['Title'] ?></a></h3>
                  <h6>Posted on  <?  echo date("d M Y", strtotime($row_list['LastUpdated']));?></h6>
                  <p><?  echo $row_list['SmallDetails'] ?></p>
                  <a href="pressrelease-detail.php?ListDataID=<? echo $ListDataID?>&MenuID=<? echo $MenuID ?>" class="col-7 normal-button">Read more..</a>
                </div>
              </div>
            </div>
            
		  <? }   }?>
			
			
			
   
          

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


<?php require "Include/Footer.php";
?>