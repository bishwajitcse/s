

<?php require "Include/Header.php";$mssg=$_GET['mssg']; 

require "Include/validation.php";
?>
<style>
.submission_mssg {
background-color: #99e64e;
color: #fff;
margin-left: 10px;
width: 200px;
padding-top: 3px;
padding-bottom: 3px;
margin-top: 10px;
margin-bottom: 10px;
text-align: center;
}</style><head>

</head>
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

    <!-- <div class="col-20">
      <aside>
        <ul class="aside-menu">
          <li><a href="a-strategic-gateway.html">Malta: A Strategic Gateway</a></li>
          <li><a href="supportive-fiscal-incentives.html">Supportive Fiscal Incentives</a></li>
          <li><a href="javascript:;">Network of Opportunities</a></li>
          <li><a href="javascript:;">Cutting Edge ICT Infrastructure</a></li>
          <li><a href="javascript:;">Environmental Responsibility</a></li>
          <li><a href="javascript:;">Quality of Life</a></li>
          <li><a href="javascript:;">One Stop Shop</a></li>
        </ul>
      </aside>

    </div> -->

    <div class="col-96">
      <div class="box">

        <div class="breadcrumbs">
          <ul>
            <li><a href="javascript:;">Home</a></li>
            <li><a href="contact.php" class="active">Contact Us</a></li>
          </ul>
          <p><img src="ui/media/dist/icons/social.jpg" /></p>
        </div>

        <div class="title"><h2>Contact Us</h2></div>
        <div class="content">

          <div class="col-50 contact-form">
		  <? if ($mssg!=""){  echo '<div class=submission_mssg>' .$mssg. '</div>' ; }?>
            <p>Please submit the following form and we will get in touch with you shortly.</p>
             <form name="" class="cmxform" id="commentForm"  action="Include/contact_add.php" method="post" enctype="multipart/form-data"> 
            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">First Name</label>
                <input class="col-35" type="text" id=""  name="FirstName" id="cname" required/>
                <span class="col-35 error">Required</span>
              </div>
            </div>
            
            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">Last Name</label>
                <input class="col-35" type="text"  name="LastName" id="cname" required/>
                <span class="col-35 error">Required</span>
              </div>
            </div>

            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">Title</label>
                <input class="col-35" type="text" name="Title"  id="cname" required/>
                <!-- <span class="col-35 error">Required</span> -->
              </div>
            </div>

            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">Company</label>
                <input class="col-35" type="text" name="Company" id="cname" required/>
                <span class="col-35 error">Required</span>
              </div>
            </div>

            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">Corporate Website or URL</label>
                <input class="col-35" type="text" name="URL" />
                <span class="col-35 error">Required</span>
              </div>
            </div>

            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">Email</label>
                <input class="col-35" type="email"  name="Email" id="cemail" required/>
                <span class="col-35 error">Required</span>
              </div>
            </div>

            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">Type of Enquiry</label>
                <select class="col-35" name="Enquiry">
                  <option value="">Select Form</option>
                  <option value="Business Enquiry">Business Enquiry</option>
                  <option value="Career">Career</option>
                  <option value="Marketing & PR Related">Marketing &amp; PR Related</option>
                  <option value="General">General</option>
                </select>
                <span class="col-35 error">Required</span>
              </div>
            </div>

            <div class="control-group">
              <div class="controls-row">
                <label class="col-15">&nbsp;</label>
                <input type="submit" name="Submit" value="Submit" class="col-14 normal-button" />
                <span class="col-35 error">There are some missing field</span>
              </div>
            </div>

          </div>
           </form>
          <!-- Address -->
          <div class="col-40 offset-2">
            
            <div class="contact">
              <h3>Address</h3>
			  
			 <?   $sql = "SELECT * FROM `html` where HtmlID=1";
	             $result = mysql_query($sql);
               $row = mysql_fetch_array($result); ?>
			  
			  
          <?php /*?>    <p>
                SmartCity (Dubai) FZ-LLC<br />
                P.O. Box 502777<br />
                Dubai, UAE<br />
                <br />
                T: + 971 4 361 6661<br />
                F: + 971 4 361 1010<br />
                <br />
                <a href="mailto:info@SmartCity.ae">info@SmartCity.ae</a>
              </p>*/  echo $row['BigDetails'];?>
              <img src="../ui/media/dist/images/scd_location_map_thumb.jpg" />
              <p>
                <a target="_blank" href="../ui/media/dist/images/SCD_location_map.pdf">Download Map as PDF</a>
              </p>

            </div>

          </div>
          <!-- Address -->

          </div>

          <div class="col-47 offset-2">
          </div>

        </div>
      </div>
    </div>

  </div>
</section>
<?php require "Include/Footer.php"; ?>