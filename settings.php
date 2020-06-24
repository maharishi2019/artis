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
        </div>
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
    </body>
</html>