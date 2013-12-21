
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
    <link rel="stylesheet" href="../Assets/css/style.css" />
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Assets/css/mosaic.css" type="text/css" media="screen" />
    <?php ?><script type="text/javascript" src="../https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><?php ?>
    <script type="text/javascript" src="Assets/js/mosaic.1.0.1.js"></script>
    <script src="../Assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="../Assets/ckeditor/ckeditor.css">
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


