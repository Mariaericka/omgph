<?php include('partials-front/navbar.php'); ?>
<?php include('../config/constants.php'); ?>

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
    <div class="container1">
    <div class="frame">
   

    <form class="form-signup" action="" method="post" name="form">
          <label for="fullname">Full name</label>
          <input class="form-styling" type="text" name="fullname" placeholder=""/>
          <label for="email">Email</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="number">Number</label>
          <input class="form-styling" type="text" name="number" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <label for="confirmpassword">Confirm password</label>
          <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
          <a ng-click="checked = !checked"  name="submit" class="btn1-signup">Sign Up</a>
				        </form>
    </div>
    </div>
    <script src="/omgph/JS/login.js"></script>
