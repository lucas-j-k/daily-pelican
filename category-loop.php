
<?php 

global $wp_query;
$current_category = $wp_query->get_queried_object_id();

$featured_args = array(
	'posts_per_page' => 1,
	'cat' => $current_category
);

$main_args = array(
	'offset' => 1,
	'cat' => $current_category
);

?>


<section class="category-featured">

<?php

// ====================================
// First Loop, to pull out the latest post and render with featured markup
// ====================================

$featured_query = new WP_query ( $featured_args );
if ( $featured_query->have_posts() ) { ?>


		<?php while ( $featured_query->have_posts() ) : $featured_query->the_post();   ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class("category-featured__article"); ?>>
			<div class="category-featured__main" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="category-featured__permalink">
				<div class="category-featured__heading">
						<h2 class="category-featured__title"><?php the_title(); ?></h2>
						<div class="category-featured__date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></div>
					</div>
				</a>
			</div>
			<div class="category-featured__meta">
				<div class="feed-tags">
					<?php the_tags( '<ul class="feed-tags__list"><li>', '</li><li>', '</li></ul>' ); ?>
				</div>
			</div>
		</article>
		   
  		<?php endwhile; ?>  
		  <?php wp_reset_postdata(); ?>
		  
	<!-- End featured article wrapper -->
</section>

<?php } ?>



<!-- // ====================================
// End First Loop
// ==================================== -->

<!-- section -->
<section class="category-feed">

<?php

// ====================================
// Second Loop - to render the remaining posts in a standard feed
// ====================================


$main_query = new WP_query ( $main_args );
if ( $main_query->have_posts() ) { ?>

	
	<?php while ( $main_query->have_posts() ) : $main_query->the_post();  ?>

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
		  

<?php } ?>

</section>