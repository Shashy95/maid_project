<?php
 $connection = mysqli_connect('localhost', 'root', '');
 $select_db = mysqli_select_db($connection,'maids');

$delete_id=$_GET['id'];
        $result = mysqli_query($connection,"DELETE FROM pm WHERE id=$delete_id"); 
        header("Location: message.php");

?>

<?php
 $connection = mysqli_connect('localhost', 'root', '');
 $select_db = mysqli_select_db($connection,'maids');

$delete_id=$_GET['id'];
        $result = mysqli_query($connection,"DELETE FROM pm WHERE id=$delete_id"); 
        header("Location: sent.php");

?>

