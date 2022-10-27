<?php include('partials/nav.php'); ?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OMG PH | ADMIN PAGE</title>
     <!-- Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

     <?php include('../config/constants.php'); ?>
     <!-- Custome css file link -->
<link rel="stylesheet" href="../css/dashb.css">
</head>
<body>
<div class="main-content">
    <div class="wrapper">
        <h1>Messages</h1>

        <br /><br />

        <?php 
  

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }


                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>
 <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>number</th>
                        <th>subject</th>
                        <th>message</th>
                        <th>Actions</th>
                    </tr>
                    <?php 
                        //Create a SQL Query to Get all the msg
                        $sql = "SELECT * FROM tbl_contact";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have drinks or not
                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                          //We have food in Database
                         //Get the Foods from Database and Display
                         while($row=mysqli_fetch_assoc($res))
                            {
                          //get the values from individual columns
                            $id = $row['id'];
                              $customer_name = $row['Names'];
                             $customer_email = $row['Email'];
                             $customer_number = $row['number'];
                             $customer_subject = $row['subject'];
                             $customer_message = $row['message'];
                               $active = $row['active'];
                               
     
                            } 
                        }  
        



            