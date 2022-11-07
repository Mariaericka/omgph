<?php include('partials/nav.php'); ?>
    <?php include('../config/constants.php');?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OMG PH | ADMIN PAGE</title>
     <!-- Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link rel="stylesheet" href="../css/dashb.css">
<div class="main-content">
    <div class="wrapper">
        <h1><center>Manage Beverages</center></h1>

        <br /><br />

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-drink.php" class="btn-primary">Add Drink</a>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
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
                        <th style="display: flex;">Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>

                        <th>Active</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Create a SQL Query to Get all the Drinks
                        $sql = "SELECT * FROM tbl_drinks";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have drinks or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have drinks in Database
                            //Get the drinks from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                                ?>

                                <tr>
                                    <td><center><?php echo $sn++; ?>.</center> </td>
                                    <td><?php echo $title; ?></td>
                                    <td>₱<?php echo $price; ?></td>
                                    <td>
                                        <?php  
                                            //CHeck whether we have image or not
                                            if($image_name!="")
                                            {
                                                   //WE Have Image, Display Image
                                                   ?>
                                                   <img src="<?php echo SITEURL; ?>images/drinks/<?php echo $image_name; ?>" width="100px">
                                                   <?php
                                              
                                            }
                                            else
                                            {
                                               //WE do not have image, DIslpay Error Message
                                               echo "<div class='error'>Image not Added.</div>";
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $featured; ?></td>
                                    <td><?php echo $active; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-drink.php?id=<?php echo $id; ?>" class="btn-secondary">Update Drink</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-drink.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Drink</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //Drink not Added in Database
                            echo "<tr> <td colspan='7' class='error'>Drink not Added Yet. </td> </tr>";
                        }

                    ?>

                    
                </table>
    </div>
    
</div>

