<?php
/**
 * Template Name: Loyalty program
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


    <?php get_template_part( 'page-wraps/loyalty/loyaltyHero' ); ?>

    <div class="containerLoyalty">
        <?php get_template_part( 'page-wraps/loyalty/loyaltyHowWork' ); ?>
        <?php get_template_part( 'page-wraps/loyalty/loyaltyGetPoints' ); ?>


        <?php get_template_part( 'page-wraps/loyalty/loyaltyLvls' ); ?>

        <?php get_template_part( 'page-wraps/loyalty/usePoints' ); ?>
    </div>

    <?php get_template_part( 'page-wraps/loyalty/recommendFriends' ); ?>



</div><!-- #page-wrapper -->

<?php
get_footer();