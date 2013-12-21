
<?php
       
  include "Include/db.php";
$table=$_GET['lw'];
 $sql = "SELECT ";
 
 switch($table){
 case 'newsletter':
 $sql.=" NewsletterID as Id,FullName as Title from $table";
 break;
  case 'html':
 $sql.=" HtmlID as Id,Title as Title from $table";
  break;
  case 'contactinfo':
 $sql.=" ContactinfoID as Id,FullName as Title from $table";
  break;
    case 'imagegallery':
 $sql.=" ImageGalleryID as Id,Title as Title from $table";
  break;
  
    case 'list':
 $sql.=" ListID as Id,Title as Title from $table";
  break;
      case 'banner':
 $sql.="BannerID as Id,Title as Title from $table";
  break;
  
        case 'news':
 $sql.="NewsID as Id,Title as Title from $table";
  break;
          case 'presskit':
 $sql.="PressKitID as Id,Title as Title from $table";
  break;
  
  
  }
  
  
  
$result = mysql_query($sql);




       

?> 
 <option value="0">Select Content</option>
 
<? while($row = mysql_fetch_array($result)){;?>

<option value="<?php echo $row['Id'];?>" ><?php  echo $row['Title'];?></option><? }?>