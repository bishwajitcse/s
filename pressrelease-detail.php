
<?php require "Include/MainHeader.php";

$MenuID=$_GET['MenuID'];
$ListDataID=$_GET['ListDataID'];

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
            <li><a href="pressrelease-detail.html" class="active">Media Center</a></li>
            <!-- <li><a href="officespace.html">Office Space</a></li>
            <li><a href="javascript:;" class="active">SCM01</a></li> -->
          </ul>
          <p><img src="ui/media/dist/icons/social.jpg" /></p>
        </div>


  <?   $sql_list = mysql_query("SELECT * from listdata WHERE ListDataID = '$ListDataID'") or die(mysql_error());
			while($row_list = mysql_fetch_array($sql_list)){ 
			
			
			$ListDataID=$row_list['ListDataID'];
			 ?>
		













        <div class="title"><h2>SmartCity Malta Award to Top-Performing IT Students</h2></div>
        <div class="content">
          <h6>Posted on  <?  echo date("d M Y", strtotime($row_list['LastUpdated']));?></h6>
          <p>
            <img class="content-img" src="Admin/Upload/<? echo $row_list[BigImage]?>" height="336" width="448" align="left" />
           <p><?  echo $row_list['BigDetails'] ?></p>
<? } ?>
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

<?php require "Include/MainFooter.php";
?>