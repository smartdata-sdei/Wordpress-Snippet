<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>

<!-- Section Newsletter -->
<section class="newsletter-bottom">
	<div class="container">
		<?php
			$currentlang = get_bloginfo('language');
			  if($currentlang=="en-GB"){ ?>
				<h2>Do you want to be updated about Din Kurs?</h2>
				<p>Sign up for Din Kurs newsletter and receive our news directly to your inbox</p>                  
			<?php }
            else{ ?>
                <h2>Vill du bli uppdaterad om Din Kurs?</h2>
				<p>Registrera dig för Din Kurs nyhetsbrev och få våra nyheter direkt till din inkorg</p>   
                                 <?php  }
                                 ?>


	<div class="newsletter-form">
		<?php 
			$currentlang = get_bloginfo('language');
				if($currentlang=="en-GB"){ 
					echo do_shortcode('[wpens_easy_newsletter firstname="yes" lastname="no" placeholder="What is your email?" Email Please holder text for english"  button_text="Sign me up for the Din Kurs newsletter"]'); 
				}
				else{
					echo do_shortcode('[wpens_easy_newsletter firstname="yes" lastname="no" placeholder="Vad är din e-postadress?"  button_text="Registrera mig för Din Kurs nyhetsbrev"]');
				}
			?>
		</div>
	</div>
</section>

<!-- //Section Newsletter -->
<footer class="footer">
    <div class="container">
            <div class="navbar-brand footer-logo"><img src="<?php the_field('footer-logo','677');?>" alt="" class="img-fluid" /></div>
                <div class="row">
                    
                    
                    <div class="col-md-5 col-sm-6">
                      <p class="footer-abt-text"><?php the_field('about-us-content','677');?></p>
                    </div>   
                    
                
                <div class="col-sm-auto ml-auto">
                <h2><?php the_field('social_text','677');?></h2>
                    <ul class="socialIcons">
                        <li><a href="<?php the_field('facebook-url','677');?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php the_field('linkedin-url','677');?>"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                 <!-- <div class="col-md-3 col-sm-12">
                  <?php 
                   // $currentlang = get_bloginfo('language');
                     // if($currentlang=="en-GB"){ echo do_shortcode('[wpens_easy_newsletter firstname="no" lastname="no"  button_text="Subscribe"]'); }
                       // else{
                       //   echo do_shortcode('[wpens_easy_newsletter firstname="no" lastname="no"  button_text="Prenumerera"]');
                        //}
                  ?>
               
                      
                  </div>-->
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright clearfix">
                            <div class="pull-left">
                                <ul class="footer-pages">
                                <?php
                                  $currentlang = get_bloginfo('language');
                                  if($currentlang=="en-GB"){ ?>
                                     <li><a href="/en/about-us/">About Us</a></li>
                                 <?php }
                                   else{ ?>
                                     <li><a href="/sv/about-us/">Om oss</a></li>
                                 <?php  }
                                 ?>

                                 <?php
                                  $currentlang = get_bloginfo('language');
                                  if($currentlang=="en-GB"){ ?>
                                     <li><a href="/en/integritets-kakpolicy/">Cookies and privacy</a></li>
                                 <?php }
                                   else{ ?>
                                     <li><a href="/sv/integritets-kakpolicy/">Cookies och integritet </a></li>
                                 <?php  }
                                 ?>
                                  

                                  <?php
                                  $currentlang = get_bloginfo('language');
                                  if($currentlang=="en-GB"){ ?>
                                  <!--   <li><a href="/en/faq-page/">FAQ</a></li> -->
                                 <?php }
                                   else{ ?>
                                  <!--    <li><a href="/sv/faq-page/">FAQ</a></li> -->
                                 <?php  }
                                 ?>

                                 <?php
                                  $currentlang = get_bloginfo('language');
                                  if($currentlang=="en-GB"){ ?>
                                 <!--     <li><a href="/en/blog/">News</a></li> -->
                                 <?php }
                                   else{ ?>
                                 <!--     <li><a href="/sv/blog/">Nyheter</a></li> -->
                                 <?php  }
                                 ?>   
                               </ul>
                            </div>
                            <div class="pull-right"> <p><?php the_field('footer-all-rights','677')?></p></div>
                        </div>
                    </div>
                </div>
    </div>
    
