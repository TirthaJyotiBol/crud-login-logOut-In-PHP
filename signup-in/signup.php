<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <?php include 'connection.php' ?>
  <style>
    form {
      margin-left: 2cm;
      padding: 0.5cm;
    }

    form input {
      margin: 0.5cm;
    }
  </style>
  <title>Sign Up</title>
</head>

<body>
  <h1>Register-here</h1>
  <form method="POST">
    name <input type="text" class="name" name="name">
    email <input type="mail" name="email"> <br>
    password <input type="text" name="password">
    confirm <input type="text" name="confirmpassword"> <br>
    <button name="submit">Submit</button>
    <button ><a href="signin.php">Signin</a> </button>
  </form>

  <?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $encryptedpassword = password_hash($password,PASSWORD_BCRYPT);
    $encryptedconfirmpassword = password_hash($confirmpassword,PASSWORD_BCRYPT);
    $mailquery = "SELECT * FROM `registration` WHERE email = '$email' ";
    $result = mysqli_query($conn,$mailquery);
    $mailcount = mysqli_num_rows($result);
    if($mailcount > 0){
    echo"Email already exists";
}
    else{
    if($password===$confirmpassword){
        $insert = " INSERT INTO registration(`name`, `email`, `password`, `confirmpassword`)
        VALUES ('$name','$email','$encryptedpassword','$encryptedconfirmpassword') ";
        $query= mysqli_query($conn,$insert);
        echo"data inserted successfully";
    }
    else{
        echo" password is not matching ";
    }
}

  
    
    
   
}



?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>

</html>