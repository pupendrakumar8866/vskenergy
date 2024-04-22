  
/*news slider*/

$(document).ready(function() {

    $("#news-slider").owlCarousel({
        items : 2,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true,
        nav:false,
        dots:true,
        effect: 'coverflow',
        center:true,
        autoplay: { delay: 7000 },
        loop: true,
        responsive : {
            0:{
                items:1,
                nav:true,
            },
          600:{
                items:1,
                nav:true,
            }, 
            1200:{
                items:2,
                nav:true,
            }, 
        }, 
        
    });
});

/*news slider*/


/*Modules slider*/
$(document).ready(function(){
      $('.my-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 5000,
        autoplay:false,
        responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
      });
    });

    	$(".zoomWrapper img").click(function(){
  $(this).toggleClass("flasher");
});

/*Modules slider*/


/*Top Header*/
var lastKnownScrollY = 0;
var currentScrollY = 0;
var ticking = false;
var idOfHeader = 'header';
var eleHeader = null;
const classes = {
  pinned: 'header-pin',
  unpinned: 'header-unpin',
};
function onScroll() {
  currentScrollY = window.pageYOffset;
  requestTick();
}
function requestTick() {
  if (!ticking) {
    requestAnimationFrame(update);
  }
  ticking = true;
}
function update() {
  if (currentScrollY < lastKnownScrollY) {
    pin();
  } else if (currentScrollY > lastKnownScrollY) {
    unpin();
  }
  lastKnownScrollY = currentScrollY;
  ticking = false;
}
function pin() {
  if (eleHeader.classList.contains(classes.unpinned)) {
    eleHeader.classList.remove(classes.unpinned);
    eleHeader.classList.add(classes.pinned);
  }
}
function unpin() {
  if (eleHeader.classList.contains(classes.pinned) || !eleHeader.classList.contains(classes.unpinned)) {
    eleHeader.classList.remove(classes.pinned);
    eleHeader.classList.add(classes.unpinned);
  }
}
window.onload = function() {
  eleHeader = document.getElementById(idOfHeader);
  document.addEventListener('scroll', onScroll, false);
}

/*Top Header*/