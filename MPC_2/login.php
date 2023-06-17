
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
  <form method="POST" action="proses_login.php" onsubmit="return validasi()">
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

<script>
  function validasi() {
    var password = document.getElementbyName("password");
    var username = document.getElementbyName("username");

    if (password == null || password == "")
      return false;
        
    if (username.value == "")
      return false;
        
    if (password.value == "")
      return false;
        
    return true;
  }
</script>