<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?><?php 
	
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if ((strpos($actual_link, "appliance") !== false)||(strpos($actual_link, "applyance") !== false)||(strpos($actual_link, "users") !== false)){ 
		
		$actual_link=str_replace("http://","https://",$actual_link);
		$actual_link=str_replace("applyance","appliance",$actual_link);
		$actual_link=str_replace("www.","",$actual_link);
		//echo $actual_link;
		header('Location: ' . $actual_link);
	}	

  $title ='Din kurs.se';
  $description = '';  
  $id = get_the_ID();
  $currentlang = get_bloginfo('language');
                      
  //echo"<script>console.log($currentlang);</script>";
  if($id==19){
    if(  $currentlang=="en-GB"){//if home page
      $title = 'Promote , Manage and sell your event tickets Online';
      $description = 'Din kurs helps  in Everything you need to sell tickets & manage your event online from start to finish. Use our system to market your event online. Register today & Promote your event online.';
    }
    else{//if home page
      $title = 'Marknadsför, hantera och sälj dina evenemangsbiljetter online';
      $description = 'Din kurs hjälper till i allt du behöver för att sälja biljetter och hantera ditt evenemang online från början till slut. Använd vårt system för att marknadsföra ditt evenemang online. Registrera dig idag och marknadsföra ditt evenemang online.';
    }
  }

  /*******************************************************************/
  if($id==170){// on Testimonials page
    if($currentlang=="en-GB"){
      $title ='Reviews and customer testimonials for Din kurs';
      $description = 'Feedback from customers and event organizers who choose Din kurs as their events registration and ticketing tool for their event websites.';
      }
      else{// on Testimonials page
      $title ='Recensioner och kundbedömningar för Din kurs';
      $description = 'Feedback från kunder och evenemangsarrangörer som väljer Din kurs som evenemangsregistrerings- och biljettverktyg för sina evenemangswebbplatser.';
      }
  }
  if($id==1377){// on About Us page
    if($currentlang=="en-GB"){
    $title ='Manage or promote event with Din kurs';
    $description = 'Everything from courses to corporate events. din kurs helps you with registrations, payments, attendance management, follow-up and more';
    }
    else{
       $title ='Hantera eller marknadsföra evenemang med Din kurs';
        $description = 'Allt från kurser till företagsevenemang. din kurs hjälper dig med registreringar, betalningar, närvarohantering, uppföljning och mer';
    }
  }
  
    /*******************************************************************/

  if($id==23){// on Pricing page
    if($currentlang=="en-GB"){
      $title ='Pick a plan. Grow faster with Din kurs';
      $description = 'Get started with Essentials plan. Upgrade to Standard or Premium plans to access advanced features.';
    }else{
      $title ='Välj en plan. Väx snabbare med Din kurs';
      $description = 'Kom igång med Essentials-planen. Uppgradera till Standard- eller Premium-planer för att få tillgång till avancerade funktioner.';
    }
  }
  
    /*******************************************************************/

  if($id==415){ // on Blog page
    if($currentlang=="en-GB"){
      $title ='Blog For Event Organisers';
      $description = 'A complete reimagining of the way to build, design, manage, and experience event websites and registration workflows.';
    }
    else{
      $title ='Blogg för evenemangsarrangörer';
      $description = 'En fullständig ombedömning av sättet att bygga, designa, hantera och uppleva evenemangswebbplatser och registreringsflöden.';
    }
  }
/*******************************************************************/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="">
    <meta name="google-site-verification" content="wWP6yu9EtPEMb08aa-RVW535WRVpkthfRf4Y9HECpXY" />
<meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
<!-- adding header tags as pre the page id -->
<?php
  if($id==19){//if home page    
    if($currentlang=="en-GB"){
    ?>
    <!-- Twitter Card Data -->

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@Din kurs">
        <meta name="twitter:creator" content="@Din kurs">
        <meta name="twitter:title" content="Promote , Manage and sell your event tickets Online">
        <meta name="twitter:description" content="description" content="Din kurs helps  in Everything you need to sell tickets & manage your event online from start to finish. Use our system to market your event online. Register today & Promote your event online.">
        <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
        <!-- Open Graph Data -->
        <meta property="og:title" content="Promote , Manage and sell your event tickets Online"/>
        <meta property="og:type" content="Website" />
        <meta property="og:url" content="https://www.dinkurs.se/en/" />
        <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
        <meta property="og:description" content="Din kurs helps  in Everything you need to sell tickets & manage your event online from start to finish. Use our system to market your event online. Register today & Promote your event online." />
        <meta property="og:site_name" content="Din kurs" />
    <?php
    }else{
      ?>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@Din kurs">
        <meta name="twitter:creator" content="@Din kurs">
        <meta name="twitter:title" content="Marknadsför, hantera och sälj dina evenemangsbiljetter online">
        <meta name="twitter:description" content="description" content="Din kurs hjälper till i allt du behöver för att sälja biljetter och hantera ditt evenemang online från början till slut. Använd vårt system för att marknadsföra ditt evenemang online. Registrera dig idag och marknadsföra ditt evenemang online.">
        <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
        <!-- Open Graph Data -->
        <meta property="og:title" content="Marknadsför, hantera och sälj dina evenemangsbiljetter online"/>
        <meta property="og:type" content="Website" />
        <meta property="og:url" content="https://www.dinkurs.se/en/" />
        <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
        <meta property="og:description" content="Din kurs hjälper till i allt du behöver för att sälja biljetter och hantera ditt evenemang online från början till slut. Använd vårt system för att marknadsföra ditt evenemang online. Registrera dig idag och marknadsföra ditt evenemang online." />
        <meta property="og:site_name" content="Din kurs" />
        <?php
    }
  }
    /*******************************************************************/

  if($id==170){// on Testimonials page 
  if($currentlang=="en-GB"){  
    ?>
      <!-- Twitter Card Data -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@Din kurs">
      <meta name="twitter:creator" content="@Din kurs">
      <meta name="twitter:title" content="Reviews and customer testimonials for Din kurs">
      <meta name="twitter:description" content="description" content="Feedback from customers and event organizers who choose din kurs as their events registration and ticketing tool for their event websites. ">
      <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
      <!-- Open Graph Data -->
      <meta property="og:title" content="Reviews and customer testimonials for Din kurs"/>
      <meta property="og:type" content="Website" />
      <meta property="og:url" content="https://www.dinkurs.se/en/reference-customer/" />
      <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
      <meta property="og:description" content="Feedback from customers and event organizers who choose Din kurs as their events registration and ticketing tool for their event websites. " />
      <meta property="og:site_name" content="Din kurs" />

  <?php
   }else{
?>
      <!-- Twitter Card Data -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@Din kurs">
      <meta name="twitter:creator" content="@Din kurs">
      <meta name="twitter:title" content="Recensioner och kundbedömningar för Din kurs">
      <meta name="twitter:description" content="description" content="Feedback från kunder och evenemangsarrangörer som väljer din kurs som deras evenemangsregistrerings- och biljettverktyg för sina evenemangswebbplatser.">
      <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
      <!-- Open Graph Data -->
      <meta property="og:title" content="Recensioner och kundbedömningar för Din kurs"/>
      <meta property="og:type" content="Website" />
      <meta property="og:url" content="https://www.dinkurs.se/en/reference-customer/" />
      <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
      <meta property="og:description" content="Feedback från kunder och evenemangsarrangörer som väljer Din kurs som evenemangsregistrerings- och biljettverktyg för sina evenemangswebbplatser." />
      <meta property="og:site_name" content="Din kurs" />

  <?php
    }

}// on About Us page 
  if($id==1377){
  if($currentlang=="en-GB"){   
    ?>
    <!-- Twitter Card Data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Din kurs">
    <meta name="twitter:creator" content="@Din kurs">
    <meta name="twitter:title" content="Manage or promote event with Din kurs">
    <meta name="twitter:description" content="description" content=" Everything from courses to corporate events. din kurs helps you with registrations, payments, attendance management, follow-up and more">
    <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
    <!-- Open Graph Data -->
    <meta property="og:title" content="Manage or promote event with Din kurs"/>
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://www.dinkurs.se/en/about-us/" />
    <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
    <meta property="og:description" content=" Everything from courses to corporate events. din kurs helps you with registrations, payments, attendance management, follow-up and more " />
    <meta property="og:site_name" content="Din kurs" />
    <?php 
     }else{
      ?>
    <!-- Twitter Card Data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Din kurs">
    <meta name="twitter:creator" content="@Din kurs">
    <meta name="twitter:title" content="Hantera eller marknadsföra evenemang med Din kurs">
    <meta name="twitter:description" content="description" content=" Allt från kurser till företagsevenemang. din kurs hjälper dig med registreringar, betalningar, närvarohantering, uppföljning och mer">
    <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
    <!-- Open Graph Data -->
    <meta property="og:title" content="Hantera eller marknadsföra evenemang med Din kurs"/>
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://www.dinkurs.se/en/about-us/" />
    <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
    <meta property="og:description" content=" Allt från kurser till företagsevenemang. din kurs hjälper dig med registreringar, betalningar, närvarohantering, uppföljning och mer" />
    <meta property="og:site_name" content="Din kurs" />
    <?php 

    }   
  }
    /*******************************************************************/

  if($id==23){// on Pricing page    
    if($currentlang=="en-GB"){
     ?>
    <!-- Twitter Card Data -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@Din kurs">
      <meta name="twitter:creator" content="@Din kurs">
      <meta name="twitter:title" content=" Pick a plan. Grow faster with Din kurs">
      <meta name="twitter:description" content="description" content=" Get started with Essentials plan. Upgrade to Standard or Premium plans to access advanced features.">
      <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
      <!-- Open Graph Data -->
      <meta property="og:title" content=" Pick a plan. Grow faster with Din kurs"/>
      <meta property="og:type" content="Website" />
      <meta property="og:url" content="https://www.dinkurs.se/en/pricing/" />
      <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
      <meta property="og:description" content=" Get started with Essentials plan. Upgrade to Standard or Premium plans to access advanced features." />
      <meta property="og:site_name" content="Din kurs" />
    <?php
     }else{
 ?>
    <!-- Twitter Card Data -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@Din kurs">
      <meta name="twitter:creator" content="@Din kurs">
      <meta name="twitter:title" content=" Välj en plan. Väx snabbare med Din kurs">
      <meta name="twitter:description" content="description" content="Kom igång med Essentials-planen. Uppgradera till Standard- eller Premium-planer för att få tillgång till avancerade funktioner.">
      <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
      <!-- Open Graph Data -->
      <meta property="og:title" content="Välj en plan. Väx snabbare med Din kurs"/>
      <meta property="og:type" content="Website" />
      <meta property="og:url" content="https://www.dinkurs.se/en/pricing/" />
      <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
      <meta property="og:description" content=" Kom igång med Essentials-planen. Uppgradera till Standard- eller Premium-planer för att få tillgång till avancerade funktioner." />
      <meta property="og:site_name" content="Din kurs" />
    <?php
    }
  }
    /*******************************************************************/

  if($id==415){ // on Blog page
    if($currentlang=="en-GB"){
     ?>
      <!-- Twitter Card Data -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@Din kurs">
      <meta name="twitter:creator" content="@Din kurs">
      <meta name="twitter:title" content=" Din kurs-  Blog For Event Organisers">
      <meta name="twitter:description" content="description" content=" A complete reimagining of the way to build, design, manage, and experience event websites and registration workflows.">
      <meta name="twitter:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
      <!-- Open Graph Data -->
      <meta property="og:title" content=" Din kurs-  Blog For Event Organisers"/>
      <meta property="og:type" content="Website" />
      <meta property="og:url" content="https://www.dinkurs.se/en/blog/" />
      <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
      <meta property="og:description" content=" A complete reimagining of the way to build, design, manage, and experience event websites and registration workflows." />
      <meta property="og:site_name" content="din kurs" />
     <?php
      }else{
         ?>
      <!-- Twitter Card Data -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@Din kurs">
      <meta name="twitter:creator" content="@Din kurs">
      <meta name="twitter:title" content=" Din kurs- Blogg för evenemangsarrangörer">
      <meta name="twitter:description" content="description" content=" En fullständig ombedömning av sättet att bygga, designa, hantera och uppleva evenemangswebbplatser och registreringsflöden.">
      <meta name="twitter:image" content=" https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png">
      <!-- Open Graph Data -->
      <meta property="og:title" content=" Din kurs- Blogg för evenemangsarrangörer"/>
      <meta property="og:type" content="Website" />
      <meta property="og:url" content="https://www.dinkurs.se/en/blog/" />
      <meta property="og:image" content="https://www.dinkurs.se/wp-content/uploads/2020/05/logo.png" />
      <meta property="og:description" content="En fullständig ombedömning av sättet att bygga, designa, hantera och uppleva evenemangswebbplatser och registreringsflöden." />
      <meta property="og:site_name" content="din kurs" />
     <?php

    }
   }
