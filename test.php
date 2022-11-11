<?php
require_once "config/constants.php";
if(isset($_SESSION['user_id'])!="") {
header("Location: index.php");
}
if (isset($_POST['submit'])) {
$full_name = mysqli_real_escape_string($conn, $_POST['fullname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
if (!preg_match("/^[a-zA-Z ]+$/",$full_name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       
if(strlen($number) < 10) {
$number = "Mobile number must be minimum of 10 characters";
}
if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
if(mysqli_query($conn, "INSERT INTO tbl_users(fullname, email, number,password) VALUES('" . $fullname . "', '" . $email . "', '" . $number . "', '" . md5($password) . "')")) {
header("location: login.php");
exit();
} else {
echo mysqli_error($conn);
}
mysqli_close($conn);
}
?>