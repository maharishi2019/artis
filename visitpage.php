<!DOCTYPE html>
<?php 
    session_start(); 
?>
<html>
    <head>
        <title>Artis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/artisFavicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php
            $_SESSION["visiting_user"] = $_POST["visit_user"]; 
            if($_SESSION["visiting_user"] = $_SESSION["username"]){
                header("Location: post.php"); 
            }
        ?>
        <div id="top-nav">
            <?php
                if(!isset($_SESSION["username"])){
                    echo "<a id=\"redirect-link\" href=\"login.php\">Login/Signup</a>"; 
                }else{
                    echo "<a id=\"redirect-link\" href=\"index.php\">Back</a>"; 
                    echo " <a id=\"redirect-link\" href=\"post.php\">My Posts</a>"; 
                    echo "<h5 id=\"welcome\">Logged in as: ".$_SESSION["username"]."</h5>"; 
                }
            ?>
        </div>
        <div id="posts">
            <?php
                echo "<h3 id=\"explore-heading\">".$_SESSION["visiting_user"]."'s posts</h3>"
            ?>
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
                    $sql = "SELECT post_name, post_description FROM `".$_SESSION["visiting_user"]."`"; 
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
