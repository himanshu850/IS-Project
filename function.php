<?php
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'student');
// variable declaration
$username = "";
$email    = "";
$role = "";
$errors   = array();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}

 // REGISTER USER
 if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $role = ($_POST['role']);
    $password_1 = ($_POST['password_1']);
    $password_2 = ($_POST['password_2']);

    // form validation: ensure that the form is correctly filled
    if (empty($username)) {  array_push($errors, "Uhmm...We gonna need your username"); }
    if (empty($email)) { array_push($errors, "Oops.. Email is missing"); }
    if (empty($password_1)) { array_push($errors, "uh-oh you forgot the password"); }
    if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");}
 }

 // Ensure that no user is registered twice.
    // the email and usernames should be unique
    $user_check_query = "SELECT * FROM users WHERE username='$username'
                OR email='$email' LIMIT 1";

    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $_SESSION['pwd']=$password_1;
        $password = md5($password_1);//encrypt the password before saving in the database
        $query = "INSERT INTO users (username, email,role, password)
        VALUES('$username', '$email','$role','$password')";
     mysqli_query($db, $query);
    }
?>