<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<h2>Register</h2> <br> <br>
<form method="POST" enctype="multipart/form-data">
name <input type="text" name="name"> 
email <input type="mail" name="email"> 
Degree <input type="text" name="degree"> <br>
language <input type="text" name="language">
<input type="file" name="picture" id="file"> <br>
<button name="submit">Submit</button>
<br> <br> <br>
<button><a href="display.php"> Check Form</a> </button>


</form>
    
</body>
</html>

<?php include 'connections.php' ?>
<?php
if(isset($_POST['submit']))
{
    $username =$_POST['name'];
    $email =$_POST['email'];
    $degree =$_POST['degree'];
    $language =$_POST['language'];
    $file =$_FILES['picture'];  
    //  whenever you are delaing with pictures you have to write "FILES" instead of "POST" ;

    // print_r($file); 
    
    // After print_r we will get some details regarding the image .
    //  This image is stored in a temporary folder we have to move the image to a particular folder 
    //  and then fetch data from  that folder. 
  
    $filename=$file['name'];
    $filepath =$file['tmp_name'];
    $fileerror=$file['error'];
    if($fileerror==0){
        $destinationfile = 'upload/'.$filename;     //This Shows the destination file path
        // echo" $destinationfile";  this shows the path of the moved path 

        move_uploaded_file($filepath,$destinationfile);   //this moves the current FILEPATH to DESTINATION path;
        $insert =" INSERT INTO registration(username, email, degree, language, pic)
         VALUES ('$username','$email','$degree','$language','$destinationfile')";
         $query =mysqli_query($conn,$insert);

         if($query){
             echo"inserted";
         }
         if(!$query){
             echo"not inserted";
         }
    
    }



}



?>



