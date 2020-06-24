<!DOCTYPE html>
<?php 
    session_start(); 
    $_SESSION["sql_username"] = "epiz_26095475"; 
    $_SESSION["sql_password"] = "XhGQ9NWZPkZi"; 
    $_SESSION["sql_hostname"] = "sql109.epizy.com"; 
    $_SESSION["database_name"] = "epiz_26095475_artis"; 
?>
<html>
    <head>
        <title>Artis</title>
        <script src="script.js"></script>
        <link rel="icon" href="img/artisFavicon.png">
        <link rel="stylesheet" href="style.css">
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
