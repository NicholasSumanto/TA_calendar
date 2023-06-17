
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <form method="POST" action="proses_login.php">
    <div class="box">
        <div class="form">
          <h2>Sign in</h2>
          <div class="inputBox">
            <input type="text" id="username" name="username" required="required" />
            <span>Username</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" id="password" name="password" required="required" />
            <span>Password</span>
            <i></i>
          </div>
          <div class="links">
            <a href="signup.php">Signup</a>
          </div>
          <input type="submit" value="Login" />
          <p> &copy; TopSecret</p>
        </div>
      </div>
  </form>
</body>
</html>