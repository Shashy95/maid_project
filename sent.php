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
<style type="text/css">
  h4{
    font-weight: bold;
  }
.mytable{
        
        margin:0 auto;
        width:700px;
        height: 500px;
    }

</style>

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

<p><a href="javascript:history.go(-1)" title="Return to the previous Page">&laquo; Go back to the previous page</a></p>


           
  



<div class="mytable">
<h2 align="center" >Messages-Outbox</h2>

<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids'); 

        $sql="SELECT id FROM  pm WHERE username='$_SESSION[username]'";
        $fetch=mysqli_query($connection, $sql);
        $inbox = $fetch->num_rows;
        ?>
       <a href="message.php">Inbox(<?php echo"$inbox"; ?>)</a>
      

<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids'); 

        $sql="SELECT id FROM  reply WHERE username='$_SESSION[username]'";
        $fetch=mysqli_query($connection, $sql);
        $sent = $fetch->num_rows;
        ?>
     <a href="sent.php">Sent Messages(<?php echo"$sent"; ?>)</a>
    <table  class="table table-striped table-bordered table-hover" id="dataTables-example">

    
    <tbody>

        <?php
  $connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


    $query="SELECT * from reply WHERE username='".$_SESSION['username']."'";
    $result=mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($result))
        {  

          $user_id=$row[0];
            $user_title=$row[1];
            $user_name=$row[2];
            $user_msg=$row[3];
?>
          <tr>
            <td><h4><?php echo $user_title;  ?></h4>
                <?php echo $user_msg;  ?><br/>
            <a href="delete.php?id=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to delete');">Delete Message</a>&nbsp&nbsp
            
          </td>
        </tr>
          
              
        <?php } ?>
</tbody>
    </table>

    <script src="table/jquery.min.js"></script>
    <script src="table/jquery.dataTables.min.js"></script>
    <script src="table/dataTables.bootstrap.min.js"></script>
    <script src="table/dataTables.responsive.js"></script>
    <script src="table/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</div>

<div class="footer" style="margin-top: px;">
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