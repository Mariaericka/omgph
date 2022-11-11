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
         <!-- Login Form Starts HEre -->
         <div class="container1">

         <div class="frame">
         <div class="nav1">
         <li class="signin-active"><a class="btn1">Sign up</a></li>

         <form action="" method="POST" class="form-signin">
         <label for="fullname">Fullname</label>           
          <input type="text" class="form-styling" name="fullname"  maxlength="50"placeholder="Enter Full name" required="required" style="background-color: white;background-image: none; color: black;">
          <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
          <label for="email">Email</label>           
          <input type="text" class="form-styling" name="email"maxlength="30" placeholder="Enter e-mail" required="required" style="background-color: white;background-image: none; color: black;">
          <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
          <label for="number">Number</label>           
          <input type="text" class="form-styling" name="number" maxlength="12"placeholder="Enter number" required="required" style="background-color: white;background-image: none; color: black;">


            <label for="Password">Password</label>  
            <input type="password"  class="form-styling" name="password"maxlength="8" placeholder="Enter Password" required="required" style="background-color: white;background-image: none; color: black;">
            <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
            <label for="Password">Confirm Your Password</label>  
            <input type="cpassword"  class="form-styling" name="cpassword"maxlength="8" placeholder="Confirm Password" required="required" style="background-color: white;background-image: none; color: black;">
            <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
              
            <input type="submit" name="submit" value="Sign-up" class="btn" >
          
            </form>
            <!-- Login Form Ends HEre -->

        </div>
              </div>
    </body>
</html>

<?php 
if(isset($_SESSION['user_id'])!="") {
    header("Location: index.php");
    }
    if (isset($_POST['submit'])) {
    $full_name = mysqli_real_escape_string($conn, $_POST['name']);
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
    if(mysqli_query($conn, "INSERT INTO tbl_users (name, email, number,password) VALUES('" . $full_name . "', '" . $email . "', '" . $number . "', '" . md5($password) . "')")) {
    header("location: login.php");
    exit();
    } else {
    echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
    ?>

?>