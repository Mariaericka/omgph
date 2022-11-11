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
        
            <?php 
            if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
            {
                echo $_SESSION['add']; //Display the SEssion Message if SEt
                unset($_SESSION['add']); //Remove Session Message
            }
        ?>
            <br><br>
         <!-- Login Form Starts HEre -->
         <div class="container1">

         <div class="frame">
         <div class="nav1">
         <li class="signin-active"><a class="btn1">Sign up</a></li>

         <form action="" method="POST" class="form-signin">
         <label for="fullname">Fullname</label>           
          <input type="text" class="form-styling" name="fullname" placeholder="Enter Full name" required="required" style="background-color: white;background-image: none; color: black;">
          <label for="email">Email</label>           
          <input type="text" class="form-styling" name="email" placeholder="Enter e-mail" required="required" style="background-color: white;background-image: none; color: black;">
          <label for="number">Number</label>           
          <input type="text" class="form-styling" name="number" placeholder="Enter number" required="required" style="background-color: white;background-image: none; color: black;">

          <br><br>

            <label for="Password">Password</label>  
            <input type="password"  class="form-styling" name="password" placeholder="Enter Password" required="required" style="background-color: white;background-image: none; color: black;"><br><br>
           
              
            <input type="submit" name="submit" value="Sign-up" class="btn" >
          
            </form>
            <!-- Login Form Ends HEre -->

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
         //1. Get the Data from form
         $full_name = $_POST['fullname'];
         $email = $_POST['email'];
         $number = $_POST['number'];

         $password = md5($_POST['password']); //Password Encryption with MD5
 
        $sql = "INSERT INTO tbl_users SET 
        name ='$full_name',
        email='$email',
        number='$number',

        password='$password'
    ";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. COunt rows to check whether the user exists or not
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>Profile Added Successfully.</div>";
            //Redirect Page to Manage Admin
            header("location:".SITEURL.'index.php');
        }
        else
        {
            //FAiled to Insert DAta
            //echo "Faile to Insert Data";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='error'>Failed to Add Profile</div>";
            //Redirect Page to Add Admin
            header("location:".SITEURL.'signup.php');
        }

    }

?>