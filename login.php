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
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
          
         <!-- Login Form Starts HEre -->
         <div class="container1">

         <div class="frame">
         <div class="nav1">
         <li class="signin-active"><a class="btn1">Sign in</a></li>

         <form action="" method="POST" class="form-signin">
         <label for="Email">Email</label>            
         <input type="text" class="form-styling" name="email" placeholder="Enter Email" required="required" style="background-color: white;background-image: none; color: black;">
            <br><br>

            <label for="Password">Password</label>  
            <input type="password"  class="form-styling" name="password" placeholder="Enter Password" required="required" style="background-color: white;background-image: none; color: black;"><br><br>
           
              
            <input type="submit" name="submit" value="Sign-in" class="btn" >
          
            </form>
            <!-- Login Form Ends HEre -->

            <p>Or Sign up here <a href="signup.php">SIGN UP</a></p>
        </div>
              </div>
    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        $raw_password = ($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_users WHERE email='$email' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==0)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='message'>Login Successful.</div>";
            $_SESSION['user'] = $email; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'index.php');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='message'>Username or Password did not match.</div>";
            
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'login.php');
        }


    }

?>