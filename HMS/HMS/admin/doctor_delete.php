<?php
session_start();
if(!isset($_SESSION['id'])){header("Location:admin_login.php"); exit;}
include'config.php';
$id=$_REQUEST['id'];
$query = "DELETE FROM doctor WHERE doctor_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view_doctor.php"); 
?>