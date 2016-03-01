<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<!--<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>-->

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<!--<a href="#">copyright©浙江大学未来企业家俱乐部</a>-->
			<!--<span class="sep"> | </span>-->
			<!--<?php printf( __( 'Theme: %2$s by %1$s.', 'sydney' ), 'aThemes', '<a href="http://athemes.com/theme/sydney" rel="designer">Sydney</a>' ); ?>-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_url');?>/sketch.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/spirit.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/add.js"></script>
<script>
	var ua = window.navigator.userAgent.toLowerCase(); 
	if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
		return ; 
	}else{ 
		if(window.screen.width>1000){
			$(".button-slider").css({
				"font": "24px/1.5 Tahoma,Helvetica,Arial,'宋体',sans-serif",
				"top": "80px",
				"zoom" :"130%"
			});
		}
	} 
</script>
<link rel="stylesheet" href="http://www.zjufec.cn/wp-content/themes/sydney/fonts/font-awesome.css">
</body>
</html>
