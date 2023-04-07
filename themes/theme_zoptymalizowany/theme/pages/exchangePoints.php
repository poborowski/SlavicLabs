<?php
/**
 * Template Name: Exchange points
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

    <?php get_template_part( 'page-wraps/exchangePoints/exchangePointsHero' ); ?>

    <div class="containerLoyalty">

        <?php get_template_part( 'page-wraps/exchangePoints/numberOfPoints' ); ?>


        <?php get_template_part( 'page-wraps/loyalty/loyaltyGetPoints' ); ?>

        <?php get_template_part( 'page-wraps/exchangePoints/exchangePointsLvls' ); ?>
        <?php get_template_part( 'page-wraps/exchangePoints/exchangePointsUsePoints' ); ?>
    </div>


    <?php get_template_part( 'page-wraps/loyalty/recommendFriends' ); ?>


</div><!-- #page-wrapper -->

<?php
get_footer(); 