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
        </div>
        <h3 id="explore-heading">Settings</h3>
        <div id="login-div">
            <form action="changepasswordscript.php" method="POST">
                <label id="label" for="email">Current Password</label><br>
                <input class="input-area" type="password" name="oldpassword" placeholder="Old Password" required><br>
                <label id="label" for="email">New Password</label><br>
                <input class="input-area" type="password" name="newpassword" placeholder="New Password" required><br>
                <input type="submit" name="submit" value="Change Password">
            </form>
            <form action="deleteaccount.php" method="POST">
                <label id="label" for="submit">Delete Account</label><br>
                <input type="submit" name="submit" value="Delete Account">
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>