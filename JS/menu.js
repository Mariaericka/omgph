function loaders(){
    document.querySelector('.loaders').style.display = 'none';
 }
    function fadeOut(){
      setInterval(loaders, 2000);
   }
   
   window.onload = fadeOut;