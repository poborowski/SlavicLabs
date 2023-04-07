<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
    <?php echo $product->get_price_html(); ?></p>

<div class="revievsAvailability">
    <div class="container">
        <div class="row">
            <div class="col-6 ratingbox">
                <div class="rating">
                    <div class="stars">



                        <div class="elementor-widget-container">
                            <?php
        global $product;

        $average = $product->get_average_rating();
        $count = $product->get_rating_count();
  
        if ( $count > 0 ) {
            echo '<span class="avg-rating">' . $average . '</span>';
            echo '<div class="star-rating" role="img" aria-label="Oceniono ' . $average . ' na 5" data-bs-original-title="" title=""><span style="width:' . ($average / 5 * 100) . '%">Oceniono <strong class="rating">' . $average . '</strong> na 5</span></div>';
        } else {
            echo '<span class="avg-rating">Brak ocen</span>';
        }
    ?>
                        </div>

                    </div>
                    <div class="countrevievs">
                        <!-- <p>3008 Reviews</p> -->
                    </div>
                </div>

            </div>
            <div class="col-6 availability">

                <?php
$pid = get_the_ID(); 
$product = new WC_Product($pid);
$instock = $product->is_in_stock();
if ($instock) {
    echo '<span class="available"></span>Dostępny';
} else {
   
    echo '<span class="inaccessible"></span>Niedostępny';
}
?>
            </div>
        </div>
    </div>
</div>
<div class="sub">
    <div class="container">
        <div class="row">
            <div class="col-12 productSubscription">
                <p>Wybierz rodzaj zakupu</p>
                <div class="chooseSubscription">
                    <form action="">
                        <div class="longSubscription">
                            <input type="radio" id="subscription" name="subscription" value="subscription"
                                onclick="showOptions()">
                            <label for="subscription">
                                <p><?php _e( 'Subskrypcja bez zobowiązań','slaviclabs' ); ?></p>
                                <span><?php _e( '125,00 zł','slaviclabs' ); ?></span>
                            </label><br>
                        </div>

                        <div id="subscriptionOptions" style="display:none;">

                            <select id="deliveryFrequency" name="deliveryFrequency">
                                <option class="deliveryFrequencyOption" value="1">
                                    <?php _e( 'Dostawa co 1 miesiąc', 'slaviclabs' ); ?></option>
                                <option class="deliveryFrequencyOption" value="2">
                                    <?php _e( 'Dostawa co 2 miesiące', 'slaviclabs' ); ?></option>
                                <option class="deliveryFrequencyOption" value="3">
                                    <?php _e( 'Dostawa co 3 miesiące', 'slaviclabs' ); ?></option>

                            </select>

                            <div>
                                <p><img src="<?= IMGS ?>/local_shipping.svg"
                                        alt="truck"><?php _e( 'Regularna dostawa co 1, 2, 3 miesiące', 'slaviclabs' ); ?>
                                </p>
                                <p><img src="<?= IMGS ?>/edit.svg"
                                        alt="edit icon"><?php _e( 'Edytuj koszyk, adres, datę wysyłki w dowolnym momencie', 'slaviclabs' ); ?>
                                </p>
                                <p><img src="<?= IMGS ?>/cancel.svg"
                                        alt=" cencel icon"><?php _e( 'Zrezygnuj kiedy chcesz', 'slaviclabs' ); ?></p>
                            </div>
                        </div>
                        <div class="singleSubscription">
                              <input type="radio" id="onePurchase" name="onePurchase" value="onePurchase">
                              <label for="onePurchase">
                                <p><?php _e( 'Zakup jednorazowy','slaviclabs' ); ?></p>
                                <span><?php _e( '165,00 zł','slaviclabs' ); ?></span>
                            </label><br>
                        </div>
                    </form>
                    <form action="">


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>