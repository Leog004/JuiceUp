$(document).ready(function(){
    
    $('.js--section-features').waypoint(function(direction) {
     if (direction == 'down') {
         $('nav').addClass('sticky');
     } else {
         $('nav').removeClass('sticky');
     }
     }, {
     offset: '60px;'
 });
    
    /* -----------SCROLL ON BUTTONS---------------------------------------- */
    
    $('.js--scroll-to-start').click(function () {
       $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000);
    });
    
        /* -------------SCROLL ON NAVIGATION-------------------------------------- */
    
    $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
    });
    
            /* -------------SCROLLING ANIMATIONS-------------------------------------- */
    $('.js--wp-1').waypoint(function(direction){
   $('.js--wp-1').addClass('animated fadeIn'); 
    },{
  offset:'90%'  
    });
    
    $('.js--wp-2').waypoint(function(direction){
    $('.js--wp-2').addClass('animated fadeInUp'); 
    },{
    offset:'50%'  
    });
    
    $('.js--wp-3').waypoint(function(direction){
        
        $('.js--wp-3').addClass('animated tada'); 
            
    },{
    offset:'50%'  
    });
    
    
                /* -------------MOBILE-NAVIGATION------------------------------------- */

    $('.js--nav-icon').click(function(){
       
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');
        
        nav.slideToggle(200);
        
        if(icon.hasClass('ion-navicon-round')){
            icon.addClass("ion-close-round");
            icon.removeClass("ion-navicon-round");
            
        }else{
            icon.addClass("ion-navicon-round");
            icon.removeClass("ion-close-round");
        }
        
    });
    
                    /* -------------MAPS------------------------------------- */

    
    
    var map = new GMaps({
  div: '.map',
  lat: 26.2317201,
  lng: -98.1980812,
});
    
    map.addMarker({
  lat: 26.2317201,
  lng: -98.1980812,
  title: 'Juice',
  infoWindow: {
  content: '<p>Juice-Up Location</p>'
}
});
    
    
    // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
};

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
};
    
    
    
    function show() {
    var iframe1 = document.getElementById('iframe');
    iframe1.style.display = 'block';
}
    
    
    
    
});
