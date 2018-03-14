<footer class="main-footer bg__dark">
	<div class="container">
		<div class="col-md-12 ft-wrap">
			<p class="copy">&copy <?php echo date("Y");?> <?php echo get_bloginfo('name');?></p>
			<div class="social-wrap">
                <ul>
					<?php if ( have_posts() ) : query_posts('cat=3');
						while (have_posts()) : the_post(); ?>

                            <li><a href="<?php echo get_post_meta($post->ID, 'Адрес', true) ; ?>" title="<?php the_title(); ?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true) ; ?>" aria-hidden="true"></i></a></li>

						<?php endwhile; endif; wp_reset_query();?>
                </ul>
			</div>
		</div>

	</div>
</footer>
<div class="hidden">

</div>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/respond/respond.min.js"></script>
<![endif]-->

<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/parallax/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/mixitup/mixitup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/scroll2id/PageScroll2id.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

<?php wp_footer(); ?>

</body>
</html>