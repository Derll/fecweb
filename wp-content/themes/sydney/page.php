<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sydney
 */

get_header(); ?>

	<div class="content-area col-md-2"></div>
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="content-area col-md-2"></div>

<?php get_footer(); ?>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script>
	function is_weixin() {
		    var ua = navigator.userAgent.toLowerCase();
		    if (ua.match(/MicroMessenger/i) == "micromessenger") {
		        return true;
		    } else {
		        return false;
		    }
		}
		var isWeixin = is_weixin();
		var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;
		var weixinTip = $('<div id="weixinTip"><p><img src="http://www.zjufec.cn/live_weixin.png" alt="微信打开"/></p></div>');
		
		
		$(".ow-button-hover").click(function(){
			if(isWeixin){
				$("body").append(weixinTip);
				$("#weixinTip").css({
					"position":"fixed",
					"left":"0",
					"top":"0",
					"height":winHeight,
					"width":"100%",
					"z-index":"1000",
					"background-color":"rgba(0,0,0,0.8)",
					"filter":"alpha(opacity=80)",
				});
				$("#weixinTip p").css({
					"text-align":"center",
					"margin-top":"10%",
					"padding-left":"5%",
					"padding-right":"5%"
				});
			}
			else{
				window.open("http://www.zjufec.cn/fec-recruiting.docx.zip");
			}
		});
</script>
