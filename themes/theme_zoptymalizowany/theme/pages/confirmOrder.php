<?php
/**
 * Template Name: Confirm order
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
                <div class="col-12 col-md-7 shippingDetailsColumn1 Shipment payment confirmOrder">



                    <div class="row confirmOrderBox">
                        <p class="confirmOrderHeading col-12">Dziękujemy za Twoje zamówienie!</p>
                        <p class="confirmOrderNumberOrder col-12">Zamówienie #67345698</p>

                    </div>

                    <div class="confirmOrderBoxContactDetails row">
                        <p class="col-12 confirmOrderBigText">Dane kontaktowe</p>
                        <p class="col-6 confirmOrderBoldText">E-mail</p>
                        <p class="col-6">adamchrzanowski@gmeil.com</p>
                        <p class="col-6 confirmOrderBoldText">Imię i nazwisko</p>
                        <p class="col-6">Adam Chrzanowski</p>
                        <p class="col-6 confirmOrderBoldText">Adres dostawy</p>
                        <p class="col-6">Lea 23 m.67, 37-786 Zawichost Górny</p>

                    </div>

                    <div class="confirmOrderBoxShippingInformation row">
                        <p class="col-12 confirmOrderBigText">Informacje o wysyłce</p>
                        <p class="col-6 confirmOrderBoldText">Metoda dostawy</p>
                        <p class="col-6">Kurier Gratis</p>


                    </div>


                    <div class="confirmOrderBoxPaymentInformation  row">
                        <p class="col-12 confirmOrderBigText">Informacje o platności</p>
                        <p class="col-6 confirmOrderBoldText">Metoda płatności</p>
                        <p class="col-6">BLIK</p>


                    </div>



                    <div class="shippingDetailsColumn1Btns">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <button type="submit" class="shippingDetailsLightBtn">Potrzebujesz pomocy? Skontaktuj
                                    się z nami</button>
                            </div>
                            <div class="col-12 col-md-6">
                                <button type="submit " class="shippingDetailsDarkBtn">Kontynuuj zakupy</button>
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