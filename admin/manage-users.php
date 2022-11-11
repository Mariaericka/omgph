<?php include('partials/nav.php'); ?>
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
<link rel="stylesheet" href="../css/dashb.css">
</head>
<body>
<div class="main-content">
            <div class="wrapper">
                <h1><center>Manage Users</center></h1>

                <br />

                <?php 
                  

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    
               
                 

                ?>
                <br><br><br>

                <!-- Button to Add Admin -->

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th style="display: flex;">Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

            
                    <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM tbl_users";
                        //Execute the Query
                      
                        $res = mysqli_query($conn,$sql);
                       
                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE HAve data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    $id=$rows['id'];
                                    $full_name=$rows['name'];
                                    $email=$rows['email'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><center><?php echo $sn++; ?>. </center></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><center>
                                            <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>" class="btn-danger">Delete User</a>
                                </center></td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We Do not Have Data in Database
                            }
                        }

                    ?>


                    
                </table>

            </div>
        </div>
        <!-- Main Content Setion Ends -->
