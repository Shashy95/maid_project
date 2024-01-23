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


<div class="mytable">
<h2 align="center" >Messages-Outbox</h2>

<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids'); 

        $sql="SELECT id FROM  reply  ";
        $fetch=mysqli_query($connection, $sql);
        $inbox = $fetch->num_rows;
        ?>
       <a href="reply.php">Inbox(<?php echo"$inbox"; ?>)</a>


<?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids'); 

        $sql="SELECT id FROM  pm";
        $fetch=mysqli_query($connection, $sql);
        $sent = $fetch->num_rows;
        ?>
     <a href="">Sent Messages(<?php echo"$sent"; ?>)</a>
    
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>  
        <tr>
            <th>#</th>
            <th> Title</th>
            <th>Username</th>
              <th>Message</th> 
              <th>Action</th>  
        </tr>
      </thead>
    
    <tbody>
        <?php
  
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids');
        $view_query="select * from pm";
        $run=mysqli_query($connection,$view_query);
        while($row=mysqli_fetch_array($run))
        {
            $user_id=$row[0];
            $user_title=$row[1];
            $user_name=$row[2];
            $user_msg=$row[3];
        ?>

        <tr>
            <td><?php echo $user_id;  ?></td>
              <td><?php echo $user_title;  ?></td>
                <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_msg;  ?></td> 
            <td>
            <a href="delete.php?id=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to delete');"><img src="images/t.jpeg"></a>

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

      <div class="footer">

<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
   
</div>
        </div>
</body>

</html>
