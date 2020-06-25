<!DOCTYPE html>
<?php 
    session_start(); 
    $_SESSION["sql_username"] = "root"; 
    $_SESSION["sql_password"] = ""; 
    $_SESSION["sql_hostname"] = "localhost"; 
    $_SESSION["database_name"] = "artis"; 
?>
<html>
    <head>
        <title>Artis</title>
        <script src="script.js"></script>
        <link rel="icon" href="img/artisFavicon.png">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="top-nav">
            <?php
                if(!isset($_SESSION["username"])){
                    echo "<a id=\"user-info\" href=\"login.php\">Login/Signup</a>"; 
                }else{
                    echo "<a id=\"redirect-link\" href=\"post.php\">My Posts</a>"; 
                    echo " <a id=\"user-info\" href=\"settings.php\">Settings</a>"; 
                    echo "<h3 id=\"welcome\">Hello ".$_SESSION["username"]."</h3>"; 
                }
            ?>
        </div>
        <h3>Explore</h3>
        <hr>
        <div id="explore">
            <?php
                $connection = new mysqli($_SESSION["sql_hostname"], $_SESSION["sql_username"], $_SESSION["sql_password"], $_SESSION["database_name"]);
                if($connection->connect_error){
                    die("Connection failed " . $connection->connect_error); 
                }
                $sql = "SELECT username FROM user_table"; 
                $result1 = $connection->query($sql); 
                if($result1->num_rows > 0){
                    while($row1 = $result1->fetch_assoc()){
                        echo "<h3>".$row1["username"]."</h3><hr>"; 
                        $result = "SELECT post_name, post_description FROM `".$row1["username"]."`"; 
                        $result2 = $connection->query($result); 
                        if($result2->num_rows > 0){
                            while($row2 = $result2->fetch_assoc()){
                                echo "<p>".$row2["post_name"]."</p>"; 
                                echo "<p>".$row2["post_description"]."</p>"; 
                            }
                        }
                    }
                }
            ?>
        </div>
        <div id="logout">
            <?php
                if(isset($_SESSION["loggedin"])){
                    echo "<form action=\"logout.php\" method=\"POST\">
                            <input type=\"submit\" name=\"logout\" value=\"Logout\">
                        </form>"; 
                }
            ?>
        </div>
    </body>
</html>
