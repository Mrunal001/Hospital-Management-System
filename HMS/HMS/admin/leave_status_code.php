<?php
session_start();
if(!isset($_SESSION['doctor_id'])){header("Location:doctor_login.php"); exit;}
include'config.php';

$id=$_REQUEST['id'];
$type=$_REQUEST['type'];
$page=$_REQUEST['page'];

$update="update appointment set patient_status='".$type."' where appointment_id='".$id."'";

$strore = mysqli_query($conn, $update) or die(mysqli_error());
header("Location:".$page.".php"); 