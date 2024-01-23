<?php
 $connection = mysqli_connect('localhost', 'root', '');
 $select_db = mysqli_select_db($connection,'maids');

$delete_id=$_GET['id'];
        $result = mysqli_query($connection,"DELETE FROM register WHERE id=$delete_id"); 
        header("Location: view_users.php");

?>

<?php
 $connection = mysqli_connect('localhost', 'root', '');
 $select_db = mysqli_select_db($connection,'maids');

$delete_id=$_GET['id'];
        $result = mysqli_query($connection,"DELETE FROM selection WHERE id=$delete_id"); 
        header("Location: view_sel.php");

?>

<?php
 $connection = mysqli_connect('localhost', 'root', '');
 $select_db = mysqli_select_db($connection,'maids');

$delete_id=$_GET['id'];
        $result = mysqli_query($connection,"DELETE FROM contact WHERE id=$delete_id"); 
        header("Location: view_msg.php");

?>
<?php
 $connection = mysqli_connect('localhost', 'root', '');
 $select_db = mysqli_select_db($connection,'maids');

$delete_id=$_GET['id'];
        $result = mysqli_query($connection,"DELETE FROM list WHERE id=$delete_id"); 
        header("Location: manage.php");

?>