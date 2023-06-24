<?php 
include "config.php";
    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        
        
        $sql = "UPDATE `users2` SET `username`='$username',`email`='$email', WHERE `username`='$username'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users2` WHERE `id`='$username'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $username = $row['username'];

            $email = $row['email'];

        

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Username:<br>

            <input type="text" name="username" value="<?php echo $username; ?>">


            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: web.php');

    } 

}

?> 