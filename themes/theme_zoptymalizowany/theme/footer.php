<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');


?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>
<?php
  $footer = get_field('footer', 'options');

?>
<section class="wrapper pt-5" id="wrapper-footer">

    <footer class="<?php echo esc_attr($container); ?>">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2">
                    <?= $footer['footer_kolumna_1'] ?>
                </div>
                <div class="col-12 col-md-2">
                    <?= $footer['footer_kolumna_2'] ?>
                </div>
                <div class="col-12 col-md-2">
                    <?= $footer['footer_kolumna_3'] ?>
                </div>
                <div class="col-12 col-md-2">
                    <?= $footer['footer_kolumna_4'] ?>
                </div>
                <div class="col-12 col-md-4">
                    <?= $footer['footer_kolumna_5'] ?>
                </div>
                <div class="col-12 underfooter">
                    <p class="center white underfooterup"><?php _e( 'SLAVIC LABS – WIĘCEJ NIŻ NAUKA.','slaviclabs' ); ?>
                    </p>
                    <p class="center white underfooterbottom"><?php _e( 'Wszystkie prawa zastrzezone','slaviclabs' ); ?>
                    </p>
                </div>
            </div>
        </div>

    </footer><!-- container end -->

</section><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->


<div class="cart">
    <p class="cartAmout"><?php _e( 'Twój koszyk (1)','slaviclabs' ); ?></p>
    <button class="cartCloseBtn"><img class="lazy" src="<?= IMGS ?>/closeCart.svg" alt="time cart"></button>
    <div class="cartItems">


        <p class="oneCart"><?php _e( 'ZAKUP JEDNORAZOWY','slaviclabs' ); ?></p>
        <?php


function display_cart_items() {
    if ( ! is_admin() ) {
        global $woocommerce;
        $cart_items = $woocommerce->cart->get_cart();
        if ( ! empty( $cart_items ) ) {
       
         
            foreach ( $cart_items as $cart_item_key => $cart_item ) {
                $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                $product_name = $_product->get_name();
                $product_price = $_product->get_price();
                $quantity = $cart_item['quantity'];
                $product_image = $_product->get_image();
                echo '<div class="cartDetailsBox">';
                echo '<div class="product-thumbnail">' . $product_image . '</div>';
                echo '<div class="cartDetails">';
                echo '<p class="product-name">' . $product_name . '<span> 90 kapsułek </span>' . '</p>';
                echo '<p class="product-price">' . wc_price( $product_price ) . '</p>';
                echo '<div class="cartCountRemoveBox">';
                echo '<p class="product-quantity"><input type="number" value="' . $quantity . '" min="1" max="100" onchange="updateCartItem(this, \'' . $cart_item_key . '\')"></p>';
                echo '<p class="product-remove"><a href="#" onclick="removeCartItem(\'' . $cart_item_key . '\')">Usuń</a></p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
      
            }
     
        } else {
            echo 'Twój koszyk jest pusty.';
        }
    }
}

display_cart_items();

  ?>
    </div>
    <div class="cartOption">
        <form action="">
            <div class="cartSubscription">
                <input type="checkbox" id="cartSubscription" name="cartSubscription" value="cartSubscription">
                <label for="cartSubscription">
                    <p><?php _e( 'Zamień na subskrypcję i','slaviclabs' ); ?>
                        <b><?php _e( 'oszczędź 25%','slaviclabs' ); ?></b>
                    </p>
                </label><br>
            </div>
            <div class="cartPacked" class="">
                <input type="checkbox" id="cartPacked" name="cartPacked" value="cartPacked">
                <label for="cartPacked" class="cartPackedBox">
                    <p><?php _e( 'Chcę zapakować na prezent','slaviclabs' ); ?>
                        <span><?php _e( '10,00 zł','slaviclabs' ); ?></span>
                    </p>

                </label><br>
            </div>
        </form>
    </div>
    <div class="cartGoToCheckout">
        <div class="cartGoToCheckoutBox">
            <p class="cartGoToCheckoutDate"><img class="lazy" src="<?= IMGS ?>/timeCart.svg"
                    alt="time cart"><?php _e( 'Czas realizacji: 1-2 dni robocze','slaviclabs' ); ?> </p>
            <p class="cartGoToCheckoutDelivery"><img class="lazy" src="<?= IMGS ?>/scheduleCart.svg"
                    alt="time cart"><?php _e( 'Dostawa: od 8,99 zł','slaviclabs' ); ?></p>
        </div>
        <button class="checkoutButton"><?php _e( 'Przejdź do kasy','slaviclabs' ); ?></button>
        <p class="securityCart"><img class="lazy" src="<?= IMGS ?>/cartCart.svg"
                alt="time cart"><?php _e( 'Bezpieczne zakupy:','slaviclabs' ); ?></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- ✅ load Slick ✅ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?= get_template_part('components/BackToTop'); ?>
<?= get_template_part('Assets'); ?>
<?php wp_footer(); ?>

</body>

</html>