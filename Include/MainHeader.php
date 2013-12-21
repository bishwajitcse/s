<?php require "db.php";

    session_start();
    $adminflag=0;
    if($_SESSION['username']!=''){
	
       $CityAccess=$_SESSION['CityAccess'];
	   if($CityAccess=="0" || $CityAccess=="1"){
		$adminflag=1;}
		
		}
       else
        $adminflag=0;


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to SmartCity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="ui/style/css/uicreep.css" rel="stylesheet" />
  <link href="ui/style/css/bootstrap.css" rel="stylesheet" />
  <link href="ui/style/css/responsive.css" rel="stylesheet" />
  <link href="ui/style/css/flexslider.css" rel="stylesheet" />
  <link href="ui/style/css/superfish.css" rel="stylesheet" />
 <link href="ui/style/css/developershand.css" rel="stylesheet" />
  <!-- <link href="ui/style/css/component.css" rel="stylesheet" /> -->
  <script src="ui/js/dist/modernizr.custom.js"></script>
<script type="text/javascript">
    function MM_openBrWindow(theURL, winName, features) { //v2.0
        window.open(theURL, winName, features);
    }
</script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="ui/js/dist/respond.min.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="ui/media/dist/icons/favicon.ico">
 
</head>

<body class="headoffice">

<!-- Header Starts -->
<header class="row">
  <div class="container">
    <h1 class="col-26"><a href="index.html"><img src="ui/media/dist/header/smartcity-logo.png" /></a></h1>
    
    <div class="col-70 pull-right">
      <div class="row small-nav">

        <ul>
          <li class="last"><input class="search" type="text" /></li>
          <li><input class="normal-button" type="submit" value="Search" /></li>
        </ul>

        <ul class="top-buttons">
          <li><a href="index.html" class="dubai active">SmartCity</a></li>
          <li><a href="Malta/index.html" class="malta">SmartCity Malta</a></li>
          <li><a href="Kochi/index.html" class="kochi">SmartCity Kochi</a></li>
        </ul>

      </div>
      <div class="row social-header">
        <ul class="pull-right">
          <li><span class="phone">+971 40 125 231</span></li>
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
  <nav class="container headoffice">
    <a class="showinMobile" id="mobileMenu" href="javascript:;"><img width="30px" src="ui/media/dist/icons/mobile-nav-icon.png" /></a>
	
	
<?php /*?>    <ul class="mobile-menu" id="menu">

      <li><a href="index.html" class="active">Home</a></li>
	  
      <li>
        <a href="about.html">About SmartCity</a>
        <ul>
          <li><a href="about.html">Company Overview</a></li>
          <li><a href="mission-values.html">SC Mission & Values</a></li>
          <li><a href="joint-ventures-partner.html">The Joint Ventures Parnter</a></li>
        </ul>
      </li>
	  
     
    </ul>
	<?php */?>
	
	 <ul class="mobile-menu" id="menu">
	
<?php	
	
$sql = mysql_query("SELECT * FROM menu WHERE Parent_id=0 and CID=1 and Status=1") or die(mysql_error());
while($row = mysql_fetch_array($sql)){
   ?><li>

   <a href="<? echo $row['Template']; ?>.php?MenuID=<? echo $row['MenuID']; ?>"><? echo $row['Title'];?></a>
   <? // echo main menu
	
    $resultSubmenu = mysql_query("SELECT * FROM menu WHERE Parent_id=" . $row['MenuID'] . " ORDER BY Title ASC") or die(mysql_error());
    if(mysql_num_rows($resultSubmenu) >= 1){
       ?><ul>
	   
	   
	   
	   <? while($rowSub = mysql_fetch_array($resultSubmenu)){
	   
	   
           ?><li>
		   
		   <a href="<? echo $rowSub['Template']; ?>.php?MenuID=<? echo $rowSub['MenuID']; ?>"><? echo $rowSub['Title'];?></a>
		   </li><? // echo sub menu
        } ?></ul></li><?
    }
}  
	
	?>  <li class="contact-nav"><a href="contact.php">Contact Us</a></li></ul>
	
	
	
	
	
	
	
	
	
  </nav>
</div>
<!-- Main Nav -->