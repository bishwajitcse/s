
<?php require "Include/Header.php";

$MenuID=$_GET['MenuID'];
$NewsID=$_GET['NewsID'];

 ?>


<section class="row">
  <div class="container page-content">


    <div class="col-20">
      <aside>


      </aside>


    </div>


    <div class="col-96">
      <div class="box">

        <div class="breadcrumbs">
          <ul>
            <li><a href="javascript:;">Home</a></li>
            <li><a href="mediacenter.html">News</a></li>
            <li><a href="pressrelease-detail.html" class="active">News Details</a></li>
            <!-- <li><a href="officespace.html">Office Space</a></li>
            <li><a href="javascript:;" class="active">SCM01</a></li> -->
          </ul>
          <p><img src="ui/media/dist/icons/social.jpg" /></p>
        </div>


  <?   $sql_list = mysql_query("SELECT * from News WHERE NewsID = '$NewsID'") or die(mysql_error());
			while($row_list = mysql_fetch_array($sql_list)){ 
			
			
			$NewsID=$row_list['NewsID'];
			 ?>
		


        <div class="title"><h2>SmartCity Malta Award to Top-Performing IT Students</h2></div>
        <div class="content">
          <h6>Posted on  <?  echo date("d M Y", strtotime($row_list['DateofPost']));?></h6>
          <p>
            <img class="content-img" src="../Admin/Upload/<? echo $row_list[BigImage]?>" height="336" width="448" align="left" />
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

<?php require "Include/Footer.php";
?>