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

<p><a href="javascript:history.go(-1)" title="Return to the previous Page">&laquo; Go back to the previous page</a></p>

<?php


$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}

       
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

 

    $errors = array();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    	if(!(preg_match("/[A-Za-z]/", $_POST['title']))){
        $errors['title'] = "* Not a valid title.";
    }
    
   if(!(preg_match("/[A-Za-z]/", $_POST['username']))){
        $errors['username'] = "* Not a valid name.";
    }
 
    


if(isset($_POST['submit'])){
if(count($errors) === 0){

        $title = $_POST['title'];
        $user = $_POST['username'];
        $msg = $_POST['message'];

 

        $query = "INSERT INTO pm(title,username,message) 
                  VALUES ('$title','$user','$msg')";
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

<div class="" style="margin-left: 280px;">
<div class="">
<form action="" method="post">
<h2 align="center"></h2>

    <label>Title</label><br/>
    <input type="text" id="title" name="title" placeholder=""><br/>
    <?php echo "<h5>" .$errors['title']. "</h5>";  ?>

    <label>Username</label><br/>
    <input type="text" id="username" name="username" placeholder=""  value="<?php echo$_SESSION[username]; ?>"><br/>
    <?php echo "<h5>" .$errors['username']. "</h5>";  ?>


    <label>Message</label><br/>
    <textarea id="msg" name="message" placeholder="Write something.." style="height:150px;" ></textarea><br/>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>
</div>


<div class="footer">

<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
   
</div>
        </div>
</body>

</html>
 
</div>			
</body>
</html>

		