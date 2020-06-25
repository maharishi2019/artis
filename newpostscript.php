<?php
    session_start(); 
    $title = $_POST["post_title"]; 
    $description = $_POST["post_description"]; 
    $connection = new mysqli($_SESSION["sql_hostname"], $_SESSION["sql_username"], $_SESSION["sql_password"], $_SESSION["database_name"]); 
    if($connection->connect_error){
        die("Connection failed" . $connection->connect_error); 
    }
    $sql = "INSERT INTO `".$_SESSION["username"]."` (post_name, post_description) VALUES ('$title', '$description')"; 
    if($connection->query($sql) === true){
        echo "Success"; 
    }else{
        echo "Connection failed" . $connection->error; 
    }
    header("Location: post.php"); 
?>