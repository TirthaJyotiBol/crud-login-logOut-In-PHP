<?php
session_start();


include 'connection.php' 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in here</title>
    <style>  input { margin : 0.4cm;}  button{ margin-left: 6cm;} </style>
</head>
<body>
    <h1>LOG IN</h1>

    <form method="post">
        email <input type="text" name="email" >
        password <input type="text" name="password"> 
        <br> <br>
        <button name="submit"> LOG IN </button>

        <button><a href="signup.php">Sign UP</a></button>
    </form>

   <?php if(isset($_POST['submit']))
   { 
       $email = $_POST['email'];
       $password=$_POST['password'];

       $selectquery ="SELECT * FROM `registration` WHERE email='$email' ";
       $result = mysqli_query($conn,$selectquery);
       $mailcount = mysqli_num_rows($result);

       if($mailcount){
           $emailpass= mysqli_fetch_assoc($result);
           $searchAssoc = $emailpass['password'];
           $_SESSION['name']=$emailpass['name'];    //this could be used anywhere in the website [session]
           $decodepassword = password_verify($password,$searchAssoc);
           if($decodepassword){
               echo"Login successful";
               header('location:aftersignup.php');
           }
           else {
               echo"login failed , check your password";
           }


       }
       else{
           echo"you need to register first";
       }

    }
    ?>
    
</body>
</html>