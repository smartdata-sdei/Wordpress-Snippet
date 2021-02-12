<?php 
/**
 * The front page template file
 * Template Name: autoamtedemails
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
	// To send Mails -->

$text2 = $_POST['email'];
$fname = $_POST['fullname'];
$telephone = $_POST['phn'];

				$to = 'ew-support@elsewhere.se'; 
				$to1 = 'support@dinkurs.se';
				// $to2 = 'sushantkashyap07@gmail.com';
				$subject = 'Alert from dinkurs.se';
				$body = '
				<html>
				<p>
				Mailet har skickats från webbsidan dinkurs.se
				kontrollera funktionen Outbound i Intercom
				</p>
				<p>email:: </p>'.$text2.'
				<br/>
				<p>Hälsningar</p> 
				<p>Webbsidan</p> 
				<p>Dinkurs.se </p>
				<script>document.writeln(interest_email);</script>
				</html>
				';
				$headers = array('Content-Type: text/html; charset=UTF-8','From: Ett mail skickat från funktionen visa mig mer <mattias@dinkurs.se>');

				wp_mail( $to, $subject, $body, $headers );
				wp_mail( $to1, $subject, $body, $headers );
				wp_mail( $text2, $subject, $body, $headers );

?>
