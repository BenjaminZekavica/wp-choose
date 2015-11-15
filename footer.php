<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="copyright">
                    <p><?php $options = get_option('ad_theme_options');  echo $options['copyright']; ?>- WordPress Theme by <a href="http://www.benjamin-zekavica.de">Benjamin Zekavica</a></p></div>
			    </div>
                <div class="col-md-4">
                   <div class="footer-navi">
                      <nav>
                        <ul id="fo-nav">
                          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                         </ul>
                      </nav>
           			</div> 
                </div>
			</div>		
		</div>	
	</footer>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.smooth-scroll.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/custom.js" type="text/javascript"></script>
   <?php wp_footer(); ?>
 </body>
</html>

