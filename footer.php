	<footer class="wrapper-full">
		&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		<div class="contact-footer">
            <p class="title">Contacto</p>
            <p class="content">
                Roberto Pastoriza 552, Esq. Calle 5<br/>
                Evaristo Morales,<br/>
                Santo Domingo, Rep. Dom.
            </p>
        </div>
	    <section class="site-map">
	        <div class="wrapper">
	            <?php
	            wp_nav_menu(array('theme_location' => 'footer-menu'));
	            ?>
	        </div>
	    </section>

	    <section class="inter-credit">
	        <div class="wrapper">
	            <p>Diseño y desarrollo: <a href="http://www.intermade.com/" target="_blank">Intermade Web Creations</a></p>
	        </div>
	    </section>
	</footer>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
