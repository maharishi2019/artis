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
        <link rel="stylesheet" type="text/css" href="styles.css?<?=filemtime('styles.css');?>">
    </head>
    <body>
        <div id="login-div">
            <h3 id="heading">Signup</h3>
            <form autocomplete="off" id="login-form" action="signupscript.php" method="POST">
                <label id="label" for="username">Username</label><br>
                <input class="input-area" type="text" name="username" placeholder="Username" required><br>
                <label id="label" for="password">Password</label><br>
                <input class="input-area" type="password" name="password" placeholder="Password" required><br>
                <label id="label" for="email">Email</label><br>
                <input class="input-area" type="text" name="email" placeholder="Email" required><br>
                <a id="account" href="login.php">Already have an account?</a><br>
                <input type="submit" name="submit" value="Signup">
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>
