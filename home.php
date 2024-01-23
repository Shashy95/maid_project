<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location:index.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" type="image/jpg" href="images/1.jpg">

</head>

<body style="background: url(images/a.jpg)">
<div class="container">

<div class="header-left">
<img src="images/1.jpg">
</div>

<h1 align="center">ONLINE MAID PORTAL SYSTEM</h1>



<div class="top">
<a  href="home.php"class="active">Home</a>
<a href="order.php">Request for Maid</a>
<a href="search.php">Search for Maid</a>
<a href="contact.php">Contact us</a>
<div class="submenu">
<a class="dropbtn">Hi <?php echo $_SESSION['username']; ?>
 <span class="arrow">&#9660;</span>
</a>
<div class="submenu-content">
<a href="profile.php">View  profile</a>
<a href="changepass.php">Change Password</a>
<a href="logout.php">Logout</a>
</div>
</div>
</div>


<div class="one">
<?php include("slides.php"); ?>
</div>
<div class="main">

<div class="content-left">
 <h3 align="center"><p>ABOUT US</p></h3>
 <hr>
<img src="images/14.jpg">
<br>Imagine coming from work to find your house is clean as neat, fresh and welcoming you with food ready placed at your dinning table and all work done as it best as possible be.</br>
Our website offers such kind of maids who are the best in doing variety of  house works.
We conduct comprehensive interviews before recruiting the maids so as to provide you with trustworthy and hardworking maids. We  train  maids and test what services they are good to offer for your family.

<br>Through our website we offer you the chance to send specific requirements of the maid you want in <b>REQUEST MAID PAGE</b>. Also there is <b>SEARCH FOR MAID PAGE</b> where you can search for maids  and for any question,queries,comments and messages you can send it to us through <b>CONTACT US PAGE</b>.


<p>WELCOME TO OUR WORLD!</p>
</div>

<div class="content-right">
<h3>SERVICES WE OFFER</h3>
<hr>

<p style="float: left; text-align: center; width: 35%;  margin-bottom: 0.5em;"><img src="images/15.jpg" style="width: 90%">Cleaning the house</p>

<p style="float: right; text-align: center; width: 35%;  margin-bottom: 0.5em;"><img src="images/16.png" style="width: 90%">Cooking</p>

<p style="float: left; text-align: center; width: 35%;  margin-bottom: 0.5em;"><img src="images/17.png" style="width: 90%">Care for children</p>

<p style="float: right; text-align: center; width: 35%;  margin-bottom: 0.5em;"><img src="images/18.png" style="width: 90%">Washing clothes</p>

<p style="float: left; text-align: center; width: 35%;  margin-bottom: 0.5em;"><img src="images/19.jpeg" style="width: 90%">Care for elderly/disabled</p>


<p style="clear: both;">
</div>
</div>

</div>

<div class="footer">
	<ul>
	Quick Links
<li><a  href="home.php"class="active">Home</a></li>
<li><a href="order.php">Request for Maid</a></li>
<li><a href="search.php">Search for Maid</a></li>
<li><a href="contact.php">Contact us</a></li>
<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
</ul>	
</div>

</div>
</body>
</html>