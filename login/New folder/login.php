<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
            <div class="form">
                <h3 class="title">Login ke Dashboard Hanami</h3>
                <form method="POST" action="login_act.php">
                    <div>
                        <input name="tujuan" type="hidden" value="LOGIN" >
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" required><label>Username</label>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" required><label>Password</label>
                    </div>
                    <button class="submit">Log In</button>
                </form>
        </div>

        <script  src="login.js"></script>

    </body>
</html>