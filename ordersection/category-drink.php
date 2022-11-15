<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en"></html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Custome css file link -->
    <link rel="stylesheet" href="/omgph/css/order.css">
    
    <title>OMG Phillipines | Order </title>
</head>
<body>
    
<!-- Header section starts here -->

<header>
    <a href="home.php" class="logo"><img src="/OMGPH/images/omg-logo.png" image style="object-fit: contain; width: 70px;"></a>

    <nav class="navbar">
        <a href="/omgph/index.php">HOME</a>
        <a href="#">MENU</a>
        <a href="blog2.html">BLOG</a>
        <a href="franchising.html">FRANCHISE</a>
        <a href="career.html">CAREER</a>
        <a href="loc.html">LOCATION</a>
        <a href="contact-us.html">CONTACT US</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <i class="fa-brands fa-facebook-f" id="facebook"></i>
        <i class="fa-solid fa-cart-shopping"></i>
        <div class="dropdown">
       <button class="user"><i class="fa-solid fa-user" id="user"></i></button>
        <div class="content">  
        <a href="#">Profile</a>
        <a href="#">Orders</a>
        <a href="/omgph/login.php">Login</a></div>
    
</header>
    <!-- Header section ends here -->
 <br><br><br><br><br><br><br><br><br><br><br>

    <!--<ul  class="column">
        <div class="text" style="right: auto; padding: 10%">
            <h1>CREAMY GOODNESS IN A CUP</h1>
            <h3>TASTE THAT WOULD YOU GO OMG!</h3>
        </div> 
    </ul>-->
  
  
    <!-- CAtegories Section Starts Here -->
    
   
    <div class="second"><ul>
        <li><a href="/OMGPH/ordersection/ALL.php">ALL</a></li>
        <li><a href="/OMGPH/ordersection/category-drink.php/?category_id=4">COFFEE SERIES</a></li>
        <li><a href="/OMGPH/ordersection/category-drink.php/?category_id=5">YOGURT SERIES</a></li>
        <li><a href="/OMGPH/ordersection/category-drink.php/?category_id=6">CHOCO SERIES</a></li>
        <li><a href="/OMGPH/ordersection/category-drink.php/?category_id=7">MILKTEA SERIES</a></li>
      </ul>
    </div>
</div>



    <div class="container" style="margin-left:25%;padding:1px 16px;height:700px;">
    <h2 class="text-center" >BEVERAGES</h2>
    <div class="omg-menu">
  
 
    <?php 
        //CHeck whether id is passed or not
        if(isset($_GET['category_id']))
        {
            //Category id is set and get the id
            $category_id = $_GET['category_id'];
            // Get the CAtegory Title Based on Category ID
            $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Get the value from Database
            $row = mysqli_fetch_assoc($res);
            //Get the TItle
            $category_title = $row['title'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            header('location:'.SITEURL);
        }
    ?>

            <?php 
            
                //Create SQL Query to Get drinks based on Selected CAtegory
                $sql2 = "SELECT * FROM tbl_drinks WHERE category_id=$category_id";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Count the Rows
                $count2 = mysqli_num_rows($res2);

                //CHeck whether drink is available or not
                if($count2>0)
                {
                    //Drink is Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
                        ?>
                        
                        <div class="omg-menu-box">
            <div class="omg-menu-img">
                <?php 
                    //Check whether image available or not
                    if($image_name=="")
                    {
                        //Image not Available
                        echo "<div class='error'>Image not available.</div>";
                    }
                    else
                    {
                        //Image Available
                        ?>
                        <img src="<?php echo SITEURL; ?>/images/drinks/<?php echo $image_name; ?>" alt="Pic not Available" class="img1">
                        <?php
                    }
                ?>
                 </div>

                            <div class="omg-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="omg-price">₱<?php echo $price; ?></p>
                                <p class="omg-detail">
                                <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">

                                    <?php echo $description; ?>
                                </p>
                                <br>

                                <a href="<?php echo SITEURL; ?>order1.php?drink_id=<?php echo $id; ?>" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Drink not available
                    echo "<div class='error'>drink not Available.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>
            


   
      </div>
      <footer class="footer">
        <div class="container">
            <div class="about-us">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam iure cupiditate ducimus repudiandae deleniti qui, eos minima, distinctio eius laboriosam, facilis nulla deserunt quo rem totam quibusdam perspiciatis soluta commodi.</p>
            </div>
            <div class="newsletter">
                <h2>Newsletter</h2>
                <p>Stay updated with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram">
                <h2>Instagram</h2>
                <div class="flex-row">
           <img src="/omgph/images/ig%201.jpg" alt="insta1">
            <img src="/omgph/images/ig%202.jpg" alt="insta2">
            <img src="/omgph/images/ig%203.jpg" alt="insta3">
        </div>
        <div class="flex-row">
            <img src="/omgph/images/ig%201.jpg" alt="insta4">
            <img src="/omgph/images/ig%202.jpg" alt="insta5">
            <img src="/omgph/images/ig%203.jpg" alt="insta6">
        </div>
            </div>
            <div class="Follow">
                <h2>Follow us</h2>
                <p>Let us be social</p>
                <div>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
     
        <div class="rights flex-row">
            <h4 class="text-gray">
                OMG milktea, milkshake, and coffee copyright &copy; 2022
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
            
        </div>
     </footer>
      </body>
      </html>
