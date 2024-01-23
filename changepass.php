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
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="profile.css" type="text/css">
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

<?php
session_start();


if(!isset($_SESSION["username"])){
  header("Location:index.php");
  exit();
}

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
  
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

if(isset($_POST['change'])){
$old=$_POST['old'];
$new=$_POST['new'];
$new2=$_POST['new2'];

    $query= "SELECT *FROM register WHERE username='".$_SESSION['username']."'";
    $result = mysqli_query($connection,$query);
    $chg = mysqli_fetch_array($result);
    $pass=$chg['password'];

if($pass==$old){

	if($new==$new2){

		$query="UPDATE register set password='$new' WHERE username='".$_SESSION['username']."'";
		 $result = mysqli_query($connection,$query);
		 echo"<script>alert('Password Changed Successfully')</script>";

		
	}
  else{
  	      echo"<script>alert('Your Passwords Dont Match')</script>";
  }
}
else{
      echo"<script>alert('Old Password is Invalid')</script>";
}

}

 ?>
<h2 style="margin-top: 30px;">Change Password</h2>
<hr><br/>
<div class="change">
<form action=""  method="post" >
<label>Old Password</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="password" name="old"/><br/>

<br/><label>New Password</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="password"name="new"/><br/>

<br/><label> Confirm New Password</label>&nbsp&nbsp&nbsp&nbsp
<input type="password"name="new2"/><br/>

<br><input type="submit" id="changebtn" name="change" value="Change Password"/>
</form>
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
