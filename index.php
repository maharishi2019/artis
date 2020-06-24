<!DOCTYPE html>
<?php 
    session_start(); 
?>
<html>
    <head>
        <title>Artis</title>
        <script src="script.js"></script>
        <link rel="icon" href="img/artisLogo.png">
    </head>
    <body>
        <div id="top-nav">
            <a id="redirect-link" href="index.php">Explore</a>
            <a id="redirect-link" href="post.php">Post</a>
            <?php
                if(!isset($_SESSION["username"])){
                    echo "<a id=\"user-info\" href=\"login.php\">Login/Signup</a>"; 
                }else{
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