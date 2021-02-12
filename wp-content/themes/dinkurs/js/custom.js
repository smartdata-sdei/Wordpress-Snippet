$(window).scroll(function() {
   if($(this).scrollTop()>160) {
       $( ".navbar-header" ).addClass("has-fixed");
    } else {
       $( ".navbar-header" ).removeClass("has-fixed");
   }
});

$('#testimonialCarousel').carousel();
$('#bannerCarousel').carousel({
    interval: 8000
})
$( ".carousel-inner div" ).first().addClass( "active" ).removeClass( "banner-secondarycolor" );

$(document).ready(function(){
  $(".bannerinner").prev(".navbar").addClass("navInner");
});
 
// Init WOW.js and get instance
wow = new WOW({
  boxClass: 'wow', // default
  animateClass: 'animated', // default
  offset: 0, // default
  mobile: true, // default
  live: true // default
})
wow.init();
  
/*  Bootstrap Carousel and Animate.css */
(function($) {
    //Function to animate slider captions
    function doAnimations(elems) {
      //Cache the animationend event in a variable
      var animEndEv = "webkitAnimationEnd animationend";
  
      elems.each(function() {
        var $this = $(this),
          $animationType = $this.data("animation");
        $this.addClass($animationType).one(animEndEv, function() {
          $this.removeClass($animationType);
        });
      });
    }
  
    //Variables on page load
    var $myCarousel = $(".customCarousel"),
      $firstAnimatingElems = $myCarousel
        .find(".carousel-item:first")
        .find("[data-animation ^= 'animated']");
    //Initialize carousel
    $myCarousel.carousel();
    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);
    //Other slides to be animated on carousel slide event
    $myCarousel.on("slide.bs.carousel", function(e) {
      var $animatingElems = $(e.relatedTarget).find(
        "[data-animation ^= 'animated']"
      );
      doAnimations($animatingElems);
    });
  })(jQuery);
  

 
  (function(a) {
    a(function() {
        var m = a("#navigation"),
            c = a(window)
  
        var b = a("#pageHslider");
        767 < c.width() &&
            b.css("height", c.outerHeight());
        a("#f0f").css("height", c.outerHeight());
        b = a(".pageHslider-slider");
        b.length && b.owlCarousel({
            items: 1,
            smartSpeed: 1200,
            loop: !0,
            autoplay: !0
        });
        var z = a(".clientSlider"),
            A = a(".clientDetail");
        if (z.length) z.owlCarousel({
            items: 1,
            smartSpeed: 1200,
            autoplay: !0,
            loop: !0,
            dots: !1,
            onChanged: function(b) {
                b = a(b.target).find(".owl-item").eq(b.item.index).children(".item").data("id");
                A.trigger("to.owl.carousel", [b - 1, 500, !0])
            }
        }).on("click", ".owl-item", function(b) {
            b = a(b.currentTarget).children(".item").data("id") -
                1;
            z.trigger("to.owl.carousel", [b, 500, !0])
        });
        A.length && A.owlCarousel({
            items: 1,
            smartSpeed: 1200,
            autoplay: !1,
            loop: !0,
            dots: !1,
            mouseDrag: !1,
            touchDrag: !1
        });
      
    });
  
  })(jQuery);




    

