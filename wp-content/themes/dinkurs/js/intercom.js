// Hamburger menu
      var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
      var hamburgers = document.querySelectorAll(".hamburger");
      if (hamburgers.length > 0) {
        forEach(hamburgers, function(hamburger) {
          hamburger.addEventListener("click", function() {
            this.classList.toggle("is-active");
          }, false);
        });
    }

    // Nice Select box
    

	var IntercomWin = 0;
    // Contact popup
    $(".contact-pop a").click(function(){
      
		
		/*$("body").toggleClass("no-scroll");*/
		
		if (IntercomWin == 0)
			{
				Intercom('show');
				IntercomWin = 1;
			}
		else
			{
				Intercom('hide');
				IntercomWin = 0;
			}		
		/*
		  if ($(".overlay").hasClass("shown")) {
			  $(".overlay").removeClass("shown");
		  }
		  else{
			$(".overlay").addClass("shown");
		  }
		 */
    });

    $(".footer .contact-pop a, .how-it-works .contact-pop a, .how-it-works .contact-pop a, .faq-section .contact-pop a, .projects-section .contact-pop a").click(function(){
        $(".hamburger").toggleClass("is-active");
        $(".navbar-inverse").removeClass("nav-up");
		
    });
    
    // Change language
     $(function(){
      // bind change event to select
      $('.change-lang').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
    
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.navbar-inverse').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.navbar-inverse').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.navbar-inverse').removeClass('nav-up').addClass('nav-down');
            }
        }

        if (st == 0 ) {
          $('.navbar-inverse').removeClass('nav-down');
        }

        lastScrollTop = st;
    }
   
    // initialise wowjs
    $(document).ready(function() {
      new WOW().init();
    });


	$(function() {
		$('.errorMessage').hide();
		$("#contactPopup button").on('click touchstart',function() {
			
			var data = {
				name: $("#form_name").val(),
				lastname: $("#form_lastname").val(),
				email: $("#form_email").val(),
				url: $("#url").val(),
				message: encodeURIComponent($("#msg_text").val())
			};
			$.ajax({
				type: "POST",
				url: "/emlemail.php",
				data: data,
				success: function(respText){
					if (respText==='1') {
							$('.success').fadeIn(1000);
							$('.contact_form').fadeOut(1000);
							$('.errorMessage').hide();
							setTimeout(function() {
								 	$(".overlay").removeClass("shown");
									$(".hamburger").toggleClass("is-active");
						        	$(".navbar-inverse").removeClass("nav-up");
									$("body").toggleClass("no-scroll");
									$('.contact_form').show();	
									$('.success').hide();
									$('#msg_text').val('');
							}, 10000 );
							 
						}else{
							$('.errorMessage').show();
						}
				},
				fail: function(){
					$('.errorMessage').show();
				},
				error: function(){
					$('.errorMessage').show();
				}
			});

			return false;
		});
	});
