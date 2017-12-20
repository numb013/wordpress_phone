<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div id="main">
                <!-- Post -->
                <article class="post_single">



<?php
// if (have_posts()) : 
//   while (have_posts()) :the_post();
//     get_template_part('content');
//   endwhile;
// endif;
?>

<?php 
if(have_posts()): 
while(have_posts()): the_post(); ?>
	<h2>
		<?php the_title(); ?>
	</h2>
	<div class="thumbnail">
		<?php the_post_thumbnail(array(100, 100)); ?>
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
