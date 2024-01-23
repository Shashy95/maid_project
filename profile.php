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
<h1 align="center"> ONLINE MAID PORTAL SYSTEM</h1>

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



<div class="main" style="height: 300px;margin:0 auto;margin-top:70px; width: 680px;height: 580px">
<?php
 
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


    $query="SELECT * from register WHERE username='".$_SESSION['username']."'";
    $result=mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($result))
        {  
          $userid = $row['id'];
            $id=$row[0];
            $title=$row[1];
            $fname=$row[2];
            $lname=$row[3];
            $dob=$row[4];
            $city=$row[5];
             $username=$row[6];
            $phone=$row[8];
            $email=$row[9];

          ?>

            <p style="margin-left: 50px;">Title: <b style="margin-left:120px;"><?php echo $title;  ?></b></p>
            <p style="margin-left: 50px;"> First Name :<b style="margin-left:80px;"><?php echo $fname;  ?></b></p>
            <p style="margin-left: 50px;">Last Name : <b style="margin-left:80px;">  <?php echo $lname;  ?></b></p>
            <p style="margin-left: 50px;">Date of Birth : <b style="margin-left:70px;"> <?php echo $dob;    ?></b></p>
            <p style="margin-left: 50px;">City :        <b style="margin-left:130px;"> <?php echo $city;    ?></b></p>
             <p style="margin-left: 50px;">Username :   <b style="margin-left:90px;">   <?php echo $username;    ?></b></p>
            <p style="margin-left: 50px;">Phone :           <b style="margin-left:115px;"> <?php echo $phone;  ?></b></p>   
            <p style="margin-left: 50px;">Email Address :    <b style="margin-left:68px;"> <?php echo $email;  ?></b></p>
             
                      

                
            
<?php }
?>
<img src="images/b.png"/>
<a href="update.php?id=<?php echo $userid; ?>" class="editbtn" style="color: black;">Edit  profile</a>
<a href="message.php?id=<?php echo $userid; ?>" class="msgbtn" style="color: black;">View Message</a>
</div>


<div class="footer" style="margin-top: 70px;">
        <ul>
    Quick Links
<li><a  href="home.php">Home</a></li>
<li><a href="order.php">Request for Maid</a></li>
<li><a href="search.php">Search for Maid</a></li>
<li><a href="contact.php">Contact us</a></li>
<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
</ul>
</div>
 
</div>
</body>
</html>