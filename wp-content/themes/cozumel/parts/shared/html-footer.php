<div class="footer1">
	<div class="container">
		<div class="row" style="margin-top:15px;">
			<div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-4">
				<ul>
					<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
				</ul>
			</div>
			<div class="col-md-5 col-md-offset-2 col-sm-8 col-xs-8" id="subscribe-form">
				<h2>NEWSLETTER</h2>
				<p>
					Subscribe to our newsletter to receive news, updates,<br /> 
					free stuff and new releases by email. We don't do spam..
				</p>
				<?php 
				$widgetNL = new WYSIJA_NL_Widget(true);
				echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));

				?>
			</div>			
		</div>
	</div>
</div>



<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-6" id="footer-nav">	
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>
					</div>
					<div class="col-md-6">
						<?php echo do_shortcode( '[contact-form-7 id="37" title="Contact form 1"]' ); ?>
					</div>	

				</div>
			</div>
			<div class="col-md-5">
				<p id="address">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.6681830416487!2d-73.99060938532305!3d40.76932227932563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258595d7ecaad%3A0xc5d67e2d0f87c6bc!2s877+10th+Ave%2C+New+York%2C+NY+10019!5e0!3m2!1sen!2sus!4v1482703512612" width="370" height="200" frameborder="0" style="border:0" allowfullscreen></iframe><br />
					877 10th Ave,<br /> 
					New York, NY 10019<br />
					<span>PHONE: (212) 445 1009</span> / <a href="">EMAIL US</a>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="bottom-footer">
	<div class="container">
		<div class="row text-center">
			&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. <span>Designed by Mii Creative Media</span>
		</div>
	</div>
</div>






<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"> </script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"> </script>

<script src="https:////cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/animatedModal.min.js"></script>




	<?php wp_footer(); ?>
	</body>
</html>