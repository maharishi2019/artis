<!DOCTYPE html>
<html>
    <head>
        <title>Artis</title>
        <script src="script.js"></script>
        <link rel="icon" href="img/artisFavicon.png">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="login-div">
            <h3 id="heading">Login</h3>
            <form autocomplete="off" id="login-form" action="loginscript.php" method="POST">
                <label id="label" for="username">Username</label><br>
                <input class="input-area" type="text" name="username" placeholder="Username" required><br>
                <label id="label" for="password">Password</label><br>
                <input class="input-area" type="password" name="password" placeholder="Password" required><br>
                <a id="account" href="signup.php">Don't have an account?</a><br>
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </body>
</html>
