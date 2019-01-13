<?php /* Template Name: Homepage Feeds Template */ ?>

<?php get_header(); ?>

<?php  

    $category_order = array('news', 'lifestyle', 'sport', 'culture');

?>

	<main role="main">

    <!-- TODO - ADD ANOTHER FEED AT TOP WHICH DISPLAYS 6 LATEST POSTS FROM ALL CATEGORIES -->



<?php
        foreach ( $category_order as $category ) :
                $category_query = new WP_Query( array(
                    'category_name' => $category,
                    'posts_per_page' => 5
                ) );

?>

        <h2 class="category-heading category-heading--dark">Latest <?php echo ucfirst($category); ?></h2>

        <section class="homepage-feed">

<?php

        while ( $category_query->have_posts() ) : $category_query->the_post();
?>

        <?php if($category_query -> current_post === 0): ?>

        <div class="category-featured">
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
        </div>
        <!-- Open the div for the non-featured articles below -->
        <div class="homepage-feed__non-featured">
        <?php else: ?>
        

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
                        <h3 class="feed-article__heading">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="feed-article__heading-link"><?php the_title(); ?></a>
                        </h3>
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

        <?php endif; ?>

<?php
        endwhile;
        wp_reset_postdata();
?>
        <!-- Close the non featured wrapper -->
        </div>

    </section>



 <?php    
    endforeach;

?>

		
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
