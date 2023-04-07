<?php
/**
 * Template Name: Home
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">




    <?php get_template_part( 'page-wraps/home/unlockPotencial' ); ?>
    <?php get_template_part( 'page-wraps/home/bestsellers' ); ?>
    <?php get_template_part( 'page-wraps/home/uplvl' ); ?>
    <?php get_template_part( 'page-wraps/home/about' ); ?>
    <?php get_template_part( 'page-wraps/home/redandopinion' ); ?>
    <?php get_template_part( 'page-wraps/home/alternately' ); ?>
    <?php get_template_part( 'page-wraps/home/follow' ); ?>
    <?php get_template_part( 'page-wraps/home/newsletter' ); ?>
    <?php get_template_part( 'page-wraps/home/blog' ); ?>




</div><!-- #page-wrapper -->

<?php
get_footer();