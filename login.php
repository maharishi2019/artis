<!DOCTYPE html>
<html>
    <head>
        <title>Artis</title>
        <script src="script.js"></script>
    </head>
    <body>
        <div id="login-div">
            <h3 id="heading">Login</h3>
            <form autocomplete="off" id="login-form" action="loginscript.php" method="POST">
                <label id="label" for="username">Username</label><br>
                <input class="input-area" type="username" name="username" placeholder="Username" required><br>
                <label id="label" for="password">Password</label><br>
                <input class="input-area" type="password" name="password" placeholder="Password" required><br>
                <input type="submit" name="submit" value="Login">
            </form>
            <a href="signup.php">Don't have an account?</a>
        </div>
    </body>
</html>