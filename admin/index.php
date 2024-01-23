    <?php
        session_start();
if(!isset($_SESSION["admin_name"])){
  header("Location:admin_login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<head>
<link href="table/bootstrap.min.css" rel="stylesheet">
<link href="table/dataTables.bootstrap.css" rel="stylesheet">
<link href="table/dataTables.responsive.css" rel="stylesheet">
<link href="home.css" rel="stylesheet">
  <style>

.mytable{
        margin-left:130px;
        margin-top:30px;
        width:1000px;
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
 <a href="view_msg.php" >Queries</a> 
 <a href="reply.php" >Messages</a>
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


<div>
<p><h2 align="center">DASHBOARD </h2></p>	
</div>


<div class="panel">
<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids');	

        $sql="SELECT id FROM  register";
        $fetch=mysqli_query($connection, $sql);
        $count = $fetch->num_rows;
        ?>

     <div class="tile">
      <h2 align="center"> <?php echo"$count"; ?></h2>
       <h2 align="center">REG USERS</h2>
    </div>
           
	
<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids');	

        $sql="SELECT id FROM  request";
        $fetch=mysqli_query($connection, $sql);
        $count = $fetch->num_rows;
        ?>

        <div class="tile2">
      <h2 align="center"> <?php echo"$count"; ?></h2>
       <h2 align="center">RECEIVED REQUEST</h2>
    </div>
        
           	

<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids');	

        $sql="SELECT id FROM  contact";
        $fetch=mysqli_query($connection, $sql);
        $count = $fetch->num_rows;
        ?>
        <div class="tile3">
      <h2 align="center"> <?php echo"$count"; ?></h2>
       <h2 align="center">QUERIES</h2>
    </div>
        
           	

<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids');	

        $sql="SELECT id FROM  list";
        $fetch=mysqli_query($connection, $sql);
        $count = $fetch->num_rows;
        ?>
        
        <div class="tile4">
      <h2 align="center"> <?php echo"$count"; ?></h2>
       <h2 align="center">POSTED MAIDS</h2>
    </div>
  
  <?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids'); 

        $sql="SELECT id FROM  selection";
        $fetch=mysqli_query($connection, $sql);
        $count = $fetch->num_rows;
        ?>
        
        <div class="tile5">
      <h2 align="center"> <?php echo"$count"; ?></h2>
       <h2 align="center">SELECTED MAIDS</h2>
    </div>         	

 <?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids'); 

        $sql="SELECT id FROM  reply";
        $fetch=mysqli_query($connection, $sql);
        $count = $fetch->num_rows;
        ?>
        
        <div class="tile6">
      <h2 align="center"> <?php echo"$count"; ?></h2>
       <h2 align="center">MESSAGES</h2>
    </div>

<div class="footer">

<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
   
</div>
</body>
</html>



