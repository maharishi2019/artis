<?php
    session_start(); 
    $title = $_POST["post_title"]; 
    $connection = new mysqli($_SESSION["sql_hostname"], $_SESSION["sql_username"], $_SESSION["sql_password"], $_SESSION["database_name"]); 
    if($connection->connect_error){
        die("Connection failed" . $connection->connect_error); 
    }
    $sql = "DELETE FROM `".$_SESSION["username"]."` WHERE post_name='$title'"; 
    if($connection->query($sql) === true){
        echo "Success"; 
    }else{
        echo "Connection failed" . $connection->error; 
    }
    header("Location: post.php"); 
?>