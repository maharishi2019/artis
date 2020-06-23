<!DOCTYPE html>
<?php 
    session_start(); 
?>
<html>
    <head>
        <title>Artis</title>
        <script src="script.js"></script>
    </head>
    <body>
        <div id="login-div">
            <h3 id="heading">Signup</h3>
            <form autocomplete="off" id="login-form" action="signupscript.php" method="POST">
                <label id="label" for="username">Username</label><br>
                <input class="input-area" type="username" name="username" placeholder="Username" required><br>
                <label id="label" for="password">Password</label><br>
                <input class="input-area" type="password" name="password" placeholder="Password" required><br>
                <label id="label" for="email">Email</label><br>
                <input class="input-area" type="email" name="email" placeholder="Email" required><br>
                <input type="submit" name="submit" value="Signup">
            </form>
        </div>
    </body>
</html>