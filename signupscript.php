<?php 
    session_start(); 
    $username = $_POST["username"]; 
    $_SESSION["username"] = $username; 
    $password = $_POST["password"];
    $email = $_POST["email"]; 
    $_SESSION["email"] = $email; 
    $_SESSION["loggedin"] = true; 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        session_destroy(); 
        echo "invalid email"; 
        exit(); 
    }
    $connection = new mysqli($_SESSION["sql_hostname"], $_SESSION["sql_username"], $_SESSION["sql_password"], $_SESSION["database_name"]);
    if($connection->connect_error){
        die("Connection unsuccessful: " . $connection->connect_error); 
    }
    //checks if username exists 
    $sql= "SELECT username FROM user_table WHERE username='".$username."' OR user_email='".$email."'"; 
    $result = $connection->query($sql); 
    echo $result->num_rows; 
    if($result->num_rows > 0){
        session_destroy(); 
        header("Location: signup.php"); 
        exit(); 
    }
    //adds the new user into the user table
    $sql = "INSERT INTO user_table (username, user_password, user_email) VALUES ('$username', '$password', '$email')"; 
    if($connection->query($sql) === true){
        echo "Success"; 
    }else{
        echo "Failed ".$connection->error; 
    }
    //creates a post table for the new user
    $sql = "CREATE TABLE ".$username." (post_name varchar(255), post_description varchar(255))"; 
    if($connection->query($sql) === true){
        echo "Success";
    }else{
        echo "Failed".$connection->error; 
    }
    header("Location: index.php"); 
?>