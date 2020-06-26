<!DOCTYPE html>
<?php 
    session_start(); 
    $_SESSION["sql_username"] = "epiz_26095475"; 
    $_SESSION["sql_password"] = "XhGQ9NWZPkZi"; 
    $_SESSION["sql_hostname"] = "sql109.epizy.com"; 
    $_SESSION["database_name"] = "epiz_26095475artis"; 
?>
<html>
    <head>
        <title>Artis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/artisFavicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css?<?=filemtime('styles.css');?>">
    </head>
    <body>
        <?php
            if(!isset($_SESSION["loggedin"]) && isset($_SESSION["username"])){
                header("Location: login.php"); 
            }
        ?>
        <div id="top-nav">
            <?php
                if(!isset($_SESSION["username"])){
                    echo "<div id=\"click-button\"><a id=\"redirect-link\" href=\"login.php\">Login/Signup</a></div>"; 
                }else{
                    echo "<div id=\"click-button\"><a id=\"redirect-link\" href=\"post.php\">My Posts</a></div>"; 
                    echo " <div id=\"click-button\"><a id=\"redirect-link\" href=\"settings.php\">Settings</a></div>";  
                    echo "<h5 id=\"welcome\">Logged in as: ".$_SESSION["username"]."</h5>"; 
                }
            ?>
            <?php
                if(isset($_SESSION["username"])){
                    echo "<img id=\"logo\" src=\"img/artisFavicon.png\">";; 
                }
            ?>
        </div>
        <h3 id="explore-heading">Explore</h3>
        <div id="explore">
            <form action="visitpage.php" method="POST">
                <input autocomplete="off" type="text" name="visit_user" placeholder="User Visit">
                <input type="submit" name="submit" value="Search">
            </form>
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
        <script src="script.js"></script>
    </body>
</html>
