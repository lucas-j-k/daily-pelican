<!-- Display search results -->

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<h1 class="category-heading--dark category-heading"><?php echo sprintf( __( '%s Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		<section class="search-results-feed archive-feed">

				<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
