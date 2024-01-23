<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location:index.php");
  exit();
}

$id=$_GET['id'];

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
  <a  href="home.php"class="active"></span>Home</a>
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
  

  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


    $query ="SELECT * FROM register WHERE id = '$id' ";
    $result= mysqli_query($connection,$query);

    $row=mysqli_fetch_array($result);

    $errors = array();
    
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(!(preg_match("/[A-Za-z]/", $_POST['fname']))){
        $errors['fname'] = "*  Not a valid Name.";
    }
    if(!(preg_match("/[A-Za-z]/", $_POST['lname']))){
        $errors['lname'] = "* Not a valid Name.";
    }
     if(!(preg_match("/[A-Za-z]/",$_POST['city']))){
        $errors['city']="*Not a valid city";
    }
     if(!(preg_match("/[0-9]/",$_POST['phone']) && strlen($_POST['phone'])==10)){
        $errors['phone']="*Not a valid phone number and Phone Number must contain 10 characters";
    }
    if(preg_match("/.+@.+\..+/", $_POST['email'])=== 0){
        $errors['email'] = "* Not a valid e-mail address.";
    }


if (isset($_POST['submit'])) { 

if(count($errors) === 0){

  $id=$_REQUEST['id'];

$query = "UPDATE register SET title='".$_POST['title']."', fname='".$_POST['fname']."', lname='".$_POST['lname']."', dob='".$_POST['dob']."',  city='".$_POST['city']."',
    username='".$_POST['username']."',phone='".$_POST['phone']."',email='".$_POST['email']."' where id='$id' ";

             $result = mysqli_query($connection,$query);
          if($result==true){
   
      }
}
}
}

?>
    
<h2>Edit Profile</h2>
<hr>
<div class="form" style="margin-top: 50px;">
<form action="" id="form" method="post">



<p><label>Title</label><br/>
<select id="title" name="title">
<option value= "<?php echo$row[1]; ?>"><?php echo$row[1]; ?> </option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
</select><br/>

<br/><label>First Name</label><br/>
<input type="text" placeholder="Enter password" name="fname" required="required" id="name" value="<?php echo$row[2]; ?>"><br/>
<?php echo "<h5>" .$errors['fname']. "</h5>";  ?>


<br/><label>Last Name</label><br/>
<input type="text" placeholder="Enter password" name="lname" required="required" id="name" value="<?php echo$row[3]; ?>"><br/>
<?php echo "<h5>" .$errors['lname']. "</h5>";  ?>

<br/><label>Date of Birth</label><br/>
<input type="date" placeholder="Enter password" name="dob" required="required" value="<?php echo$row[4]; ?>"><br/>


<br/><label>City</label><br/>
<input type="text" placeholder="Enter password" name="city" required="required" value="<?php echo$row[5]; ?>"><br/>
<?php echo "<h5>" .$errors['city']. "</h5>";  ?>

 <br/><label>Username</label><br/>
<input type="text" placeholder="Enter password" name="username" required="required" id="username"value="<?php echo$row[6]; ?>"><br/>
        
<br/><label>Phone</label><br/>
<input type="tel" placeholder="Phone Number" name="phone"  id="phone" required="required" value="<?php echo$row[8]; ?>"><br/>
 <?php echo "<h5>" .$errors['phone']. "</h5>";  ?>

<br/><label>Email</label><br/>
<input type="email" placeholder="Email" name="email"  id="email" required="required" value="<?php echo$row[9]; ?>"> <br/>
<?php echo "<h5>" .$errors['email']. "</h5>";  ?>

<p><input type="submit" name="submit" id="registerbtn" value="Update" /></p>
</form>
</div>

<div class="footer" style="margin-top: 70px;">
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
