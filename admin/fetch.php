<?php
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection,'maids');

if(isset($_GET['id'])){

$id=$_GET['id'];
$sql="select img from list where id='$id'";
$result=mysqli_query($connection,$sql);
 
 while ($row=mysqli_fetch_assoc($result)) {

 $a=$row['img'];

 }
 header('content-type:image/jpeg');
 echo $a;
}
?>
