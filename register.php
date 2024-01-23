<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="register.css" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui-1.12.1.css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

</head>
<body style="background: url(images/0.jpg)">

<?php
 $errors = '';
 $errors = array();

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}

  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

   
    
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
    }}

if (isset($_POST['submit'])){

if(count($errors) === 0){
     $title = ($_POST['title']) ;
    $fname = ($_POST['fname']) ;
    $lname = ($_POST['lname']) ;
    $dob = ($_POST['dob']) ;
    $city = ($_POST['city']) ;
    $username = ($_POST['username']) ;
     $password = ($_POST['password']);
      $phone = ($_POST['phone']);
    $email = ($_POST['email']);
   


       $check_name_query="SELECT * FROM register WHERE username='$username'";
    $run_query=mysqli_query($connection,$check_name_query);
     $num_row = mysqli_num_rows($run_query);
        if($num_row >= 1)
    {
    echo "<div class='form'>
Username $username  already exist in our database, Please try again!
<br/>Click here to <a href='register.php'> register</a></div>";
exit();
}


        $query = "INSERT into register (title,fname,lname,dob,city,username, password,phone, email)
VALUES ('$title','$fname','$lname','$dob','$city','$username', '$password','$phone', '$email')";
        $result = mysqli_query($connection,$query);

        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
}
        
    }
}


?>
<div class="form">
<form action="" id="form" method="post">
<h2>Register</h2>
<hr>

<br><label>Title</label><br/>
<select id="title" name="title">
<option value=" " > --Choose--</option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
</select><br/>

<br/><label>First Name</label><br/>
<input type="text" placeholder="John" name="fname" required="required" id="name">


<br/><label>Last Name</label><br/>
<input type="text" placeholder="Michael" name="lname" required="required" id="name">
<?php if(isset($errors['fname'])){echo "<h5>" .$errors['fname']. "</h5>"; } ?>

<br/><label>Date of Birth</label><br/>
<input type="date" placeholder="1960-01-31" name="dob" required="required" ><br/>

<br/><label>City</label><br/>
<input type="text" placeholder="Arusha" name="city" required="required" >
<?php echo "<h5>" .$errors['city']. "</h5>";  ?>

 <label>Username</label><br/>
<input type="text" placeholder="John69" name="username" required="required" id="username"><br/>
 
<br/><label>Password</label><br/>
<input type="password" placeholder="*********" name="password" required="required" id="password"><br/>
        
<br/><label>Phone</label><br/>
<input type="tel" placeholder="0713000000" name="phone"  id="phone" required="required">
<?php echo "<h5>" .$errors['phone']. "</h5>";  ?>
       
<br/><label>Email</label><br/>
<input type="email" placeholder="myaccount@example.com" name="email"  id="email" required="required" > 
<?php echo "<h5>" .$errors['email']. "</h5>";  ?>

<p><input type="submit" name="submit" id="registerbtn"value="Register" /></p>
</form>
</div>
 ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</body>
</html>