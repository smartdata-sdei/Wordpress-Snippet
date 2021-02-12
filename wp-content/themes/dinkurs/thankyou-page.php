<?php 
/**
 * The front page template file
 * Template Name: Thankspage
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Thanks Page</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">


</head>
<?php get_header();?>
<body>

<?php 
  $currentlang = get_bloginfo('language');
    if($currentlang=="en-GB"){ ?> 
      <div class="notfound-wrapper">
			<div class="box">
				<div class="image">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/thanks-graphich-en.jpg">
				</div>	
				<div class="text">
					<h1>Thank You</h1>
					<h2>We Will Get Back TO You Soon......</h2>
					<?php
					$text2 = $_POST['email'];
					echo $text2;
					?>
					<button onclick="location.href='<?php echo get_site_url(); ?>'" class="btn btn-primary">GO TO HOME PAGE</button>
				</div> 
			</div> 
		</div>
    <?php }
      else{ ?>
        <div class="notfound-wrapper">
			<div class="box">
				<div class="image">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/thanks-graphich-se.jpg">
				</div>	
				<div class="text">
					<h1>Tack</h1>
					<h2>Vi kommer snart tillbaka till dig ......</h2>
					<?php
					$text2 = $_POST['email'];
					echo $text2;
					?>
					<button onclick="location.href='<?php echo get_site_url(); ?>'" class="btn btn-primary">GÅ TILL HEMSIDAN</button>
				</div> 
			</div> 
		</div>
     <?php } 
?>

    
<?php get_footer();
?>

<script>
	var lang12= document.documentElement.lang;
	if(lang12=="en-GB"){setTimeout(() => { window.location = "https://www.dinkurs.se/en/"; }, 5000);}
	else{setTimeout(() => { window.location = "https://www.dinkurs.se/"; }, 5000);}   
</script>	