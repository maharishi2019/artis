<?php
    session_start(); 
    $connection = new mysqli($_SESSION["sql_hostname"], $_SESSION["sql_username"], $_SESSION["sql_password"], $_SESSION["database_name"]);
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