<?php
include "../php/config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['user']);
    $password = mysqli_real_escape_string($con,$_POST['pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from login where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: homepage.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>ONLINE TOUR GUIDE</title>
<link rel="stylesheet" type="text/css" href="../css/home_styles.css">
<script src="../js/loginjava.js"></script>
<head>
<body>
<table width="100%" height="1000px">
<tr bgcolor="#008080">
<td height="50px">
	<img src="../destinations_images/profile.png" height="100px" width="100px" align="right" >
	<center><img src="../destinations_images/logo.png"></center>
</td>
</tr>
<tr height="600px">
<td background="../destinations_images/9.jpg">
<font class="navbar">
<ul class="menu">
	<a href="homepage.php"><li class="menu">Home</li></a>
	<a href="login.php"><li class="menu">Login</li></a>
	<a href="destinations.html"><li class="menu">Destinations</li></a>
	<a href="accomadation.html"><li class="menu">Accomadation</li></a>
	<a href="packages.html"><li class="menu">Packages</li></a>
	<a href="payment.html"><li class="menu">Payments</li></a>
	<a href="contactus.php"><li class="menu">Contact us</li></a>
	<input type="text" placeholder="Search..">
	</ul>
</font>
	<br>

<h1 align="center"><i><font face="cursive" font color="black">Login to our website</i></h1>
<br><br><br>
<center>
<img src= "../destinations_images/png-clipart-computer-icons-user-profile-avatar-profile-heroes-black.png" height="150px" width="150px" align="center">
</center>
    <div id="main">
	<div class="h-tag">
	<br><br>
	</div>
	<form method="POST">
	<div class="login">
	<table class="login" cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td>Enter User Name :</td>
	<td><input type="text" placeholder="Enter user name" name="user" class="UN" required/></td>
	</tr>
	<tr>
	<td>Enter Password :</td>
	<td><input type="password" placeholder="Enter Password" name="pwd" class="UN" required/></td>
	</tr>
	<tr>
	<td></td>
	<td>
	&nbsp &nbsp
	<input type="submit" value="Login" name="but_submit" class="btn" />
	<input type="reset" value="reset" class="btn" />
	</td>	
	</tr>
	</table>
	</div>
	</form>
	</div>
	<br><br><br><br><br>

<tr bgcolor="black">
<td>
<h1><b><font face="cursive" color="white">Contact Us:&nbsp &nbsp &nbsp &nbsp &nbsp  Follow us on:</font></b><h1>
<p class="footer"><h2><font face="Lucida Grande" color="white">&nbsp &nbsp Mobile: Whatsapp or Viber &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<a href="www.facebook.com"><img src="../destinations_images/facebook.png" height="50px" width="50px"></a>&nbsp 
<a href="www.twitter.com"><img src="../destinations_images/twitter.png" height="50px" width="50px"></a>&nbsp 
<a href="www.instagram.com"><img src="../destinations_images/insta.jpg" height="50px" width="50px"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<img src="../destinations_images/visa.png" height="60px" width="100px">
<img src="../destinations_images/mastercard.jpg" height="60px" width="100px">
<img src="../destinations_images/americanexpress.jpg" height="60px" width="100px">
<img src="../destinations_images/paypal.jpg" height="60px" width="100px">
</h2></p>

<p class="footer"><h4>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +94586791235</h4></p>
<p class="footer"><h4>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +94586791235</h4></p>
<p class="footer"><h4>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +94586791235</h4></p><br><br>
<p><center>*Product Disclaimer : Information on listed products and services are provided by the operator and were correct at the time of publishing. Please visit the operator’s website for further information.</center></p>

<p><center>Tour Sri Lanka copyright @ 2020</center></p>
</font>

</table>





















