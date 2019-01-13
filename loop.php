<!-- BASIC LOOP - RENDERS ALL POSTS AS STANDARD CATEGORY FEED ARTICLES -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('feed-article'); ?>>
		<div class="feed-article__body">
			<div class="feed-article__img-wrap">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="feed-article__img-link">
						<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
			</div>
			<div class="feed-article__text-wrap">
				<!-- post title -->
				<h2 class="feed-article__heading">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="feed-article__heading-link"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->
				<!-- post details -->
				<span class="date feed-article__date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<!-- /post details -->
			</div>
		</div>
		<!-- Render the tags in a list: -->
		<div class="feed-tags">
			<?php the_tags( '<ul class="feed-tags__list"><li>', '</li><li>', '</li></ul>' ); ?>
		</div>
		<!-- End Tags -->
	</article>
	<!-- /article -->
		   
  		<?php endwhile; ?>  
		  <?php wp_reset_postdata(); ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
