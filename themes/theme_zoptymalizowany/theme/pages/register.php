<?php
/**
 * Template Name: Register
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
    <?php get_template_part( 'page-wraps/shop/breadcrumbs' ); ?>

    <section class="registerWrap">
        <div class="container">
            <p class="bigRegisterHeading"><?php _e( 'Zarejestruj się','slaviclabs' ); ?></p>
            <p class="smallRegisterText"><?php _e( 'Cieszymy się, że chcesz do nas dołaczyć','slaviclabs' ); ?></p>
            <form action="">
                <input type="text" placeholder="Imię*" name="registerName">
                <input type="text" placeholder="Nazwisko*" name="registerSurname">
                <input type="text" placeholder="Email*" name="registerEmail">
                <input type="text" placeholder="Hasło*" name="registerPassword">
                <label class="registerAccept">
                    <input class="" type="checkbox">
                    <span><?php _e( '* Przeczytałam/em i akceptuję <a href="/regulamin">regulamin zakupów</a> oraz zapoznałam/em się z <a href="/polityka-prywatnosci"> polityką
                        prywatności</a>.','slaviclabs' ); ?></span>
                </label>
                <label class="registerAccept">
                    <input class="" type="checkbox">
                    <span><?php _e( 'Chcę zapisać się do newslettera i otrzymywać na
                        wskazany wyżej adres e-mail informacje o
                        nowościach, produktach, ofertach i promocjach związanych ze sklepem.','slaviclabs' ); ?></span>
                </label>
                <button type="submit" class="registerDarkBtn"><?php _e( 'Zarejestruj się','slaviclabs' ); ?></button>
                <button type="submit" class="registerLightBtn"><?php _e( 'Wróć do logowania','slaviclabs' ); ?></button>

            </form>
        </div>

    </section>

</div><!-- #page-wrapper -->

<?php
get_footer(); 