
<?php require "../Include/front_header.php";
require "../Include/tree_menu_header.php";
$HtmlID=$_GET['HtmlID'];
$BannerID=$_GET['BannerID'];
$mssg=$_GET['mssg'];
$menuId=$_GET['menuId'];
$CID=$_GET['CID'];
function section_select($option, $db_select){
    if ($db_select == $option)
        return "selected='selected'";
    else
        return "";
}?>



<!--start content-->




<div class="site_performance_full">
    <div class="site_performance_top breadcrumb">HOME  >  <span class="site_text"> ADD TOP BANNER </span>   <div class="add_new"></div>
        <div class="clear"></div></div>

    <!--end Site Performance-->
    <form name="" class="cmxform" id="commentForm" action="../Action/topbanner_add1.php?flagpop=1&BannerID=<?php echo $BannerID?> & CID=<?php echo $CID;?> & menuId= <?php echo $menuId;?>" method="post" enctype="multipart/form-data">

        <!--start form-->
        <div class="all_form">
		
		<? if ($mssg!=""){  echo '<div class=submission_mssg>' .$mssg. '</div>' ; }?>   
            <?php $sql = "SELECT * FROM `banner` where BannerID=$BannerID";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result)?>

            <label for=""> Title <span></span></label>
            <div class="controls">
                <input name="Title" type="text" value="<? echo $row['Title'] ?>" id="cname" required>
            </div>

            <label for=""> Section Name <span></span></label>
            <div class="controls">
                <select id="cname" name="SectionName"  required>
                    <option value="0">Select Section</option>


                    <?
                    if (isset($BannerID)){


                        $sqllink = "SELECT * FROM banner where BannerID=$BannerID";
                        $resultlink = mysql_query($sqllink);
                        $rowlink = mysql_fetch_array($resultlink);
                        $select = "";
                        $select = $rowlink["SectionName"];
                        ?>

                        <option value="Home" <? echo section_select("Home", $rowlink["SectionName"]); ?>>Home</option>
                        <option value="Html" <? echo section_select("Html", $rowlink["SectionName"]); ?>>Html</option>
                        <option value="List" <? echo section_select("List", $rowlink["SectionName"]); ?>>List</option>
                    <? }else{ ?>
                        <option value="Home">Home</option>
                        <option value="Html">Html</option>
                        <option value="List">List</option>
                    <?	}  ?>

                </select>
            </div>


            <label for=""> Small  Details <span></span></label>
            <div class="controls">

                <textarea name="SmallDetails" cols="50"><? echo $row['SmallDetails'] ?></textarea>
            </div>


            <div class="controls">

                <?


                if ($BannerID!="") { echo (" <img src=../Upload/".$row[SmallImage]." width='100' height='70'/>"); } else {

                    echo (" <img src=Upload/".$row[SmallImage]." width='100' height='70' style='display:none;'/>");}
                ?>

            </div>


            <label for=""> Big Image <span></span></label>
            <div class="controls">

                <?
                $BigimageHd=$row['BigImage'];
                $SmallimageHd=$row['SmallImage'];
                ?>


                <input name="BigImage" type="file" value="" id="file">
            </div>






            <label for=""> Image Alt Text <span></span></label>
            <div class="controls">
                <input name="ImgAltText" type="text" value="<? echo $row['ImgAltText'] ?>" id="txtUser">
            </div>

            <label for=""> Link <span></span></label>
            <div class="controls">
                <input name="Link" type="text" value="<? echo $row['Link'] ?>" id="txtUser">
            </div>

            <label for=""> Sort Index <span></span></label>
            <div class="controls">
                <input name="SortIndex" type="text" value="<? echo $row['SortIndex'] ?>" id="txtUser">
            </div>

            <label for=""> Status <span></span></label>
            <div class="controls">
                <?php  $chk=$row['Status'];
                if ($chk==1 && $BannerID!="")  { ?>
                    <input type="checkbox" id="" checked="checked" name="Status"  value="<?php  echo $row['Status'];?>">
                <? } else {
                    ?>
                    <input name="Status" type="checkbox" value="1" id="txtUser"> <? }?>
            </div>

            <label for="">  <span></span></label>
            <div class="controls">
                <input name="Submit" type="submit" value="Submit" class="submit" id="txtUser">
        <input type="hidden" name="BannerID" Value="<? echo $BannerID ?>" />
                <input type="hidden" name="menuId" Value="<? echo $menuId ?>" />
                <input type="hidden" name="SmallimageHd" Value="<? echo $SmallimageHd ?>" />
                <input type="hidden" name="BigimageHd" Value="<? echo $BigimageHd ?>" />
            </div>



        </div>
    </form>
    <!--end form-->


</div>
<!--Home end-->





<!--end content-->
<div style="clear:both"></div>
  <!--Tree Menu Div end--> 


