<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("Location:index.php");
  exit();
}

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}

if(isset($_POST['submit'])){
        $age = $_POST['age'];
        $exp = $_POST['experience'];
        $desc = $_POST['description'];

      
      
      $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
  
  $query = "INSERT INTO request(age,experience,description,username) 
  VALUES ('$age','$exp','$desc','$_SESSION[username]') ";
        $result = mysqli_query($connection,$query);

             if(!$result) 
        {  
            echo mysql_error();
        }
        
        else{
            echo "<script>alert('Request sent successfully')</script>";
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
<title>Request</title>
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

<h3 align="center" style="margin-top: 60px;">SUBMIT YOUR MAID REQUIREMENTS</h3>
  <hr>
<div class="maidreq" style="padding-top: 6px; height: 400px;">
<form id="form1_maidreq" action="" method="post">
      
    <div class="clear left">
      <p><label for="form1_age">Age group you desire</label>
     <p> <span><select id="age" name="age" required="required">
      <option value="">--Choose--</option>
      <option value="18-25">18-25</option>
      <option value="26-30">26-30</option>
      <option value="31-35">31-35</option>  
      <option value="36-40">36-40</option>
      <option value="41-50">41-50</option></select></span>
      </p>
    </div>  
  
    <div class="left">
      <p><label for="form1_noofexperience">Number of times she has worked</label>
        <p><span><select id="experience" name="experience" required="required">
        <option value="">--Choose--</option>
        <option value="1">1</option>
        <option value="1">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="more than 5">more than 5</option>
        </select></span>
      </p>
    </div>

    <div class="left">
      <p><label for="form1_description">Brief Description of The Maid You Want</label>
        <p><span><textarea id="description" name="description" required="required"></textarea></span>
        </p>
    </div>        
     
<p>
  <input type="submit" name="submit" value="Submit">
  
</p>  
</form>   
</div> 

<div class="footer2">
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