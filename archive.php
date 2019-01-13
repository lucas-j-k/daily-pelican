<?php get_header(); ?>

	<main role="main">
		
	<h1 class="category-heading category-heading--dark"><?php _e( 'Archives - ', 'html5blank' ); single_month_title(' ') ?></h1>
		<!-- section -->
		<section class="archive-feed">

			

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
