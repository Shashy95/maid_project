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
<link rel="stylesheet" href="contact.css" type="text/css">
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

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
 $errors ="";
    $errors = array();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
   if(!(preg_match("/[A-Za-z]/", $_POST['fullname']))){
        $errors['fullname'] = "* Not a valid name.";
    }
     if(!(preg_match("/.+@.+\..+/", $_POST['email']))){
        $errors['email'] = "* Not a valid e-mail address.";
    }
    if(!(preg_match("/[A-Za-z]/", $_POST['subject']))){
        $errors['subject'] = "* Not a valid subject.";
    }


if(isset($_POST['submit'])){
if(count($errors) === 0){

      $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];
        
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

        $query = "INSERT INTO contact(fullname,email,subject,message) 
                  VALUES ('$fname','$email','$subject','$msg')";
        $result = mysqli_query($connection,$query);

            if(!$result) 
        {  
            echo mysql_error();
        }
        
        else{
            echo "<script>alert('Message sent successfully')</script>";
        }
    }
}
}
?>

<div class="" style="margin-left: -80px;margin-top: 80px;">
<div class="contact">
<form action="contact.php" method="post">
<h2 align="center">Contact Form</h2>
<hr>
    <label>Full Name</label><br/>
    <input type="text" id="name" name="fullname" placeholder="Your Full name.."><br/>
    <?php echo "<h5>" .$errors['fullname']. "</h5>";  ?>

    <label>Email</label><br/>
    <input type="text" id="email" name="email" placeholder="Your Email.."><br/>
    <?php echo "<h5>" .$errors['email']. "</h5>";  ?>

    <label>Subject</label><br/>
    <input type="text" id="subject" name="subject" placeholder="Write The Subject.."><br/>
    <?php echo "<h5>" .$errors['subject']. "</h5>";  ?>

    <label>Message</label><br/>
    <textarea id="msg" name="message" placeholder="Write something.." style="height:200px"></textarea><br/>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>
</div>

<div class="footer4">
    <ul>
    Quick Links
<li><a  href="home.php"class="active"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="order.php"><span class="glyphicon glyphicon-user"></span>Request for Maid</a></li>
<li><a href="search.php"><span class="glyphicon glyphicon-search"></span>Search for Maid</a></li>
<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact us</a></li>
<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
</ul>

</ul>
</div>



</div>			
</body>
</html>