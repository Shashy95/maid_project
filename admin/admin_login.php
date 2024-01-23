<html>
<head > 
<link href="form.css" rel="stylesheet">  
</head>


<body style="background: url(0.jpg)">

<div class="img">
<img src="images/1.jpg">
<h2 align="center">ONLINE MAID PORTAL SYSTEM(OMPS)</h2>
</div>

<?php

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
session_start();

 if (isset($_POST['submit'])){
$username=$_POST['admin_name'];
$password=$_POST['admin_pass'];

$select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


     $query = "SELECT * FROM admin WHERE admin_name='$username'and admin_pass='$password'";
    $result = mysqli_query($connection,$query);
    $count = mysqli_num_rows($result);

         if($count==1){
        $_SESSION['admin_name'] = $username;
        header('Location: index.php');
         }
else{
    echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='admin_login.php'>Login</a></div>";
    }
    }else{
?>
<div class="form">
<form action="" id="form" method="post" name="form">
<h2>Sign In</h2>
<hr><br/>
<label>Username</label>
<input type="text" id="username"name="admin_name" placeholder="      Ex -john123"/><br/>

<br/><label>Password</label>
<input type="password" name="admin_pass" id="password" placeholder="    ************"/><br/>
<br><input type="submit" name="submit" id="loginbtn" value="Login"/>
</form>
</div>
<?php } ?>
</div>
</body>
</html>