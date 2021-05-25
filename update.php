<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Update</title>

    <style>
    div{
        margin-top : 3cm;
        margin-left:4cm;
    }
    .password{
         margin-left : 5px;
         margin-top : 0.61cm;
    }
    </style>

  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<h2>Update</h2>
   <form method="post">
   <div> 
   <label>Username</label>
   <input type="text" class="name" name="username"> <br>
   <label> Password </label>
   <input type="text" class="password" name="password"> <br>
   <button type="submit" value="submit" name="submit">submit</button> <br>
   <a href="display.php">Display</a>
   </div>
   </form> 
  </body>
</html>

<?php
     include 'conn.php';
     
if(isset($_POST['submit']))
{
    $id=$_GET['id'];
    $username =$_POST['username'];
    $password =$_POST['password'];

    $q =" UPDATE `crudtable` SET id=$id, username='$username',password='$password' WHERE id=$id ";
    $query = mysqli_query($conn,$q);

    header('location:display.php');

}

?>