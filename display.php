<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Display</title>
  </head>
  <body>
    <h1>Display Data </h1>
    <a href="insert.php">insert</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



    <table class="table">
  <thead>
    <tr>
      <th scope="">#</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>

  <?php
   include 'conn.php'; 
  $q = " SELECT * from `crudtable` ";
  $query = mysqli_query($conn,$q);
  while($res = mysqli_fetch_array($query))
  {
  ?>
    <tr>
      <td><?php echo $res['id'] ;?></td>
      <td><?php echo $res['username']; ?></td>
      <td> <?php echo $res['password'] ;?></td>
      <td> <button > <a href="delete.php?id=<?php echo $res['id'] ;?>"> Delete </a> </button> </td>
      <td> <button> <a href="update.php?id=<?php echo $res['id'] ;?>">Update </a> </button> </td>
    </tr>


    <?php  }  ?>
   
  </tbody>
</table>

  </body>
</html>




