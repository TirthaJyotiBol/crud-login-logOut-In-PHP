<?php
 session_start();
 if(!$_SESSION['name']){
     header('location:login.php');
 }

include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> after sign up display name here</title>
</head>
<body>

<h1 id="displayhere" > <?php echo $_SESSION['name'];  ?>   </h1>
<button><a href="logout.php">logout</a> </button>

    
</body>
</html>
