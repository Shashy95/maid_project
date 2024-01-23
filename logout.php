<?php
session_start(); 

if(session_destroy())
{// destroy session
header("location:index.php"); 
}
?>
