function loaders(){
    document.querySelector('.loaders').style.display = 'none';
 }
    function fadeOut(){
      setInterval(loaders, 2000);
   }
   
   window.onload = fadeOut;





   $(function() {
      $(".btn1").click(function() {
         $(".form-signin").toggleClass("form-signin-left");
       $(".form-signup").toggleClass("form-signup-left");
       $(".frame").toggleClass("frame-long");
       $(".signup-inactive").toggleClass("signup-active");
       $(".signin-active").toggleClass("signin-inactive");
       $(".forgot").toggleClass("forgot-left");   
       $(this).removeClass("idle").addClass("active");
      });
   });
   
   $(function() {
      $(".btn1-signup").click(function() {
     $(".nav1").toggleClass("nav1-up");
     $(".form-signup-left").toggleClass("form-signup-down");
     $(".success").toggleClass("success-left"); 
     $(".frame").toggleClass("frame-short");
      });
   });
   
   $(function() {
      $(".btn1-signin").click(function() {
     $(".btn1-animate").toggleClass("btn1-animate-grow");
     $(".welcome").toggleClass("welcome-left");
     $(".cover-photo").toggleClass("cover-photo-down");
     $(".frame").toggleClass("frame-short");
     $(".profile-photo").toggleClass("profile-photo-down");
     $(".btn1-goback").toggleClass("btn-goback-up");
     $(".forgot").toggleClass("forgot-fade");
      });
   });