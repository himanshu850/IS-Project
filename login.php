<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="container">

<!-- // Navbar -->
<div style=" width: 100%; margin: 30px auto;">
  <form method="post" action="login.php">

    <h2>Login</h2>
    
    <input type="text" name="username" value="<?php if (!empty($_SESSION['username'])) {
                                                echo $_SESSION['username'];
                                              } ?>" placeholder="Username">
    <input type="password" name="password" value="<?php if (!empty($_SESSION['pwd'])) {
                                                    echo $_SESSION['pwd'];
                                                  } ?>" placeholder="Password">
    <button type="submit" class="btn" name="login_btn">Login</button>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</div>
</div>
</body>
</html>