</footer>
    <!-- //Footer Section -->
</div>
<!-- //Wrapper -->

<?php
    $currentlang = get_bloginfo('language');
   
    if($currentlang=="en-GB"){
       echo '<script>

  window.intercomSettings = {
    app_id: "uh0sk380",
      Brand: "Din Kurs",
       language_override: "en",
       custom_launcher_selector: ".launch_chat",
    
  };
</script>
<script>jQuery(".newsletter-form .wpens_firstname").attr("placeholder", "What is your first name?"); jQuery(".newsletter-form .wpens_email").attr("placeholder", "What is your email?");</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic("reattach_activator");ic("update",intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement("script");s.type="text/javascript";s.async=true;s.src="https://widget.intercom.io/widget/uh0sk380";var x=d.getElementsByTagName("script")[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent("onload",l);}else{w.addEventListener("load",l,false);}}})()</script>';


    }


 else{ 
echo '<script>
       window.intercomSettings = {
       app_id: "uh0sk380",
       Brand: "Din Kurs",
       language_override: "sv",
       custom_launcher_selector: ".launch_chat"
    
  };
</script>
<script>jQuery(".newsletter-form .wpens_firstname").attr("placeholder", "Vad är ditt förnamn?"); jQuery(".newsletter-form .wpens_email").attr("placeholder", "Vad är din e-postadress?");</script>

<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic("reattach_activator");ic("update",intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement("script");s.type="text/javascript";s.async=true;s.src="https://widget.intercom.io/widget/uh0sk380";var x=d.getElementsByTagName("script")[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent("onload",l);}else{w.addEventListener("load",l,false);}}})()</script>';
 }

 ?>
 
 <!-- jQuery CDN Link -->

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://www.dinkurs.se/wp-content/themes/dinkurs/js/slick.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
 <script src="<?php echo get_stylesheet_directory_uri();?>/js/owl.carousel.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri();?>/js/custom.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri();?>/js/intercom.js"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<!-- code to change the footer email text -->
<?php
$currentlang = get_bloginfo('language');   
if($currentlang=="sv-SE"){
  echo "<script>jQuery('#easy-newsletter-form .input-field label').text('E-post');</script>";
}
  ?>
<script>
/*code to load more post and hide the loadmore button*/
   var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    var page = 2;
    jQuery(function($) {
        $('body').on('click', '.loadmore', function() {
            var data = 
                {
                'action': 'load_posts_by_ajax',
                'page': page,
                'security': '<?php echo wp_create_nonce("load_more_posts"); ?>',
                'author': '<?php echo esc_html($curauth->ID); ?>'

                };

            $.post(ajaxurl, data, function(response) {
                if ( '' === response ) {
                  $('.loadmore').hide();
                    return;
                }
                $('#my-posts').append(response);
                page++;
            });
        });
    });



 /*code for intercom*/

function validation(form_id){
   //var interest_email = document.getElementsById("term").value; .val()
  //  function reply_click(clicked_id)
  // {
  //     var post_id = clicked_id;
  //     alert(post_id);   
  // }
    console.log($('#'+form_id+' #term').val()); 
   // alert $(form_object); 
   var interest_email = $('#'+form_id+' #term').val();
   var fullname = $('#'+form_id+' #fulln').val();  
   var phn =  $('#'+form_id+' #telep').val();  		
     console.log(interest_email);
   if(interest_email.trim() == ""){  
    swal("<?php the_field('error_text_something_missing','526');?>", "<?php the_field('valid_email_text','526');?>", "error");
    return false;
   } 
   else{   
    Intercom('update', {"email": interest_email});        
    Intercom('update', {"utm_campaign": "Personal Demo"});
    $('#term').val('');   //to clear input value.     
    // swal("<?php the_field("success_text","526") ?>","<?php the_field("text_message","526") ?>","success");

    var lang= document.documentElement.lang;
	 $.ajax({
        type: 'POST',
        url: 'https://www.dinkurs.se/en/automated/',
        data: { "email": interest_email,"fullname": fullname,"phn": phn },
        success: function() { phn
			if(lang=="en-GB"){window.location = "https://www.dinkurs.se/en/thanks-page/";}
			else{window.location = "https://www.dinkurs.se/thanks-page/";}        }
    });
   return false;
   }
}
	
	
/*to stop slider on input click*/
$('input#term').click(function() {
    $('#bannerCarousel').carousel('pause');
});

