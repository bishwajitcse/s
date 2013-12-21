<?php require "db.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SmartCity Kochi - Welcome to SmartCity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="../ui/style/css/uicreep.css" rel="stylesheet" />
  <link href="../ui/style/css/bootstrap.css" rel="stylesheet" />
  <link href="../ui/style/css/responsive.css" rel="stylesheet" />
  <link href="../ui/style/css/flexslider.css" rel="stylesheet" />
  <link href="../ui/style/css/superfish.css" rel="stylesheet" />

  <!-- <link href="../ui/style/css/component.css" rel="stylesheet" /> -->
  <script src="../ui/js/dist/modernizr.custom.js"></script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../ui/js/dist/respond.min.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="../ui/media/dist/icons/favicon.ico">
 
</head>

<body class="kochioffice">

<!-- Header Starts -->
<header class="row">
  <div class="container">
    <h1 class="col-26"><a href="index.html"><img src="../ui/media/dist/header/smartcity-logo-kochi.png" /></a></h1>
    
    <div class="col-70 pull-right">
      <div class="row small-nav">

        <ul>
          <li><a href="Contact.php">Contact Us</a></li>
          <li class="last"><input class="search" type="text" /></li>
        </ul>

        <ul class="top-buttons">
          <li><a href="../home.php" class="dubai">SmartCity</a></li>
          <li><a href="../Malta/index.php" class="malta">SmartCity Malta</a></li>
          <li><a href="index.html" class="kochi active">SmartCity Kochi</a></li>
        </ul>

      </div>
      <div class="row social-header">
        <ul class="pull-right">
          <li><span class="phone">+91 987 564 431</span></li>
          <li class="social">
            <a href="javascript:;" class="f">Facebook</a>
            <a href="javascript:;" class="t">Twitter</a>
            <a href="javascript:;" class="g">Google+</a>
          </li>
        </ul>
      </div>
    </div>

  </div>
</header>
<!-- Header End -->

<!-- Main Nav -->
<div class="row">
  <nav class="container">
    <a class="showinMobile" id="mobileMenu" href="javascript:;"><img width="30px" src="../ui/media/dist/icons/mobile-nav-icon.png" /></a>
  <?php /*?>  <ul class="mobile-menu" id="menu">
      <li><a href="index.html" class="active">Home</a></li>
      <li>
        <a href="about.html">About SmartCity Kochi</a>
        <ul>
          <li><a href="about.html">Company Overview</a></li>
          <li><a href="mission-values.html">SCK Mission & Values</a></li>
          <li><a href="joint-ventures-partner.html">The Joint Ventures Parnter</a></li>
        </ul>
      </li>
      <li>
        <a href="advantage.html">SCK Advantage</a>
        <ul>
          <li><a href="a-strategic-gateway.html">Malta: A Strategic Gateway</a></li>
          <li><a href="supportive-fiscal-incentives.html">Supportive Fiscal Incentives</a></li>
          <li><a href="javascript:;">Network of Opportunities</a></li>
          <li><a href="javascript:;">Cutting Edge ICT Infrastructure</a></li>
          <li><a href="javascript:;">Environmental Responsibility</a></li>
          <li><a href="javascript:;">Quality of Life</a></li>
          <li><a href="javascript:;">One Stop Shop</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:;">Business Spaces</a>
        <ul>
          <li><a href="officespace.html">Office Space</a></li>
          <li><a href="javascript:;">Retail and F&B</a></li>
          <li><a href="javascript:;">Hotels</a></li>
          <li><a href="javascript:;">Residential</a></li>
          <li><a href="javascript:;">Support Amentities</a></li>
        </ul>
      </li>
      <li>
        <a href="mediacenter.html">Media Centre</a>
        <ul>
          <li><a href="pressrelease-list.html">Press Releases</a></li>
          <li><a href="press-kit.html">Press Kit</a></li>
          <li><a href="newsletters.html">e-Connect Newsletter</a></li>
          <li><a href="marketing-collaterals.html">Marketing Collaterals</a></li>
          <li><a href="gallery.html">Picture Gallery</a></li>
        </ul>
      </li>
    </ul><?php */?>
	
	
	
	 <ul class="mobile-menu" id="menu">
	
<?php	
	
$sql = mysql_query("SELECT * FROM menu WHERE Parent_id=0 and CID=3") or die(mysql_error());
while($row = mysql_fetch_array($sql)){
   ?><li><a href="<? echo $row['Template']; ?>.php?MenuID=<? echo $row['MenuID']; ?>"><? echo $row['Title'];?></a><? // echo main menu
	
    $resultSubmenu = mysql_query("SELECT * FROM menu WHERE Parent_id=" . $row['MenuID'] . " ORDER BY Title ASC") or die(mysql_error());
    if(mysql_num_rows($resultSubmenu) >= 1){
       ?><ul><? while($rowSub = mysql_fetch_array($resultSubmenu)){
           ?><li><a href="<? echo $rowSub['Template']; ?>.php?MenuID=<? echo $rowSub['MenuID']; ?>"><? echo $rowSub['Title'];?></a></li><? // echo sub menu
        } ?></ul></li><?
    }
}  
	
	?></ul>
	
	
	
	
	
	
  </nav>
</div>
<!-- Main Nav -->