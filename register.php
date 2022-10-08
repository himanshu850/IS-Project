<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style type="text/css">
  body {
    background-image: url(static/images/earth.jpg);
    background-size: cover;
    background-attachment: fixed;
  }

  .content {
    background: white;
    width: 50%;
    padding: 40px;
    margin: 100px auto;
  }
</style>
</head>
<body>
<div class="container">


<div style="width: 100%; margin: 20px auto;">
  <form method="post" action="register.php">
    <h2>Register To Student Report Management System</h2>
    
    <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
    <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
    <select name="role" style="width: 100%; height: 45px; margin: 5px; border-radius:12px auto; ">
      <option value="" selected disabled>Role</option>
      <option value="parent">parent</option>
      <option value="nanny">nanny</option>
    </select>
    <input type="password" name="password_1" placeholder="Password">
    <input type="password" name="password_2" placeholder="Password confirmation">
    <button type="submit" class="btn" name="reg_user">Register</button>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</div>
</div>
</body>
</html>