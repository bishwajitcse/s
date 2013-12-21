
<?php require "db.php";


 session_start();


        if( ($_SESSION['username']=='') ){

            echo "<script>window.location='index.php'</script>";
        }

		
		
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nexa CMS</title>
<link rel="stylesheet" href="Assets/css/style.css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="Assets/css/mosaic.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="Assets/js/mosaic.1.0.1.js"></script>
     <script src="Assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="Assets/ckeditor/ckeditor.css">
<script type="text/javascript">  
			
			jQuery(function($){
				
				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});
				
				$('.fade').mosaic();
				
				$('.bar').mosaic({
					animation	:	'slide'		//fade or slide
				});
				
				$('.bar2').mosaic({
					animation	:	'slide'		//fade or slide
				});
				
				$('.bar3').mosaic({
					animation	:	'slide',	//fade or slide
					anchor_y	:	'top'		//Vertical anchor position
				});
				
				$('.cover').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'400px'		//Horizontal position on hover
				});
				
				$('.cover2').mosaic({
					animation	:	'slide',	//fade or slide
					anchor_y	:	'top',		//Vertical anchor position
					hover_y		:	'80px'		//Vertical position on hover
				});
				
				$('.cover3').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'400px',	//Horizontal position on hover
					hover_y		:	'300px'		//Vertical position on hover
				});
		    
		    });
		    
		</script>
</head>


<body>
<div class="wrapper">

<!--start topbar-->
<div id="topimg">
  <div class="topimg_left"> <img src="assets/image/logo.png" width="" height="" /></div>
  <div class="topimg_right">
    <div id="topmnu">
    
      <div class="headerRight-col">
       
        <div class="topbar_left">
		<img width="" height="" alt="" src="assets/image/topborder.png">
         </div>
	   
	   <!-- login details start here -->
		<div class="loginDetail">
                        <div>
                            <p>
                                Login:</p>
                        </div>
                        <div>
                            <!-- login date start here -->
                            <div class="loginDate">
                                <ul class="topLink">
                                    <li style="border-right:none;">
                                        <img src="Assets/image/calander.png" height="9" width="10" alt=""></li>
                                  
                                    <li><a href="javascript:;" class="topLink-divider">09-11-2012 </a></li>
                                </ul>
                            </div>
                            <!-- login date ends here -->
                            <!-- loginTime Start Here -->
                            <div class="loginTime">
                                <ul class="topLink">
                                    <li style="border-right:none;">
                                        <img src="Assets/image/clock.png" height="10" width="10">
                                    </li>
                                   
                                    <li><a href="javascript:;" class="topLink-divider">06:07:23 AM </a></li>
                                </ul>
                            </div>
                            <!-- LoginTime ends here -->
                        </div>
                    </div>
					
					  <!-- login details end here -->
					  
					  
		<div class="topbar_left">
		<img width="" height="" alt="" src="assets/image/topborder.png">
       </div>
	   

		 <!-- logoutSection Start here -->
        <div class="logoutSection">
		 <div class="welcomeText">Welcome,Administrator!  <a href=""><img width="" height="" alt="" src="assets/image/topmessage.png" style="vertical-align:middle;"> </a></div>
		   <div style="clear:both"></div>
          <ul class="topLink">
            <li class="topLink1"> <a href="javascript:;"> <img width="" height="" alt="" src="assets/image/home.png"> Home </a></li>
           <li class="topLink2"> <a class="topLink-divider" href="sessiondestroy.php"> <img width="" height="" alt="" src="assets/image/layout.png" style="padding-top:2px; vertical-align:middle;"> Logout       </a></li>
            <li class="topLink3"> <a href="javascript:;"> <img width="" height="" alt="" src="assets/image/settings.png" style="vertical-align:middle;"> <img width="" height="" alt="" src="assets/image/white arrow.png"> </a></li>
          </ul>
        </div>
        <!-- logoutSection ends here -->
		
      </div>
    </div>
  </div>
</div>
<div style="clear:both"></div>
<!--end topbar-->




<!--start menubar-->
<div id="menu">
  <ul class="menu">
     <li class="activetdesh"><a href="landing_page.php"> HOME </a>  </li>
    <li><a  href="gallery_list.php">  GALLERY </a></li>
    <li><a href="list_view.php">  LIST </a></li>
    <li><a href="newsletter_list.php"> NEWSLETTER </a></li>
	  <li><a class="last" href="presskit_list.php"> PREE KIT </a></li>
    <li><a href="contactinfo_list.php"> CONTACT INFO </a></li>
    <li><a class="" href="address_list.php"> ADDRESS </a></li>
    <li><a class="" href="html_list.php"> HTML </a></li>
	 <li><a class="" href="user_list.php"> USER </a></li>
      <li><a class="" href="download_list.php"> Download </a></li>
	
  </ul>
  <div style="clear:both"></div>
</div>

<!--end menubar-->


<script LANGUAGE="JavaScript">
<!--
// Nannette Thacker http://www.shiningstar.net
function confirmSubmit()
{
var agree=confirm(" Are u sure u want to delete?");
if (agree)
    return true ;
else
    return false ;
}
// -->
</script>


