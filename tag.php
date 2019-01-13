<?php get_header(); ?>

	<main role="main">
		<h1 class="category-heading category-heading--dark"><?php _e( 'Posts tagged: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
		<!-- section -->
		<section class="archive-feed">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>



