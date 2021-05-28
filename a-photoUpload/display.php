<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Degree</th>
      <th scope="col">Language</th>
      <th scope="col">Picture</th>
    </tr>
  </thead>

  <tbody>
  
  
  
  </tbody>
  <?php include 'connections.php' ;
  $select =" SELECT * FROM `registration` ";
  $query=mysqli_query($conn,$select);
  
  while($result=mysqli_fetch_assoc($query)){

    ?>     
    <tr>
    <td> <?php echo $result['id'];?></td>
    <td> <?php echo $result['username'];?></td>
    <td> <?php echo $result['email'];?></td>
    <td> <?php echo $result['degree'];?></td>
    <td> <?php echo $result['language'];?></td>
    <td><img src="<?php echo $result['pic'];?>" alt="x" width="100px" height="100px"> </td>
    </tr>
     <?php

  }
  
  
  ?>

</table>

<a href="form.php"> <button> Registration </button> </a> <br> <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>