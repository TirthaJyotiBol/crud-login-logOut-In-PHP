<?php include 'conn.php' ;

$id=$_GET['id'];
$que = "DELETE FROM `crudtable` WHERE id=$id ";
mysqli_query($conn,$que);
header('location:display.php');
?>