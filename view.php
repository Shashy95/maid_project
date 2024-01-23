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
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="view.css" type="text/css">
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



<p><a href="javascript:history.go(-1)" title="Return to the previous Page">&laquo; Go back to the previous page</a></p>
<div class="view">
<div class="left">

<?php
 $connection = mysqli_connect('localhost', 'root', '');
 $select_db = mysqli_select_db($connection,'maids');



$maid_id=$_GET['id'];
$query="SELECT *FROM list WHERE id=$maid_id";
        $result = mysqli_query($connection,$query);


    while($row=mysqli_fetch_array($result))
        {
             $maid_img=$row[1];
            $maid_id=$row[2];
            $maid_name=$row[3];
            $maid_age=$row[4];
            $maid_status=$row[5];
            $maid_spec=$row[6];
            $maid_region=$row[7];
            $maid_exp=$row[8];
            $maid_children=$row[9];
            $maid_dis=$row[10];
        

           ?>

            <div class="img">
          <p><img src="admin/uploads/<?php echo $row[1]; ?>" width="200px" height="200px"></p>
        </div>
        <div class="details">
            <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
               
</div>

<div class="more"><b>OTHER INFORMATION</b></div>
<?php echo $maid_dis;  ?></br/>

</div>

<div id="popup">
<?php include('select.php');?>

 <form action=" "method="post" id="sel">

<p><textarea placeholder="SEND MESSAGE IF YOU ARE INTERESTED IN HER TOGETHER WITH HER ID NUMBER" name="message"></textarea></p>

     <p> <input type="submit" name="submit" value="Submit" id="submitbtn"></p>
  </form> 
</div>


<?php } 
?>

</div>
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
</body>
</html>