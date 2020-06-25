<!DOCTYPE html>
<?php 
    session_start(); 
    if(!isset($_SESSION["username"])){
        header("Location: login.php"); 
    }
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
        <div id="top-nav">
            <div id="click-button"><a id="redirect-link" href="index.php">Back</a></div>
            <?php
                if(!isset($_SESSION["username"])){
                    echo "<div id=\"click-button\"><a id=\"redirect-link\" href=\"login.php\">Login/Signup</a></div>"; 
                }else{
                    echo "<div id=\"click-button\"><a id=\"redirect-link\" href=\"settings.php\">Settings</a></div>"; 
                }
            ?>
        </div>
        <div id="posts">
            <h3 id="explore-heading">Posts</h3>
            <table style="width: 100%">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                <?php
                    $connection = new mysqli($_SESSION["sql_hostname"], $_SESSION["sql_username"], $_SESSION["sql_password"], $_SESSION["database_name"]);
                    if($connection->connect_error){
                        die("Connection failed " . $connection->connect_error); 
                    }
                    $sql = "SELECT post_name, post_description FROM `".$_SESSION["username"]."`"; 
                    $result = $connection->query($sql); 
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>".$row["post_name"]."</td>
                                    <td>".$row["post_description"]."</td>
                                  </tr>";
                        }
                    }
                ?>
            </table>
        </div>
        <div id="login-div">
            <h3 id="form-heading">New Post</h3>
            <form id="new-post-form" action="newpostscript.php" method="POST">
                <label id="label" for="post_title">Title</label><br>
                <textarea autocomplete="off" id="text-area" type="text" name="post_title" placeholder="Title"></textarea><br>
                <label id="label" for="post_description">Description</label><br>
                <textarea autocomplete="off" oid="text-area" type="text" name="post_description" placeholder="Description"></textarea><br>
                <input type="submit" name="submit" value="Post">
            </form>
            <h3 id="form-heading">Delete Post</h3>
            <form id="new-post-form" action="deletepostscript.php" method="POST">
                <label id="label" for="post_title">Title</label><br>
                <textarea autocomplete="off" id="text-area" type="text" name="post_title" placeholder="Title"></textarea><br>
                <input type="submit" name="submit" value="Delete Post">
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>
