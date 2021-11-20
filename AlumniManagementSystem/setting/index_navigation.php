<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Header & Navigation Bar</title>
</head>

<link rel="stylesheet" href="css/header_navigationbar.css" />

<body bgcolor="#E8F6F3">
<div>
<img src="https://pps.unj.ac.id/wp-content/uploads/2021/08/banner-alumni-1-1.jpg" width="100%" height="250px" />
</div>
<table class="table">
<tr>
<td>
<ul class="ul1">
	<div class="dropdown">
	<li class="li_image"><img src="image/WE2.jpg" width="55px" height="55px" style="padding-left:15px;padding-right:15px" /></li>
    </div>
    <div class="dropdown">
    <li class="li1 active"><a href="index.php" name="index" onclick="change()"><span class="span1">Home</span></a></li>
		<div class="dropdown-content">
    		<a href="index.php#welcome">Main</a>
    		<a href="index.php#howto">Becoming member</a>
        </div>
    </div>
    <div class="dropdown">
    <li class="li1"><a href="about_us.php" name="about" onclick="change()"><span class="span1">About Us</span></a></li>
    	<div class="dropdown-content">
    		<a href="about_us.php#history">The History</a>
    		<a href="about_us.php#organization_chart">Organization Chart</a>
        </div>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="news.php"><span class="span1">News</span></a></li>
    	<div class="dropdown-content">
    		<a href="news.php#announcements">Announcement Board</a>
    		<a href="news.php#events">Events</a>
   		</div>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="eforum.php"><span class="span1">E-Forum</span></a></li>
    </div>
    <div class="dropdown">
    <li class="li1"><a href="contact_us.php"><span class="span1">Contact Us</span></a></li>
    	<div class="dropdown-content">
    		<a href="contact_us.php#contact">Contact</a>
    		<a href="contact_us.php#faq">FAQ</a>
        </div>
    </div>
    <li class="li2"><a href="register.html"><span class="span1">Register</span></a></li>
    <li class="li2"><a href="login.html"><span class="span1">Login</span></a></li>
</ul>
</td>
</tr>
</table>

<button id="index_totop" onclick="topFunction()"><img src="image/top.jpg" width="50px" height="50px"/></button>
<script src="javascript/index.js"></script>

</body>
</html>