?>
<!-- adding header tags as pre the page id ends here-->    

	  <link rel="Shortcut Icon" href="<?php the_field('favicon','option');?>" type="image/x-icon" />
    <title>:: <?php echo $title?> ::</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
<!--<script src="https://www.google.com/recaptcha/api.js?render=6LckcNcZAAAAADJvgMYPIADouzEQh11wAbdvkSi_"></script> -->

    
    <!-- Theme CSS -->
   <link href="<?php echo get_stylesheet_directory_uri();?>/css/owl.carousel.min.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/slick.css">
    <!--<link href="<?php echo get_stylesheet_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css">-->
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri();?>/wordpress.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/slick.css" rel="stylesheet" type="text/css">
	

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43878516-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'UA-43878516-1');
    </script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-LTJYCD5YB3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-LTJYCD5YB3');
	</script>

<?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1687596651405862');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1687596651405862&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YRBZH05R09"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YRBZH05R09');
</script>
	
	</head>
<body <?php body_class(); ?>>
<!-- Wrapper -->

<div class="wrapper">
    <!-- Header Navigation -->
    <nav class="navbar navbar-expand-md navbar-header animated fadeInDown"  data-wow-delay="0.1s">
        <div class="container">

            <?php 
                    $currentlang = get_bloginfo('language');
                      if($currentlang=="en-GB"){?> <a class="navbar-brand" href="https://www.dinkurs.se/en/"><img src="<?php the_field('logo','option');?>" alt="" class="img-fluid" /></a> <?php }
                        else{ ?>
                          <a class="navbar-brand" href="http://www.dinkurs.se/sv/"><img src="<?php the_field('logo','option');?>" alt="" class="img-fluid" /></a>
                       <?php }
                  ?>

            <div class="collapse navbar-collapse" id="navbarToggle">
                <ul class="navbar-nav nav ml-auto">
                    <?php
			                  wp_nav_menu( array(
			                    'theme_location' => 'top',
			                    'menu_class'     => 'navbar-nav nav ml-auto ',                    
			                   ) );
			        ?>

                <li class="contact-pop"><a href="javascript:void(0)" class="hamburger hamburger--spring js-hamburger ">

                  <?php 
                    $currentlang = get_bloginfo('language');
                      if($currentlang=="en-GB"){ echo
                        "Contact" ;}
                        else{
                          echo "Kontakta oss";  
                        }
                  ?>
               
                 <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                  </div>
                </a></li>
                    
                        <?php 
    
                    $currentlang = get_bloginfo('language');
                      if($currentlang=="en-GB"){ ?>
                        <li>
						<!--<a href="#" class="user-icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/user-icon.svg" /></a>-->
						<a href="https://dinkurs.se/admin/?set_lang=en">Login</a></li>                  
					<?php }
                        else{ ?>
                          <li><a href="https://dinkurs.se/admin/?set_lang=sv">Logga in</a></li>    
					<?php   } 
                  ?>
				<?php if($currentlang=="en-GB"){ ?>	
					<li class="nav-btn custom_login"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6564">
						Try For Free
					</button></li>   
					<?php } else{ ?>
					<li class="nav-btn custom_login"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal234">
						Prova gratis
					</button></li>				
					<?php }  ?> 
                </ul>
            </div>    

            <div class="nav-language dropdown">
               <?php //echo do_shortcode('[language-switcher]') ?>
               <?php //if ( function_exists( 'mltlngg_display_switcher' ) ) mltlngg_display_switcher(); ?>
            </div>
            <?php //echo do_shortcode('[wpm_lang_switcher]'); 
             if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher ('dropdown', 'both');
                ?>
             
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
	
	
<!--	<div class="pageTitle about-banner" style="background: url(<?php echo the_field('banner_image','1377'); ?>">
		<div class="container">
			<div class="about-banner-content cust646545">
				 <h2><?php echo the_field('webinar_title','2029'); ?></h2>
			<p><?php echo the_field('webinat_subtitle','2029'); ?></p>
			</div>
		</div>
	</div> -->
	
	<div class="modal fade" id="exampleModal6564" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-tryfreeiframe">
        <div class="modal-content">
            <!-- Modal Body -->
            <div class="modal-body">
                <iframe src="https://dinkurs.se/admin/?action=new&source=base&set_lang=en" width="450px" height="580px" ></iframe>
            </div>
            
        </div>
    </div>
</div>

	<div class="modal fade" id="exampleModal234" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-tryfreeiframe">
        <div class="modal-content">            
            <!-- Modal Body -->
            <div class="modal-body">
                <iframe src="https://dinkurs.se/admin/?action=new&source=base&set_lang=sv" width="450px" height="633px" ></iframe>
            </div>
            
        </div>
    </div>
</div>
