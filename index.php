<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="form.css" rel="stylesheet">

</head>
<body style="background: url(images/0.jpg)">
<div class="login">

<div class="img">
<img src="images/1.jpg">
<h2 align="center">ONLINE MAID PORTAL SYSTEM(OMPS)</h2>
</div>

<?php
require('db.php');
session_start();

 if (isset($_POST['username']) && isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
	
	 $query = "SELECT * FROM register WHERE username='$username' and password='$password'";
	$result = mysqli_query($connection,$query);
	$count = mysqli_num_rows($result);

        if($count==1){
	    $_SESSION['username'] = $username;
	    header('Location: home.php');
         }
else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<form action="" id="form" method="post" name="form">
<h2>Sign In</h2>
<hr><br/>
<label>Username</label>
<input type="text" id="username"name="username" placeholder="Ex -john123" required="required" /><br/>

<br/><label>Password</label>
<input type="password"name="password" id="password" placeholder="************" required="required" /><br/>
<br><input type="submit" id="loginbtn" value="Login"/>
<p>Create your account <a href="register.php" id="popup" ><b>here</b></a></p>
</form>
</div>
<?php } ?>
<div class="footer">
<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved
<br><a href="admin/admin_login.php" id="popup">ADMIN LOGIN</a>
</p></center>
</div>
</div>
</body>
</html>
