<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<!-- side -->
<section id="sidebar">
<!-- Mini Posts -->
    <section>
        <div class="mini-posts">
            <!-- Mini Post -->
            <article class="mini-post">
                <header>
                    <h2><a href="blog.html">法人携帯専門家が教える<br>お得な法人携帯情報</a></h2>
                    <p class="top_text">corporate mobile information</p>
                </header>
            </article>
			<?php
			  $args = array(
			    'post_type' => 'post',
			    'posts_per_page' => 10
			  );
			  $st_query = new WP_Query( $args );
			?>
			<?php if ( $st_query->have_posts() ): ?>
			  <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
			    <a href="<?php the_permalink(); ?>">
			                <article class="mini-post">
			                    <header>
			                        <h3><?php the_title();?></h3>
			                        <div style="line-height: 17px; font-size: 13px;">
										<?php echo mb_substr(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50); ?>
			                        </div>
			                        <time class="published" datetime=2017-11-18>
			                        <?php the_time('Y-m-d') ?>
			                        </time>
			                    </header>
			                    <span class="image">
			                    	<?php the_post_thumbnail(array(100, 100));?>
			                    </span>
			                </article>
				</a>
			  <?php endwhile; ?>
			<?php else: ?>
			  <p>新しい記事はありません</p>
			<?php endif; ?>
			</div>
		</section>

	<!-- Posts List -->
		<section>
			<ul class="posts">
				<?php
					$posts = get_posts(array(
						'posts_per_page' => 5, // 表示件数
						'category_name' => 'iphone' // カテゴリIDもしくはスラッグ名
					));
				?>
				<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
					<li>
						<article>
							<header>
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<time class="published" datetime="2015-10-20"><?php the_time('Y-m-d') ?></time>
								<div style="word-break: break-all; font-size: 13px"><?php the_excerpt(); ?></div>
							</header>
							<a href="#" class="image">
					                	<?php the_post_thumbnail(array(100, 100));?>
							</a>
						</article>
					</li>
				<?php endforeach; endif; ?>
			</ul>
		</section>
	</div>