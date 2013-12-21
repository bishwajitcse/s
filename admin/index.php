<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<title>SmartCity Backend</title>

<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body style="background:#fff;">
<!-- wrapper id start here -->
<div id="wrapper" style="background:none #fff; border-bottom:0px;">
	<!-- docContainer start here -->
	


	<form id="loginForm" action="login_success.php" name="form" method="post">
		<div class="login-main">
			<div class="error"><?php echo $_GET['error'];?></div>
			<div class="logo-login fl">
            	<img src="assets/image/logo_login.png" width="400"  alt="logo" />
            </div>
            
            <div class="login-right fr">
            	<div class="txt-holder fl">
                	<label class="login" for="txtUname">User Name</label>
                    <input type="text" id="txtUname" name="UserName" class="txt-box" style="width:275px;" />
                </div>
                
                <div class="txt-holder fl">
                	<label class="login" for="txtPass">Password</label>
                    <input type="password" id="txtPass"  name="Password" class="txt-box" style="width:275px;" />
                </div>
                
                <div class="txt-holder fl">
                	<input name="submit" type="submit" class="btn" value="log in" /> &nbsp; &nbsp;
                    
                    <input name="" type="checkbox" value="" id="chkLogged" /> &nbsp;<label for="chkLogged">Stay Logged In</label>
                </div>
                
                <div class="txt-holder fl">
                	<a href="javascript:void(0);">Forgot Password</a><span>|</span><a href="javascript:void(0);">Inquiry</a>
                </div>
            </div>
            
            <div class="clr"></div>
		</div>
	</form>
	<!-- docContainer ends here -->
	
</div>
<!-- wrapper id ends here -->
</body>
</html>
