<?php include('partials-front/navbar.php'); 
?>

<!DOCTYPE html>
<html lang="en"></html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OMG Philippines</title>


    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Own Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Custome css file link -->
    <link rel="stylesheet" href="/omgph/css/indexx.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
<!-- Header section starts here -->



<!-- Header section ends here -->


<!-- Home 1 section starts here -->

    <section class="line"></section>
        <img src="images/profile.png" height="20px" width="50px" alt="">
        <h3>Creamy goodness in a cup</h3>
        <p>Taste that would definitely make you go OMG!</p>
        <video src="images/background_3.mp4" autoplay muted loop height="100%" width="100%"></video>
    </section>
    
<!-- Search form starts here -->

<form action="" id="search-form">
    <input type="search"placeholder="search here...." id="search-box">
    <label for="search-box" class="fas-fa search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- Search form ends here -->



<!-- image slider starts here -->

<div class="image-slider">
    <div class="slider">
        <div class="slides">
            <!-- radio buttons start here -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!-- radio buttons end here -->

            <!-- slide images starts here -->
            <div class="slide first">
                <img src="images/mars.png" alt="">
            </div>
            <div class="slide second">
                <img src="images/mini oreo.png" alt="">
            </div>
            <div class="slide third">
                <img src="images/snickers.png" alt="">
            </div>
            <div class="slide fourth">
                <img src="images/twix.png" alt="">
            </div>
            <!-- slide images ends here -->

            <!-- automatic navigation starts here -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!-- automatic navigation ends here -->

            <!-- navigation-manual starts here -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- navigation-manual ends here -->
            
        </div>
        <!-- automatic navigation ends here -->
    </div>
</div>

<!-- image slider ends here -->

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter ).checked = true;
        counter++;
        if(counter > 4){
            counter = 1;
        }
    }, 5000);
</script>





<section class="franchise" id="franchise">

    <div class="container">

        <div class="content">
            <span>OPEN FOR FRANCHISE NATIONWIDE!</span>
            <h1>5 in 1 FRANCHISE</h1>
            <p>With initial stocks and initial equipments, food panda application, creation of page, extensive training and initial marketing included</p>
            <a href="#" class="btn">Franchise now!</a>
        </div>

    </div>

</section>



<!-- Contact us starts here -->

<form action="contact.html" method="get" enctype="multipart/form-data">

    <div class="container">
        <div class="contact-parent">
        <div class="contact-child child1">
            <p>
                <i class="fas fa-map-marker-alt"></i> Main Branch Address <br />
                <span> JP Rizal St. Brgy I- Poblacion, Alaminos
                <br />
                Laguna (Plaza, Near Munisipyo Of Alaminos)
                </span>
            </p>
            <p>
                <i class="fas fa-phone-alt"></i> Contact us <br />
                <span> 09171675592</span>
            </p>
            <p>
                <i class=" far fa-envelope"></i> Email <br />
                <span>omgfranchising@gmail.com</span>
            </p>
        </div>
        <div class="contact-child child2">
            <div class="inside-contact">
                <h2>Contact Us</h2>
                <h3>
                    <span id="confirm">
                </h3>
                <p>Name *</p>
                <input id="txt_name" type="text" Required="required">
                <p>Email *</p>
                <input id="txt_email" type="text" Required="required">
                <p>Phone *</p>
                <input id="txt_phone" type="text" Required="required">
                <p>Subject *</p>
                <input id="txt_subject" type="text" Required="required">
                <p>Message *</p>
                <textarea id="txt_message" rows="4" cols="20" Required="required" ></textarea>
                <input type="submit" id="btn_send" value="SEND">
            </div>
        </div>
        </div>
    </div>   
</form>

<!-- Contact us starts here -->


<!-- Custom js file link -->
<div class="loaders">
   <img src="images/loading.gif" alt="">
</div>

</body>

<!------------------------ footer starts here -------------------->

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
                <img src="images/ig 1.jpg" alt="insta1">
                <img src="images/ig 2.jpg" alt="insta2">
                <img src="images/ig 3.jpg" alt="insta3">
            </div>
            <div class="flex-row">
                <img src="images/ig 1.jpg" alt="insta4">
                <img src="images/ig 2.jpg" alt="insta5">
                <img src="images/ig 3.jpg" alt="insta6">
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
        <span><a href="#"><i class="fas fa-arrow-circle-up fa-2x"></a></i></span>
        
    </div>
</footer>

        
<!------------------------ footer ends here -------------------->


<!-- Jquery Library file -->
<script src="JS/Jquery3.6.0.min.js"></script>

<!-- Owl Carousel -->
<script src="JS/owl.carousel.min.js"></script>
<script src="/omgph/JS/script.js"></script>
<script src="/omgph/JS/home.js"></script>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</html>

