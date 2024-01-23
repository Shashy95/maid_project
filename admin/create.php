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
<link href="home.css" rel="stylesheet">
<script type="text/javascript">
  function validateImage() {
    var formData = new FormData();
 
    var file = document.getElementById("img").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}

</script>
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

<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
 


$errors = array();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

       if(!(preg_match("/[0-9]/",$_POST['identity']))){
        $errors['identity']="*Not a valid number";
    }
    
   if(!(preg_match("/[A-Za-z]/", $_POST['fname']))){
        $errors['fname'] = "* Not a valid name.";
    }
    if(!(preg_match("/[0-9]/",$_POST['age']))){
        $errors['age']="*Not a valid phone number and age must contain 2 characters";
    }
    if(!(preg_match("/[A-Za-z]/", $_POST['status']))){
        $errors['status'] = "* Not a valid status.";
    }
 if(!(preg_match("/[A-Za-z]/", $_POST['specialization']))){
        $errors['specialization'] = "* Not a valid specialization.";
    }

if(!(preg_match("/[A-Za-z]/",$_POST['region']))){
        $errors['region']="*Not a valid region";
}

 if(!(preg_match("/[0-9]/",$_POST['experience']))){
        $errors['experience']="*Not a valid number";
    }


     if(!(preg_match("/[0-9]/",$_POST['children']))){
        $errors['children']="*Not a valid number";
    } 

if(isset($_POST['submit'])){
if(count($errors) === 0){
$file=$_FILES['img']['tmp_name'];
$image = $_FILES["img"] ["name"];
$image_name= addslashes($_FILES['img']['name']);
move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/" . $_FILES["img"]["name"]);

$img=$_FILES["img"]["name"];
$identity=$_POST['identity'];
$name=$_POST['fname'];
$age=$_POST['age'];	
$status=$_POST['status'];
$spec=$_POST['specialization'];	
$region=$_POST['region'];
$exp=$_POST['experience'];
$children=$_POST['children'];
$desc=$_POST['description'];


$select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

$sql="INSERT INTO list(img,identity,fname,age,status,specialization,region,experience,children,description)
VALUES('$img','$identity','$name','$age','$status','$spec','$region','$exp','$children','$desc')";

 $result = mysqli_query($connection,$sql);

             if(!$result) 
        {  
            echo mysql_error();
        }
        
        else{
            echo "<script>alert('Created Successfully')</script>";
        }
}
}
}
?>					  

  <div class="create">
  <h2>Create Maids</h2>
  	         	<form method="post" action="" enctype="multipart/form-data" >
     <p><label for="image">Maid image<em></em></label><br> 
      <span><input type="file"  id="img" name="img" required="required" onchange="validateImage()"/></span></p>

  	  <p><label for="id">Maid Id <em></em></label><br/>
      <span id="p6"><input id="identity" name="identity" type="text" required="required" /></span></p>
      <?php echo "<h5>" .$errors['identity']. "</h5>"; ?>

  	  <p><label for="name"> Name <em></em></label><br/>
      <span><input id="name" name="fname" type="text" required="required" /></span></p>
      <?php echo "<h5>" .$errors['fname']. "</h5>"; ?>

       <p><label for="age">Age <em></em></label><br/>
     <p> <span><input type="text" id="age" name="age" required="required"></span></p>
     <?php echo "<h5>" .$errors['age']. "</h5>"; ?>

	<p><label for="marital_status">Marital Status<em></em></label><br/>
      <span><input id="marital status" name="status" type="text" required="required"></span></p>
      <?php echo "<h5>" .$errors['status']. "</h5>"; ?>

         <p><label for="specialization">Specialization <em></em></label><br/>
      <span><input type="text" name="specialization" required="required"></span></p>
      <?php echo "<h5>" .$errors['specialization']. "</h5>"; ?>

	  <p><label for="city">Region </label><br/>
      <span><input id="city" name="region" type="text" required="required" /></span></p>
      <?php echo "<h5>" .$errors['region']. "</h5>"; ?>

       <p><label for="noofexperience">Number of times you have worked</label><br/>
        <span><input type="text" id="experience" name="experience" required="required"></span></p>
        <?php echo "<h5>" .$errors['experience']. "</h5>"; ?>

      	<p><label for="children">Number of children </label><br/>
        <span><input type="text" name="children" id="children" required="required"></span></p>
        <?php echo "<h5>" .$errors['children']. "</h5>"; ?>

<p><label for="description">Brief Information about the maid </label><br/>
        <span><textarea name="description" required="required"></textarea></span></p>
     
    
      

	<input type="submit" name="submit" value="Create" class="createbtn">
						</form>
            </div>	
	
  <div class="footer">

<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
   
</div>				

</div>
</body>
</html>

