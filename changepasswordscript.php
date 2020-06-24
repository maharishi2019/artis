<?php
    session_start(); 
    $oldpassword = $_POST["oldpassword"]; 
    $newpassword = $_POST["newpassword"]; 
    $connection = new mysqli("localhost", "root", "", "artis"); 
    if($connection->connect_error){
        die("Connection failed" . $connection->connect_error); 
    }
    $query = "SELECT username, user_password FROM user_table WHERE username='".$_SESSION["username"]."'"; 
    $result = $connection->query($query); 
    $row = $result->fetch_assoc(); 
    if($row["user_password"] == $oldpassword){
        $sql = "UPDATE user_table SET user_password='$newpassword' WHERE username='".$_SESSION["username"]."'"; 
        if($connection->query($sql) === true){
            header("Location: index.php"); 
        }else{
            echo "Failed ".$connection->error; 
        }
    }else{
        echo "Old password doesn't match account!"; 
    }
?>