</script>

<!-- Js for post to stick the icons of facebook in sigle.php page -->



<!-- below code for faq page -->
<script>
$(document).ready(function() {
  jQuery( document ).ready(function() {
    jQuery(".collapse").on('show.bs.collapse', function(){
            jQuery(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
            jQuery(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
      });
});
</script>

<?php wp_footer(); ?>

<script>
        $(document).on('ready', function() {
          
          $('.regular').slick({
            dots: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: true,
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: true,
                }
              }
            ]
        });

        });
      </script>

<!-- about us page -->

<script>
        $('.slick1').slick({
  centerMode: true,
  centerPadding: '30px',
  slidesToShow: 3,
  responsive: [
  {
      breakpoint: 992,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
                
    </script>
    <script>
        $('.slick2').slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 5,
        responsive: [
        {
            breakpoint: 992,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '20px',
                slidesToShow: 4
            }
            },
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '30px',
                slidesToShow: 2
            }
            }
        ]
        });
                    
        </script>

<!-- <script>
// Wordpress Admin Dashboard Language Changes 
if (jQuery('html').is(':lang(en-GB)')) {
    console.log( "American English.........................." );
} else {
  console.log( "Swedish....................................." );
}
</script>  -->

   <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LckcNcZAAAAADJvgMYPIADouzEQh11wAbdvkSi_', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
<script>
	// Triggering Form
	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>	
<script>
	
	//////////// FUNCTION FOR ENGLISH BANNER POP UP //////////////////////////

	function myFunctiondfsd(){
		
		var emaeng = $('.emailtrigger').val();
		var iframeengurl = "https://dinkurs.se/admin/?action=new&source=base&set_lang=en&email="+emaeng 
		
		    var lang= document.documentElement.lang;
			 $.ajax({
				type: 'POST',
				url: 'https://www.dinkurs.se/en/automated/',
				data: { "email": emaeng },
				success: function() { 		
					$("#exampleModalEnglish iframe").attr("src",iframeengurl);
					$('#exampleModalEnglish').modal('show');
				}
			});

		$("#cpa-form").submit(function(e){
    e.preventDefault();
  });
		
		var emae = $('.emailtrigger').val();
		console.log("-----------"+emae);
		$("input[name='email_address']").val(emae);
	}
 
		///////////////// FUNCTION FOR SWEDISH BANNER POP UP ///////////////////
	
		function myFunctiondsdfc(){
		
		var emaswed = $('.emailtrigger').val();
		var iframeengurl = "https://dinkurs.se/admin/?action=new&source=base&set_lang=sv&email="+emaswed 
		
		  var lang= document.documentElement.lang;
			 $.ajax({
				type: 'POST',
				url: 'https://www.dinkurs.se/en/automated/',
				data: { "email": emaswed },
				success: function() { 		
					$("#exampleModalSweden iframe").attr("src",iframeengurl);
					$('#exampleModalSweden').modal('show');
				}
			});

		$("#cpa-form").submit(function(e){
    e.preventDefault();
  });
		
		var emae = $('.emailtrigger').val();
		console.log("-----------"+emae);
		$("input[name='email_address']").val(emae);
	}
	
	///////////////// DISABLING BANNER BUTTON ///////////////////////////////////////
	
	   $('.emailtrigger').keyup(function () {
            if ($(this).val() == '') {
                $('.enableOnInput').prop('disabled', true);
            } else { 
                $('.enableOnInput').prop('disabled', false);
            }
        }); 
</script>	

	<div class="modal fade" id="exampleModalEnglish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-tryfreeiframe">
        <div class="modal-content">
            <!-- Modal Body -->
            <div class="modal-body">
                <iframe  width="450px" height="580px" ></iframe>
            </div>
             
        </div>
    </div> 
</div>

	<div class="modal fade" id="exampleModalSweden" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-tryfreeiframe">
        <div class="modal-content">
            <!-- Modal Body -->
            <div class="modal-body">
                <iframe  width="450px" height="633px" ></iframe>
            </div>
            
        </div>   
    </div> 
</div>


</body>
</html>
