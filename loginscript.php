<?php
    session_start(); 
    $username = $_POST["username"]; 
    $_SESSION["username"] = $username; 
    $_SESSION["loggedin"] = true; 
    $password = $_POST["password"]; 
    $connection = new mysqli($_SESSION["sql_hostname"], $_SESSION["sql_username"], $_SESSION["sql_password"], $_SESSION["database_name"]);
    if($connection->connect_error){
        die("Connection failed " . $connection->connect_error); 
    }
    $sql = "SELECT username, user_password FROM user_table WHERE username='".$username."'"; 
    $result = $connection->query($sql); 
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($username == $row["username"] && $password == $row["user_password"]){
                header("Location: index.php"); 
                exit(); 
            }
        }
    }
    session_destroy(); 
    header("Location: login.php"); 
?>