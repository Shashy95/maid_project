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
     <h2 align="center" >Manage Maids</h2>
     

    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
       
       <thead>
        <tr>   
        <th>Maid Id</th>
        <th> Full name</th>
        <th>Age</th>
        <th>Marital Status</th>
        <th>Specialization</th>
        <th>Region</th>
        <th>Number of times you have worked</th>
        <th>Children</th>
        <th>Action</th>     
        </tr>
        </thead>

        <tbody>
        <?php
        $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids');

        $view_query="select * from list";

      
        $run=mysqli_query($connection,$view_query);

        while($row=mysqli_fetch_array($run))
        { 
           $id = $row[0];
            $maid_id=$row[2];
            $maid_name=$row[3];
            $maid_age=$row[4];
            $maid_status=$row[5];
            $maid_spec=$row[6];
            $maid_region=$row[7];
            $maid_exp=$row[8];
            $maid_children=$row[9]; 
            //<?php echo"<img src='fetch.php?id=$row[1];?
            
        ?>

        <tr>
            
            <td><?php echo $maid_id;  ?></td>
            <td><?php echo $maid_name;  ?></td>
            <td><?php echo $maid_age;  ?></td>
            <td><?php echo $maid_status;  ?></td>
             <td><?php echo $maid_spec;  ?></td>
             <td><?php echo $maid_region;  ?></td>
               <td><?php echo $maid_exp;  ?></td>
               <td><?php echo $maid_children;  ?></td>
               <td>
<a href="edit.php?id=<?php echo $id; ?>"><img src="images/e.jpeg"></a>&nbsp&nbsp&nbsp&nbsp
<a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete');"><img src="images/t.jpeg"></a></td>  
       
        </tr>

        <?php } ?>

</tbody>
    </table>
</div>

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
