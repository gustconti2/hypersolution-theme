<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

<main>
    <h1>HOME PAGE</h1>
    <?php
    get_template_part('template-parts/menu');
    get_template_part('template-parts/hero');
    // get_template_part('template-parts/features');
    // get_template_part('template-parts/carousel');
    // get_template_part('template-parts/cta');
    ?>
</main>

<?php get_footer(); ?>