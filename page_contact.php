<?php
/**
 * Template Name: お問い合わせ
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main">
	<!-- Post -->
	<article class="post_contact">
		<?php 
		if(have_posts()): 
		while(have_posts()): the_post(); ?>
			<h2>
				<?php the_title(); ?>
			</h2>
			<div class="thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry">
				<div class="entry_main">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</article>
</div>
<p><?php if (function_exists(“the_cir_upload_field”)) { the_cir_upload_field(); } ?></p>
<?php
get_sidebar();
get_footer();
