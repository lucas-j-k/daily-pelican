<?php get_header(); ?>

	<main role="main">
		

			<h1 class="category-heading category-heading--light"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('category-loop'); ?>

			<?php get_template_part('pagination'); ?>


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
