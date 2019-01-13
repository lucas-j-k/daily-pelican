

<?php get_header(); ?>


<main role="main">
	<!-- section -->
	<section class="single-page">
		<header class="single-page__header">
			<h1 class="single-page__heading"><?php the_title(); ?></h1>
		</header>

		<div class="single-page__body">

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('article-404 single-page__article'); ?>>

			<h1 class="single-page__heading"><?php _e( 'Page not Found', 'html5blank' ); ?></h1>
			<h2>
				<a class="article-404__return" href="<?php echo home_url(); ?>"><?php _e( 'Return home', 'html5blank' ); ?></a>
			</h2>

			</article>
			<!-- /article -->
		</div>



	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
