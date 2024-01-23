<?php
session_start();
if(!isset($_SESSION["admin_name"])){
  header("Location:admin_login.php");
  exit();
}

$id=$_GET['id'];

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


    
</style>
</head>

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
  
   
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


    $query ="SELECT *FROM list WHERE id='$id'";
    $result= mysqli_query($connection,$query);

     $row=mysqli_fetch_array($result);
     



$errors = array();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(!(preg_match("/[0-9]/",$_POST['identity']))){
        $errors['age']="*Not a valid number";
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

if (isset($_POST['submit'])) {
if(count($errors) === 0){ 

  $id=$_REQUEST['id'];

$img=$_FILES["img"]["name"];

  if($img=="")
  { 
    $query = "update list set  identity='".$_POST['identity']."',fname='".$_POST['fname']."', age='".$_POST['age']."', status='".($_POST['status'])."', specialization='".$_POST['specialization']."', region='".$_POST['region']."', experience='".$_POST['experience']."',children='".$_POST['children']."', description='".$_POST['description']."' where id='$id'";

    $result = mysqli_query($connection,$query);
        if($result==true){
        header('location:manage.php');
  }
    
  }
  else{
$file=$_FILES['img']['tmp_name'];
$image = $_FILES["img"] ["name"];
$image_name= addslashes($_FILES['img']['name']);

$img=$_FILES["img"]["name"];


    $query = "update list set img='$img', identity='".$_POST['identity']."',fname='".$_POST['fname']."', age='".$_POST['age']."', status='".($_POST['status'])."', specialization='".$_POST['specialization']."', region='".$_POST['region']."', experience='".$_POST['experience']."',children='".$_POST['children']."', description='".$_POST['description']."' where id='$id'";

        $result = mysqli_query($connection,$query);
        if($result==true){
        header('location:manage.php');
  }
     } 
    }
    }      
    }    
    ?>
            

 <div class="">
  <h3>Update Maids</h3>
      <form method="post" class="create" enctype="multipart/form-data">

         <p> <img src="uploads/<?php echo $row[1]; ?>" width="100px" height="100px">  
     <input type="file"  id="img" name="img"  onchange="validateImage()"   value="<?php echo$row[1]; ?>"/></p>

      <p><label for="id">Maid Id </label><br/>
      <span><input id="identity" name="identity" type="text" required="required" value="<?php echo$row[2]; ?>" /></span></p>
<?php echo "<h5>" .$errors['identity']. "</h5>"; ?>

      <p><label for="name"> Name </label><br/>
      <span><input id="name" name="fname" type="text" required="required" value="<?php echo$row[3]; ?>"/></span></p>
      <?php echo "<h5>" .$errors['fname']. "</h5>"; ?>

       <p><label for="age">Age </label><br/>
      <span><input type="text" id="age" name="age"value="<?php echo$row[4]; ?>"></span></p>
      <?php echo "<h5>" .$errors['age']. "</h5>"; ?>

  <p><label for="marital_status">Marital Status</label><br/>
      <span><input id="marital status" name="status" type="text" required="required" value="<?php echo$row[5]; ?>"></span></p><?php echo "<h5>" .$errors['status']. "</h5>"; ?>

         <p><label for="specialization">Specialization </label><br/>
      <span><input type="text" name="specialization" value="<?php echo$row[6]; ?>"></span></p>
      <?php echo "<h5>" .$errors['specialization']. "</h5>"; ?>

    <p><label for="city">Region </label><br/>
      <span><input id="city" name="region" type="text" required="required" value="<?php echo$row[7]; ?>" /></span></p>
      <?php echo "<h5>" .$errors['region']. "</h5>"; ?>

       <p><label for="noofexperience">Number of times she has worked</label><br>
        <span><input type="text" id="experience" name="experience" value="<?php echo$row[8]; ?>"></span></p>
        <?php echo "<h5>" .$errors['experience']. "</h5>"; ?>

        <p><label for="children">How many children do you have</label><br>
        <span><input type="text" name="children" id="children" name="children" value="<?php echo$row[9]; ?>"></span></p>
        <?php echo "<h5>" .$errors['children']. "</h5>"; ?>

<p><label for="description">Brief Information about the maid </label><br/>
        <span><textarea name="description" required="required"><?php echo$row[10]; ?></textarea></span></p>

  <input type="submit" name="submit" value="Update" class="craetebtn">
        </form> 
          </div>

     <div class="footer">

<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
   
</div>        

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


</div>
</body>
</html>
 