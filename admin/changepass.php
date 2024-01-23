<?php
session_start();


if(!isset($_SESSION["admin_name"])){
  header("Location:index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<head>
<link href="table/bootstrap.min.css" rel="stylesheet">
<link href="home.css" rel="stylesheet">
<style>

h2 {
padding:20px 35px;
margin:-10px -50px;
text-align:center;
}
.change{
  margin-left:300px;
}
#changebtn{
margin-left: 100px;
text-decoration:none;
width:32%;
text-align:center;
display:block;
background-color: #4B99AD;;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px
}

input[type=password] {
width:62%;
height:5%;
padding:10px;
border:1px solid #ccc;
padding-left:40px;
}
</style>
</head>
<body>

<div class="container">

<div class="header-left">
<img src="images/1.jpg">
</div>

<h1 align="center">ONLINE MAID PORTAL SYSTEM</h1>

<div class="topnav">
 <a  href="index.php">Home</a> 
 <a href="view_users.php"class="active">Users</a> 
 <a href="view_req.php">Request</a> 
 <a href="view_sel.php">Selection</a> 
 <a href="view_msg.php" >Messages</a> 
 <a href="create.php">Post Maids</a> 
 <a href="manage.php" >Manage Maids</a> 
 
 <div class="submenu">
<a class="dropbtn">Hi <?php echo $_SESSION['admin_name']; ?>
 <span class="arrow">&#9660;</span>
</a>
<div class="submenu-content">
<a href="changepass.php">Change Password</a>
<a href="logout.php">Logout</a>
</div>
</div>
</div>

<?php
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

    $query= "SELECT *FROM admin WHERE admin_name='".$_SESSION['admin_name']."'";
    $result = mysqli_query($connection,$query);
    $chg = mysqli_fetch_array($result);
    $pass=$chg['admin_pass'];

if($pass==$old){

	if($new==$new2){

		$query="UPDATE admin set password='$new' WHERE admin_name='".$_SESSION['admin_name']."'";
		 $result = mysqli_query($connection,$query);
		 echo"<script>alert('Password Changed Successfully')</script>";

		
	}
  else{
  	      echo"<script>alert('Your Passwords Do not Match')</script>";
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