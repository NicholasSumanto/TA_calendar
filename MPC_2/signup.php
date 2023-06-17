
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <link rel="stylesheet" href="signup.css">
    <script src="script.js"></script>
</head>
<body>
  <form method="POST" action="proses_signup.php" onsubmit="return validasi()">
        <div class="form">
        <a href="login.php">
          <button class="chevron-arrow-right" onclick="redirectToLogin()"></button>
          </a>
            <h2>Sign up</h2>
          <div class="inputBox">
            <input type="text"  id="name" name="nama" required="required" />
            <span>Name</span>
            <i></i>
            </div>
          <div class="inputBox">
            <input type="text" id="user" name="username" required="required" />
            <span>Username</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" id="password" name="password" required="required" />
            <span>Password</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" id="cpw" name="cpw" required="required" />
            <span>Confirm Password</span>
            <i></i>
          </div>
          <br>
            <input type="submit" value="Sign up" onclick="success()"/>
            <p> &copy; TopSecret</p>
        </div>
      <script src="signup.js"></script>
  </form>
</body>
</html>

<script>
  function validasi() {
    var nama = document.getElementbyName("nama");
    var password = document.getElementbyName("password");
    var cpw = document.getElementbyName("cpw");

    if (password == null || password == "")
      return false;
        
    if (nama.value == "")
      return false;
        
    if (password.value == "")
      return false;
        
    return true;

    if password.value == cpw.value 
      return true;


  }
</script>