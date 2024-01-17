<?php
/**
 * My Theme functions and definitions
 *
 * @link https://ds-digital.cz
 *
 * @package My Theme
 * @since My Theme 1.0
 */
?>
<!-- Get Theme Header -->
    <?php get_header(); ?>

<!-- Get Content -->

    <div class="post-list">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                
                <article <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>

                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<!-- Get Theme Footer -->
    <?php get_footer(); ?>
