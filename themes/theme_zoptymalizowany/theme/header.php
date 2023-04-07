<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <meta property="og:image" content=" <?= IMGS ?>/ogimage.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- ✅ Load slick theme CSS ✅ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@700&family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
</head>

<body <?php body_class(); ?>>
    <?php do_action('wp_body_open'); ?>


    <!-- ******************* The Navbar Area ******************* -->
    <div class="top-header">
        <p>SLAVIC LABS – WIĘCEJ NIŻ NAUKA.</p>
    </div>
    <div id="wrapper-navbar" class="header-site" itemscope itemtype="http://schema.org/WebSite">



        <nav class="navbar navbar-expand-md px-0">


            <div class="container-fluid d-flex justify-content-center">

                <?php wp_nav_menu(
                            array(
                                'theme_location'  => 'my-custom-menu',
                                'container_class' => 'collapse navbar-collapse menu-left col-md-5 order-3 order-md-0 white',
                                'container_id'    => 'navbarNavDropdown',
                                'menu_class'      => 'navbar-nav col-12 px-0',
                                'fallback_cb'     => '',
                                'menu_id'         => 'main-menu-left',
                                'depth'           => 2,
                                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                            )
                        ); ?>


                <a class="navbar-brand col-11 px-0 text-left text-md-center justify-content-start  col-md-2 justify-content-md-center"
                    rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                    title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><img
                        src="<?= IMGS ?>/logo.svg" alt="logo"></a>





                <div class="col-md-5 headerright">
                    <div class="menurightbox">
                        <div class="headeracount"> <a href="<?php echo get_home_url()?>/konto/"><img class="lazy"
                                    src="<?= IMGS ?>/avatarheader.svg" alt="avataraccount">
                                <?php _e( 'Zaloguj się','slaviclabs' ); ?>
                            </a>
                        </div>
                        <div class="cartHeader">
                            <a class="cartHeaderBtn">
                                <img class="lazy" src="<?= IMGS ?>/cart.svg" alt="cart">
                                <?php _e( 'Koszyk','slaviclabs' ); ?>
                            </a>
                        </div>
                        <div class="programHeader">
                            <a href="<?php echo get_home_url()?>/program-lojalnosciowy/">
                                <img class="lazy" src="<?= IMGS ?>/program.png" alt="programicon"> <?php _e( 'Program
                                lojalnościowy','slaviclabs' ); ?>
                            </a>
                        </div>
                        <div class="langHeader ">
                            <a href=""><select>
                                    <option value="">PL</option>
                                    <option value="">DE</option>
                                    <option value="">ANG</option>
                                </select> </a>
                        </div>
                    </div>
                </div>

                <button class="navbar-toggler col-1" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
                    <i class="togglerIcon fa fa-bars"></i>
                </button>


            </div><!-- .container -->


        </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->

    <div class="site" id="page">