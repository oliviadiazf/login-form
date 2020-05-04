<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Form Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    </head>
    <body>
        <div class="container">
                <div class="img">
                    <img src="img.svg">
                </div>
            <div class="login-container">
                <form method="POST" action="proses_login.php">
                    <img class="avatar" src="avatar.svg">
                    <h2>Welcome</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h5>Username</h5> 
                            <input type="text" name="username" class="input"></input>
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input type="password" name="password" class="input"></input>
                        </div>
                    </div>
                    <input class="btn" type="submit" value="Login"></input>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>