<?php
/**
 * Template Name: 記事一覧
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


<!-- Main -->
        <div id="main">
	        <!-- 導入事例 -->
	        <article class="post">
	            <header class="header_top" >
	                    <div class="title_top">
	                            <h2>記事一覧</h2>
	                            <p class="top_text">Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
	                    </div>
	            </header>

                <section>
                    <ul class="posts">
						<?php
						  $args = array(
						    'post_type' => 'post',
						    'posts_per_page' => 10
						  );
						  $st_query = new WP_Query( $args );
						?>
						<?php if ( $st_query->have_posts() ): ?>
						  <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
							<li>
								<article>
									<header class="introduction_header">
										<a href="<?php the_permalink(); ?>">
											<span class="img_post left">
												<?php the_post_thumbnail(array(100, 100)); ?>
											</span>
											<h2>
												<?php the_title();?>
											</h2>
											<div style="line-height: 17px; font-size: 13px;">
<?php echo mb_substr(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50); ?>
											</div>
										</a>
									</header>
								</article>
							</li>
						   <?php endwhile; ?>
						<?php else: ?>
						<p>新しい記事はありません</p>
						<?php endif; ?>
		            </ul>
		        </section>
		    </article>
    	</div>


<?php
get_sidebar();
get_footer();

