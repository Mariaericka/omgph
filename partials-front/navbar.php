<?php include('C:\xampp\htdocs\omgph\config\constants.php'); ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="/omgph/css/indexx.css">

   
<header>

    <a href="../index.php" class="logo"><img src="images/omg-logo.png" image style="object-fit: contain; width: 70px;"></a>

    <nav class="navbar">
        <a href="index.php">HOME</a>
        <a href="/omgph/ordersection/ALL.php">MENU</a>
        <a href="blog2.html">BLOG</a>
        <a href="franchising.html">FRANCHISE</a>
        <a href="career.html">CAREER</a>
        <a href="loc.html">LOCATION</a>
        <a href="contact-us.html">CONTACT US</a>
    </nav>
   
    <div class="icons">
    <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `tbl_cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <i class="fa-brands fa-facebook-f" id="facebook"></i>
        <i class="fa-solid fa-cart-shopping"></i><span>(<?= $total_cart_items; ?>)</span>
        <div class="dropdown">
       <button class="user"><i class="fa-solid fa-user" id="user"></i></button>
        <div class="content">  
        <a href="#">Profile</a>
        <a href="#">Orders</a>
        <a href="login.php">Login</a></div>
</div>
</div>
 
    
</header>

 
