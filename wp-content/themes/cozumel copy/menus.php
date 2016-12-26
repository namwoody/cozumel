<?php
/**
 *  Template Name: Menus Template 
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
		<h2>Menus</h2>
	</div>
</div>
<div id="menu">


	<div id="product">
	
		<ul>	
			<li class="breakfast">
				<div class="view-image"></div>
				<h1><a href="#animatedModal">Breakfast</a></h1>
					
			


			</li>
			<li class="nachos">
				<div class="view-image"></div>
				<h1><a href="">Nachos</a></h1>
			</li>
			<li class="enchiladas">
				<div class="view-image"></div>
				<h1><a href="">Enchiladas(3pcs)</a></h1>
			</li>
			<li class="Burrito-bowls">
				<div class="view-image"></div>
				<h1><a href="">Burrito Bowls</a></h1>
			</li>
			<li class="burritos">
				<div class="view-image"></div>
				<h1><a href="">Enchiladas(3pcs)</a></h1>
			</li>
			<li class="burger">
				<div class="view-image"></div>
				<h1><a href="">burger</a></h1>
			</li>

		</ul>
	</div>





</div>



<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-footer') ); ?>