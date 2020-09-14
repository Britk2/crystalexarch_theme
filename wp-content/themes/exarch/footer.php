<?php wp_footer();?>
</body>
<footer class="footer">
<!-- <ul  class="footer__group">
	<li class="footer__item"> <a href="#" class="footer__link"><img class="instagrm__logo" src="<?php echo get_template_directory_uri();?>/pic/instagram_logo.png" alt="instagram logo"></a></li>
	<li class="footer__item"> <a href="#" class="footer__link"><img class="yt__logo" src="<?php echo get_template_directory_uri();?>/pic/youtube_logo.png" alt="youtube logo"></a></li>
	<li class="footer__item"> <a href="#" class="footer__link"><img class="linkedin__logo" src="<?php echo get_template_directory_uri();?>/pic/linkedin_logo.png" alt="linkedin logo"></a></li>
	<li class="footer__item"> <a href="#" class="footer__link"><img class="github__logo" src="<?php echo get_template_directory_uri();?>/pic/github_logo.png" alt="github logo"></a></li>
</ul> -->


<div class="footer-full-menu">
	<!-- <?php
		wp_nav_menu([
		'theme_location' => 'footer_menu'
		]);
	?> -->
	<?php
		wp_nav_menu([
		'theme_location' => 'social_menu'
		]);
	?>
	Copyright &copy; <?php echo date("Y"); ?> | <?php bloginfo('blogname'); ?>
</div>


</footer>
</html>

