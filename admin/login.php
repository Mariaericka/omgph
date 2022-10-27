<?php include('../config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OMG PH | ADMIN PAGE</title>
     <!-- Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- Custome css file link -->
<link rel="stylesheet" href="../css/admin.css">
</head>

    <!-- Header section starts here -->
    <header style="background: white;"> 
    <a href="#" class="logo"><img src="../images/omg-logo.png" image style="object-fit: contain; width: 70px; background:white;" ></a>
    </header>
    <body>
<!-- Header section ends here -->
<br><br>
<div class="login">
            <h1>OMG PH LOG IN</h1>
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
            <br><br>
         <!-- Login Form Starts HEre -->


         <form action="" method="POST" class="text-center">
            Username: <br><br>
            <input type="text" name="username" placeholder="Enter Username" required="required" style="background-color: white;background-image: none; color: black;">
            <br><br>

            Password: <br><br>
            <input type="password" name="password" placeholder="Enter Password" required="required" style="background-color: white;background-image: none; color: black;"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary" style="background-image: none;padding: inherit;background-color: red;">
            <br><br>
         
            </form>
            <!-- Login Form Ends HEre -->

            <p>Powered By - <a href="https://www.facebook.com/">S.E.I</a></p>
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
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = ($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/dashboard.php');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>