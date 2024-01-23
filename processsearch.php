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
<a href="changepass.php"><span class="glyphicon glyphicon-arrow-left"></span>Change Password</a>
<a href="logout.php"><span class="glyphicon glyphicon-arrow-left"></span>Logout</a>
</div>
</div>
</div>


  <p><a href="javascript:history.go(-1)" title="Return to the previous Page">&laquo; Go back to the previous page</a></p>

<div class="main" style="height: 1500px; margin:0 auto; width: 900px;">
  <div class="display">

<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

  $limit = 6;
        /*How may adjacent page links should be shown on each side of the current page link.*/
      
        /*Get total number of records */
        $sql = "SELECT COUNT(*) AS 'total_rows' FROM list  ";
        $res = mysqli_fetch_object(mysqli_query($connection, $sql));
        $total_rows = $res->total_rows;
        /*Get the total number of pages.*/
        $totalpages = ceil($total_rows / $limit);
        
        
        if(isset($_GET['page']) && $_GET['page'] != "") {
            $page = $_GET['page'];
         
        }
         else {
          $page = 1;
          
        }

   
 $offset = $limit * ($page-1);


if (isset($_POST['specialization']) && empty($_POST['age']) && empty($_POST['region'])){
   $spec = $_POST['specialization'];
   $query="SELECT * FROM list where specialization LIKE '%$spec%' LIMIT $offset, $limit ";
$result=mysqli_query($connection,$query);
$count = $result->num_rows;

if($count>0){
////echo"<b>$count results found</b><hr>";
$num=1;
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

           <p style="float: left; width:  33.3%;"> 
          <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px""><br/>
              <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
               
             <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>           
</p>

<?php }
echo"<div class='pagination'>";
for($i=1;$i<=$totalpages;$i++){
if($i==$page){
  echo'<a class="active">'.$i.'</a>';
}
 else{
echo'<a href="processsearch.php?page='.$i.'">/'.$i.'</a>';
 }
}
echo"</div>";
}
  else{
  echo"<b>0 result found</b><hr>";
  }
}


else if (empty($_POST['specialization']) && isset($_POST['age']) && empty($_POST['region'])){
   $age = $_POST['age'];
$query="SELECT * FROM list where age BETWEEN $age LIMIT $offset, $limit";
$result=mysqli_query($connection,$query);
$count = $result->num_rows;

if($count>0){
//echo"<b>$count results found</b><hr>";
$num=1;
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

           <p style="float: left; width:  33.3.3%;"> 
          <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px""><br/>
              <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>         <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
               
             <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>           
</p>

<?php }
}
  else{
  echo"<b>0 result found</b><hr>";
  }
}

 else if (empty($_POST['specialization']) && empty($_POST['age']) && isset($_POST['region'])){
   $region = $_POST['region'];
$query="SELECT * FROM list where region='$region' LIMIT $offset, $limit";
$result=mysqli_query($connection,$query);
$count = $result->num_rows;

if($count>0){
//echo"<b>$count results found</b><hr>";
$num=1;
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

          <p style="float: left; width:  33.3%;"> 
          <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px""><br/>
              <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
               
             <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>           
</p>

<?php }
$num++;
}
  else{
  echo"<b>0 result found</b><hr>";
  }
}


else if (isset($_POST['specialization']) && isset($_POST['age']) && empty($_POST['region'])){
   $spec = $_POST['specialization'];
    $age = $_POST['age'];
$query="SELECT * FROM list where specialization LIKE '%$spec%' AND age BETWEEN $age LIMIT $offset, $limit";
$result=mysqli_query($connection,$query);
$count = $result->num_rows;

if($count>0){
//echo"<b>$count results found</b><hr>";
$num=1;
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

       <p style="float: left; width:  33.3%;"> 
          <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px""><br/>
              <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
               
             <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>           
</p>

<?php }
$num++;
}
  else{
  echo"<b>0 result found</b><hr>";
}
}


else if (empty($_POST['specialization']) && isset($_POST['age']) && isset($_POST['region'])){
   $age = $_POST['age']; 
  $region = $_POST['region'];

$query="SELECT * FROM list where region='$region' AND age BETWEEN $age LIMIT $offset, $limit";
$result=mysqli_query($connection,$query);
$count = $result->num_rows;

if($count>0){
//echo"<b>$count results found</b><hr>";
$num=1;
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

           <p style="float: left; width:  33.3%;"> 
          <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px""><br/>
              <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
               
             <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>           
</p>

<?php }
$num++;
}
  else{
  echo"<b>0 result found</b><hr>";
}
}

else if (isset($_POST['specialization']) && empty($_POST['age']) && isset($_POST['region'])){
   $spec = $_POST['specialization'];
    $region = $_POST['region'];

$query="SELECT * FROM list where specialization LIKE '%$spec%' AND region='$region' LIMIT $offset, $limit";
$result=mysqli_query($connection,$query);
$count = $result->num_rows;

if($count>0){
//echo"<b>$count results found</b><hr>";
$num=1;
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

           <p style="float: left; width:  33.3%;"> 
          <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px""><br/>
              <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
               
             <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>           
</p>

<?php }
$num++;
}
  else{
  echo"<b>0 result found</b><hr>";
}
}

else if (isset($_POST['specialization']) && isset($_POST['age']) && isset($_POST['region'])){
  $spec = $_POST['specialization']; 
  $age = $_POST['age']; 
  $region = $_POST['region']; 
   
  
$query="SELECT * FROM list where specialization LIKE '%$spec%' AND region='$region' AND age BETWEEN $age LIMIT $offset, $limit";

$result=mysqli_query($connection,$query);
$count = $result->num_rows;

if($count>0){
//echo"<b>$count results found</b><hr>";

$num=1;

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
<p style="float: left; width:33.3%;"> 
          <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px""><br/>
              <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b> Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
              
             <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>           
</p>

<?php }

$num++;

}
  else{
  echo"<b>0 result found</b><hr>";
  }
}
 
?>
</div>
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
