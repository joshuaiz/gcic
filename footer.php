			<footer class="footer clearfix" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
				
				<?php get_sidebar('sidebar2'); ?>

				<div class="social">
					<ul class="social-links">
						<li><a href="https://www.linkedin.com/profile/view?id=66450071" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/linkedin_32.png"></a></li>
						<li><a href="https://twitter.com/GraettingerCole" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter_32.png"></a></li>
						<li><a href="https://www.facebook.com/elizabethgraettingercole" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook_32.png"></a></li>
					</ul>

				</div>
					

				</div>
				
				<div id="colophon" class="wrap clearfix">
				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
				</div>

			</footer>

		</div>
		

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
