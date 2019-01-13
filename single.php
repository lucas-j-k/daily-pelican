<!-- SINGLE ARTICLE VIEW (POST) -->

<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="single-article__img-wrap">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</div>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<div class="single-article__content">
				<header class="single-article__header">
					<!-- post title -->
					<h1 class="single-article__heading">
						<a class="single-article__heading-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->

					<!-- post meta -->
					<div class="single-article__date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> <span class="single-article__category-link"><?php _e( ' in ', 'html5blank' ); the_category(' '); // Separated by commas ?></span></div>
					<!-- /post meta -->
					<div class="share">
						<a href="#" class="share__link"><i class="fas fa-share-alt"></i> Share</a>
						<ul class="social-menu__list">
							<li class="social-menu__item">
								<a href="#" class="social-menu__link"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="social-menu__item">
								<a href="#" class="social-menu__link"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="social-menu__item">
								<a href="#" class="social-menu__link"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
				</header>

				<div class="single-article__body">
					<?php the_content(); // Dynamic Content ?>
				</div>

				<footer class="single-article__footer">
					<div class="feed-tags">
						<?php the_tags( '<ul class="feed-tags__list"><li>', '</li><li>', '</li></ul>' ); ?>
					</div>
				</footer>
			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
