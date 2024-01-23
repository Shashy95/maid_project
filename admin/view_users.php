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
        margin-top:75px;
        width:1050px;
    }

    
</style>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
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



     <p><h2 align="center">Registered Users</h2>
        
<div class="mytable">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>


              <th>#</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>City</th>
            <th>Username</th>
            <th>Phone no</th>
            <th>E-mail</th>
            <th>Action</th>
        </tr>
                </thead>
                <tbody>
        <?php
       $connection = mysqli_connect('localhost', 'root', '');
        $select_db = mysqli_select_db($connection,'maids');

       
        $view_users_query="select * from register";//select query for viewing users.
        $run=mysqli_query($connection,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_title=$row[1];
            $user_fname=$row[2];
            $user_lname=$row[3];
            $user_dob=$row[4];
            $user_city=$row[5];
            $user_username=$row[6];
            $user_phone=$row[8];
            $user_email=$row[9];
        ?>

                    <tr>
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_title;  ?></td>
            <td><?php echo $user_fname;  ?></td>
             <td><?php echo $user_lname;  ?></td>
              <td><?php echo $user_dob;  ?></td>
              <td><?php echo $user_city;  ?></td>
               <td><?php echo $user_username;  ?></td>
                <td><?php echo $user_phone;  ?></td>
            <td><?php echo $user_email;  ?></td>
                    <td>
                       
<a href="delete.php?id=<?php echo $row["0"]; ?>" onclick="return confirm('Are you sure you want to delete');"><img src ="images/t.jpeg"></a>
                        </td>
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