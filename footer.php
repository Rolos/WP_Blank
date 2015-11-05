	<footer class="full-width">
		<div class="not-full-width">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<section>
							<h3><?php _e('', '');?></h3>
				            <?php wp_nav_menu(array('theme_location' => 'footer-menu-left')); ?>
					    </section>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<section>
							<h3><?php _e('', '');?></h3>
				            <?php wp_nav_menu(array('theme_location' => 'footer-menu-right')); ?>
					    </section>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<section>
					    </section>
					</div>
				</div>
			</div>
			<div class="below_footer">
	        	<p class="alignleft">&copy;<?php echo date("Y"); echo " "; bloginfo('name');?></p>
	            <p class="alignright credito">Diseño y desarrollo: <a href="http://www.netmadness.net/" target="_blank">Netmadness</a></p>
	        </div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
