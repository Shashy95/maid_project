<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location:index.php");
  exit();
}

$msg='';

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}

if(isset($_POST['submit']))
{

$name=$_POST['username'];
$msg=$_POST['message'];

$select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

$sql="INSERT INTO selection(username,message)
VALUES('$_SESSION[username]','$msg')";

 $result = mysqli_query($connection,$sql);

             if(!$result) 
        {  
            echo mysql_error();
        }
        
        else{
          echo "<script>alert('Request sent successfully')</script>";
        }
}
?>       

