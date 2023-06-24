<?php
include 'config.php';
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];

    $sql="insert into users1 (username,email) 
    values('$username','$email')";
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "<script>alert('Data inserted sucsessfully');
       window.location='index.php'</script>";
       
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>document</title>
    <style>
    body{background-color: #34495E;}
    </style>
  </head>
  
  <center><h2>register</h2></center>
  <body>
    <div class= "container my-5">
    <form method="post">

    <div class="form-group">  
    <label>Username</label>
    <input type="text" class="form-control" 
    placeholder="Enter your username" name="username" autocomplete="off">
  </div>  

  <div class="form-group">
    <label>email</label>
    <input type="text" class="form-control" 
    placeholder="Enter your email" name="email">
  </div><br>

  <button type="submit" class="btn btn-primary" name="submit"> <a href="index.php"></a> Submit</button>
</form>

    </div>

  </body>
</html>