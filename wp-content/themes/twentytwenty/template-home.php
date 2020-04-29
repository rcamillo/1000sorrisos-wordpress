<?php
/* Template Name: Home */
get_header();
?>

<main id="site-content" role="main">

    <?php
        // Start the loop.
        while (have_posts()) : the_post();
            // Include the page content template.
            get_template_part('template-parts/content', 'home');
        // End of the loop.
        endwhile;
    ?>

</main><!-- #site-content -->

<?php get_footer(); ?>
