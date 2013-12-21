
<?php require "Include/Header.php";

$MenuID=$_GET['MenuID'];

?>

<!-- Banner -->
<section class="row">
  <div class="container">
    <!--
    <div class="innerslide flexslider">
      <ul class="slides">
        <li>
          <img src="ui/media/dist/images/mapping.jpg" />
          <span class="banner-text">
            <span class="heading">Office Space</span>
            <span class="desc">Proin gravida nibh vel velit auctor aliquet aenean nibh vel velit</span>
          </span>
        </li>
        <li>
          <img src="ui/media/dist/images/mapping.jpg" />
          <span class="banner-text">
            <span class="heading">Office Space</span>
            <span class="desc">Proin gravida nibh vel velit auctor aliquet aenean</span>
          </span>
        </li>
        <li>
          <img src="ui/media/dist/images/mapping.jpg" />
          <span class="banner-text">
            <span class="heading">Office Space</span>
            <span class="desc">Proin gravida nibh vel velit auctor aliquet aenean nibh vel velit nibh vel velit</span>
          </span>
        </li>
      </ul>
    </div>
    -->
  </div>
</section>
<!-- Banner -->



<section class="row">
  <div class="container page-content">

    <div class="col-20">
      <aside>
        <ul class="aside-menu">
		
		<?php	
	

    $resultSubmenu = mysql_query("SELECT * FROM menu INNER JOIN Menu Menu2 ON Menu.Parent_id = Menu2.Parent_id WHERE Menu.MenuID=" . $MenuID . " ORDER BY Menu.SortIndex ASC") or die(mysql_error());
    if(mysql_num_rows($resultSubmenu) >= 1){
       ?><? while($rowSub = mysql_fetch_array($resultSubmenu)){
           ?><li>

		   
		   <a href="<? echo $rowSub['Template']; ?>.php?MenuID=<? echo $rowSub['MenuID']; ?>"><? echo $rowSub['Title'];?>
		   
		    <? $template=$rowSub['Template']; ?>
			
		   </a>
		   </li><? // echo sub menu
        } ?><?
    }

	
	?>
		
         <?php /*?> <li><a href="about.html">Company Overview</a></li>
          <li><a href="mission-values.html">SC Mission & Values</a></li>
          <li><a href="joint-ventures-partner.html">The Joint Ventures Parnter</a></li><?php */?>
        </ul>
      </aside>

    </div>

    <div class="col-76">
      <div class="box">

        <div class="breadcrumbs">
          <ul>
            <li><a href="javascript:;">Home</a></li>
            <li><a href="about.html" class="active">About SmartCity</a></li>
          </ul>
          <p><img src="../ui/media/dist/icons/social.jpg" /></p>
        </div>

	
		<?php	
	

    $sql = mysql_query("SELECT * FROM menulink WHERE MenuID=" . $MenuID . " and LinkWith = 'Html'") or die(mysql_error());

        $tbl = "";
		$row_id = 0;
		while($row = mysql_fetch_array($sql)){ ?>
     
			<? $tbl = $row['LinkWith'];
				$row_id = $row['LinkID'];
			?>
		   <? } ?>

<?
	$tblQ = mysql_query("SELECT * FROM Html WHERE HtmlID = $row_id") or die(mysql_error());
	$res = mysql_fetch_array($tblQ);
?>
        <div class="title"><h2><? echo $res["Title"];?></h2></div>
        <div class="content">
            <p><? echo $res["BigDetails"];?>
            </p>
<?
		$sql = mysql_query("SELECT List.* FROM menulink INNER JOIN List ON MenuLink.LinkID = List.ListID WHERE MenuID=" . $MenuID . " and LinkWith = 'List'") or die(mysql_error());

        $row_id = 0;
		while($row = mysql_fetch_array($sql)){  
			
				$row_id = $row['LinkID'];
				
			?>
			<div>
              <div class="col-10"><?  echo (" <img src=../Admin/Upload/".$row[SmallImage]." width='130' height='130'/>"); ?></div>
              <div class="col-58 offset-2">
                <h3><?  echo $row['Title'] ?></h3>
                <p><? echo $row["BigDetails"];?></p>
              </div>
            </div>

		
			
			<?
				
			 } ?>











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