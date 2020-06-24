<?php
    session_start(); 
    $connection = new mysqli("localhost", "root", "", "artis"); 
    if($connection->connect_error){
        die("Connection failed " . $connection->connect_error); 
    }
    $sql = "DELETE FROM user_table WHERE username='".$_SESSION["username"]."'"; 
    if($connection->query($sql) === true){
        echo "Success"; 
    }else{
        echo "Failed"; 
    }
    $sql = "DROP TABLE `".$_SESSION["username"]."`"; 
    if($connection->query($sql) === true){
        echo "Success"; 
    }else{
        echo "Failed"; 
    }
    session_destroy(); 
    header("Location: index.php"); 
?>