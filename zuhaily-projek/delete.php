<?php 
include "config.php"; 
if (isset($_GET['email'])) {
    $user_id = $_GET['email'];
    $sql = "DELETE FROM `users2` WHERE `id`='$user_email'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "record deleted successfully";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>