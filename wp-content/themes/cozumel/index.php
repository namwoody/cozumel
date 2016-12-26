<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="container">
	<div class="row">
		<div id="slider">

				
						<div class="slider" id="front-slider">
							<?php 
		  					  echo do_shortcode("[metaslider id=24]"); 
							?>
						</div>

				
		</div>
	</div>
</div>
	
<div class="container">

	<div class="row">
		<div class="col-md-5" id="tacos">
		 
			<img src="<?php bloginfo('template_directory'); ?>/images/img/chips-with-salsa.jpg" alt="chips-with-salsa" width="480px;">	
		</div>
	
		<div class="col-md-7" style="margin-top: 20px; margin-bottom: 20px;">
			<div class="row" id="second-main">
					<div class="col-md-5 col-sm-5 col-xs-12" id="lunch-special-1">
						<h2>LUNCH SPECIAL <span id="price">$5.95</span></h2>
						<p style="padding-bottom: 20px;">Pick One<br />
								with <span>Free</span> Sm Soup or Sm Drink
							<ul id="nav1">
							    <li>Single Taco</li>
							    <li>Single Enchilada</li>
							</ul>

						</p>

					</div>

					<div class="col-md-5 col-sm-5 col-xs-12" id="lunch-special-2">
						<h2>LUNCH SPECIAL <span id="price">$9.95</span> </h2>
						<p>Pick One<br />
							with <span>Free</span> Sm Soup or Sm Drink
							<ul id="nav2">
							    <li>Burrito</li>
							    <li>Fajita</li>
							    <li>Wrap</li>
							    <li>3PC Enchiladas</li>
							    <li>9PC Wings</li>
							</ul>
						</p>					
					</div>
				
					<div class="col-md-10 col-sm-10 col-xs-12" id="front-menus">
						<h1>OUR MENUS</h1>
						<img width="220px" src="<?php bloginfo('template_directory'); ?>/images/img/tortilla.png" alt="cozumel tortilla">
						<a href="/menus" id="menu-button">Learn More</a>
					</div>	


			</div>
		</div>
	</div>
	<div class="row">
		
		
		
	</div>
</div>



<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-footer') ); ?>