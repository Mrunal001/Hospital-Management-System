<?php
/*session_start();
if(!isset($_SESSION['id'])){header("Location:login.php"); exit;}*/
include'config.php';
$id=$_REQUEST['id'];
$query = "DELETE FROM treatment WHERE treatment_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view_treatment_type.php"); 
?>