<!DOCTYPE html>
<?php 
    session_start(); 
?>
<html>
    <head>
        <title>Artis</title>
        <script src="script.js"></script>
        <link rel="icon" href="img/artisFavicon.png">
    </head>
    <body>
        <div id="top-nav">
            <a id="redirect-link" href="index.php">Back</a>
            <?php
                if(!isset($_SESSION["username"])){
                    echo "<a id=\"user-info\" href=\"login.php\">Login/Signup</a>"; 
                }else{
                    echo "<a id=\"user-info\" href=\"settings.php\">Settings</a>"; 
                }
            ?>
        </div>
        <div id="posts">
            <h3>Posts</h3>
            <hr>
        </div>
        <div id="new-post">
            <h3>New Post</h3>
            <hr>
            <form id="new-post-form" action="newpostscript.php" method="POST">
                <label id="label" for="post_title">Title</label><br>
                <input id="text-area" type="text" name="post_title" placeholder="Title"><br>
                <label id="label" for="post_description">Description</label><br>
                <input id="text-area" type="text" name="post_description" placeholder="Description">
            </form>
        </div>
    </body>
</html>
