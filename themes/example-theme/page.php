<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package First_And_Third
 */

get_header();
?>

<h2>The content for the <?php echo get_the_title(); ?> page would go here.</h2>

<?php get_footer(); ?>