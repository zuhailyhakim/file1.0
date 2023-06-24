<?php
include 'config.php';
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];

    $sql="insert into users2 (username,email) 
    values('$username','$email')";
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "<script>alert('Data inserted sucsessfully');
       window.location='web.php'</script>";
       
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <style>
    body{background-color: #34495E};
    button{color: black};
    </style>
</head>
<body>
<center><h2>login</h2></center>

<div class= "container my-5">
    <form method="post">

<div class="form-group">  

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

  <button type="submit" class="btn btn-primary" name="submit" value="submit"> <a href="index.php"></a>Submit</button>
  <button type="create" class="btn btn-primary" name="create" value="create"><a href="user.php">create</a></button>
</form> 
</body>
</html>