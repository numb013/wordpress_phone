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
										<?php echo mb_substr($post->post_content, 0, 50, 'UTF-8').'……'; ?>
			                        </div>
			                        <time class="published" datetime=2017-11-18>
			                        2017-11-18
			                        </time>
			                    </header>
			                    <span class="image">
			                    	<?php the_post_thumbnail();?>
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
									<li>
										<article>
											<header>
												<h3><a href="#">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="#" class="image">
												<img src="<?php bloginfo('template_directory'); ?>/images/pic08.jpg">
												<img src="images/pic08.jpg" alt="" />
											</a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="#" class="image">
												<img src="<?php bloginfo('template_directory'); ?>/images/pic09.jpg">
												<img src="images/pic09.jpg" alt="" />
											</a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Euismod amet placerat vivamus porttitor</a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="#" class="image">
												<img src="<?php bloginfo('template_directory'); ?>/images/pic10.jpg">
												<img src="images/pic10.jpg" alt="" />
											</a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="#" class="image">
												<img src="<?php bloginfo('template_directory'); ?>/images/pic11.jpg">
												<img src="images/pic11.jpg" alt="" />
											</a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="#">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="#" class="image">
												<img src="<?php bloginfo('template_directory'); ?>/images/pic12.jpg">
												<img src="images/pic12.jpg" alt="" />
											</a>
										</article>
									</li>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>