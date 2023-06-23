
<?php 
include "config.php";
$sql = "SELECT * FROM users2";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     
	<title>Measurement Conversion</title>
    <style>
    body{background-color: #34495E;}
    
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
<div class="container">
        <h2>Users</h2>
<table class="table">
    <thead>
        <tr>
       
        <th>UserName</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows ) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['username']; ?>">Delete</a></td>                  
                    </tr>

        <?php       }

            }
        ?>                
    </tbody>
</table>
    </div> 
</body>
</html>