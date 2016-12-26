<?php
/**
 *  Template Name: Catering Template 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<div class="container">
	<div class="row text-center" id="top-menus">
		<h2>Catering</h2>

		<div class="col-md-5">
			<h2>CALL A J </h2>
			<p>for catering
			212-445-1009
			info@cozumeltortilla.com</p>		
		</div>

		<div class="col-md-7">
			<?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
		</div>
	</div>
</div>




<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-footer') ); ?>