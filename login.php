<?php include('partials-front/navbar.php'); ?>
<?php include('C:\xampp\htdocs\omgph\config\constants.php'); ?>


<!DOCTYPE html>
<html lang="en"></html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OMG Philippines</title>
    <link rel="stylesheet" href="/omgph/css/indexx.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

<?php 


if (isset($_SESSION['user_id']) != "") {
header("Location: index.php");
}
if (isset($_POST['submit'])) {
$email    = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if (strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}
$result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '" . $email . "' and password = '" . md5($password) . "'");
if ($row = mysqli_fetch_array($result)) {
$_SESSION['id']     = $row['uid'];
$_SESSION['name']   = $row['fullname'];
$_SESSION['number'] = $row['number'];
$_SESSION['email']  = $row['email'];
header("Location: index.php");
} else {

$error_message = "Username or Password did not match";

}
}

?>

     
         <!-- Login Form Starts HEre -->
         <div class="container1">

         <div class="frame">
         <div class="nav1">
         <li class="signin-active"><a class="btn1">Sign in</a></li>
<span class="text-danger"><?php if (isset($error_message)) echo $error_message; ?></span>

         <form action="" method="POST" class="form-signin">
         <label for="Email">Email</label>            
         <input type="text" class="form-styling" name="email" placeholder="Enter Email" maxlength="30"required="required" style="background-color: white;background-image: none; color: black;">
         <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span> 
         <br><br>

            <label for="Password">Password</label>  
            <input type="password"  class="form-styling" name="password" placeholder="Enter Password" maxlength="8" required="required" style="background-color: white;background-image: none; color: black;"><br><br>
            <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
              
            <input type="submit" name="submit" value="Sign-in" class="btn" >
          
            </form>
            <!-- Login Form Ends HEre -->

            <p>You don't have account? <a href="signup.php">SIGN UP </a></p>
        </div>
              </div>
    </body>
</html>
