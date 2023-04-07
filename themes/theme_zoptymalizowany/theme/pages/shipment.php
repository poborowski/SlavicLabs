<?php
/**
 * Template Name: Shipment
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
    <section class="shippingDetails">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 shippingDetailsColumn1 Shipment">
                    <div class="userDate">
                        <div class="row userData">
                            <p class="col-3 userDataGreyText">Dane kontaktowe</p>
                            <p class="col-6">adamchrzanowski@gmeil.com</p>
                            <p class="col-3"><a href="">Zmień</a></p>
                        </div>
                        <div class="row userAdress">
                            <p class="col-3 userAdressGreyText">Adres wysyłki </p>
                            <p class="col-6">Lea 23 m.67, 37-786 Zawichost Górny</p>
                            <p class="col-3"><a href="">Zmień</a></p>
                        </div>
                    </div>
                    <div class="methodDelivery">
                        <p>Metoda wysyłki</p>
                        <div class="row inpostBoxDelivery ">
                            <label for="" class="col-6"> <input type="radio" name="inpost">Inpost Paczkomaty
                                24/7</label>
                            <p class="col-6"> <b>8,99 zł</b></p>
                        </div>
                        <div class="row courierBoxDelivery ">
                            <label for="" class="col-6"> <input type="radio" name="inpost">Kurier</label>
                            <p class="col-6"> <b>8,99 zł</b></p>
                        </div>
                        <p class="shipmentSubscriptionText">Kolejna dostawa subskrypcyjna płatna 9,99 zł</p>
                    </div>
                    <div class="shippingDetailsColumn1Btns">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <button type="submit" class="shippingDetailsLightBtn">Wróc do Dane kontaktowe</button>
                            </div>
                            <div class="col-12 col-md-6">
                                <button type="submit " class="shippingDetailsDarkBtn">Przejdź do płatności</button>
                            </div>
                        </div>
                    </div>
                </div>















                <div class=" col-12 col-md-5 shippingDetailsColumn2">
                    <div class="row shippingDetailsProductBox">
                        <div class="col-3 shippingDetailsProductBoxImage">
                            <div class="shippingDetailsProductBoxImageBorder">
                                <img src="<?= IMGS ?>/6.png" alt="product" class="lazy">
                                <p class="shippingDetailsProductCount">1</p>
                            </div>
                        </div>
                        <div class="col-6 shippingDetailsProductBoxName">
                            <p class="shippingDetailsProductName">BrainBoost – Wese</p>
                            <p class="shippingDetailsProductDesc">90 kaspułek</p>
                            <p class="shippingDetailsProductDelivery">Dostawa co 1 Miesiąc</p>
                        </div>
                        <div class="col-3 shippingDetailsProductBoxPrice">
                            <p class="shippingDetailsProductPrice">125,00 zł</p>
                        </div>
                    </div>
                    <div class="row shippingDetailsProductBox">
                        <div class="col-3 shippingDetailsProductBoxImage">
                            <div class="shippingDetailsProductBoxImageBorder">
                                <img src="<?= IMGS ?>/6.png" alt="product" class="lazy">
                                <p class="shippingDetailsProductCount">1</p>
                            </div>
                        </div>
                        <div class="col-6 shippingDetailsProductBoxName">
                            <p class="shippingDetailsProductName">BrainBoost – Wese</p>
                            <p class="shippingDetailsProductDesc">90 kaspułek</p>
                            <p class="shippingDetailsProductDelivery">Dostawa co 1 Miesiąc</p>
                        </div>
                        <div class="col-3 shippingDetailsProductBoxPrice">
                            <p class="shippingDetailsProductPrice">125,00 zł</p>
                        </div>
                    </div>

                    <div class="row shippingDetailsProductBox">
                        <div class="col-3 shippingDetailsProductBoxImage">
                            <div class="shippingDetailsProductBoxImageBorder">
                                <img src="<?= IMGS ?>/6.png" alt="product" class="lazy">
                                <p class="shippingDetailsProductCount">1</p>
                            </div>
                        </div>
                        <div class="col-6 shippingDetailsProductBoxName">
                            <p class="shippingDetailsProductName">BrainBoost – Wese</p>
                            <p class="shippingDetailsProductDesc">90 kaspułek</p>
                            <p class="shippingDetailsProductDelivery">Dostawa co 1 Miesiąc</p>
                        </div>
                        <div class="col-3 shippingDetailsProductBoxPrice">
                            <p class="shippingDetailsProductPrice">125,00 zł</p>
                        </div>
                    </div>

                    <div class="row shippingDetailsColumn2Btns">
                        <div class="col-7">
                            <input type="text" placeholder="Kod rabatowy">
                        </div>
                        <div class="col-5"><button type="submit">Zastosuj</button></div>
                    </div>
                    <div class="row shippingDetailsColumn2Summary">
                        <div class="col-6">
                            <p>Suma częściowa</p>
                        </div>
                        <div class="col-6">
                            <p class="rightText"><b>625,00</b> zł</p>
                        </div>
                        <div class="col-6">
                            <p>Wysyłka łącznie</p>
                        </div>
                        <div class="col-6">
                            <p class="rightText"><b>0</b> zł</p>
                        </div>

                    </div>
                    <div class="row shippingDetailsColumn2SumPrice">
                        <div class="col-6">
                            <p><b>Suma </b></p>
                        </div>
                        <div class="col-6">
                            <p class="rightText"><b>625,00</b> zł</p>
                        </div>
                        <div class="col-12">
                            <p>W tym podatek: 67,25 zł</p>
                        </div>
                        <div class="col-6">
                            <p>Suma subskrypcyjna</p>
                        </div>
                        <div class="col-6">
                            <p class="rightText">Obliczona w następnym kroku</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div><!-- #page-wrapper -->

<?php
get_footer(); 