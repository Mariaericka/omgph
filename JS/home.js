// owl carousel for home

$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    nav: true,
    navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')]
});
function loaders(){
    document.querySelector('.loaders').style.display = 'none';
 }
    function fadeOut(){
      setInterval(loaders, 2000);
   }
   
   window.onload = fadeOut;