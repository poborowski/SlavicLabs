<?php
/**
 * Template Name: Shipping Details
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
                <div class="col-12 col-md-7 shippingDetailsColumn1">
                    <div class="shippingDetailsTextBox row">
                        <p class="col-12 col-md-6">Dane kontaktowe</p>
                        <label class="col-12 col-md-6">Masz już konto? <a href="/konto">Zaloguj
                                się</a></label>
                    </div>
                    <form action="" class="shippingDetailsForm">
                        <input type="text" placeholder="E-mail" class="shippingDetails" name="shippingDetailsEmail">
                        <label for=""> <input type="checkbox" class="shippingDetailsNewsletter"
                                name="shippingDetailsNewsletter">Chcę zapisać się do Newslettera informacje o
                            promocjach, zniżkach, premierach, konkursach oraz artykułach z serwisu</label>
                        <p>Adres do wysyłki</p>
                        <input type="text" placeholder="Kraj" class="shippingDetailsCountry"
                            name="shippingDetailsCountry">
                        <div>
                            <input type="text" placeholder="Imię" class="shippingDetailsName"
                                name="shippingDetailsName">
                            <input type="text" placeholder="Nazwisko" class="shippingDetailsSurname"
                                name="shippingDetailsSurname">
                        </div>
                        <input type="text" placeholder="Firma (opcjonalnie)" class="shippingDetailsCompany"
                            name="shippingDetailsCompany">
                        <input type="text" placeholder="Ulica" class="shippingDetailsStreat"
                            name="shippingDetailsStreat">
                        <div>
                            <input type="text" placeholder="Numer domu" class="shippingDetailsHouseNumber"
                                name="shippingDetailsHouseNumber">
                            <input type="text" placeholder="Numer mieszkania" class="shippingDetailsFlatNumber"
                                name="shippingDetailsFlatNumber">
                        </div>
                        <div>
                            <input type="text" placeholder="Kod pocztowy" class="shippingDetailsPostalcode"
                                name="shippingDetailsPostalcode">
                            <input type="text" placeholder="Miasto" class="shippingDetailsCity"
                                name="shippingDetailsCity">
                        </div>
                        <label for=""> <input type="checkbox" class="shippingDetailsSave"
                                name="shippingDetailsSave">Zapisz te informacje, aby ich użyć nastepnym razem</label>
                    </form>
                    <div class="shippingDetailsColumn1Btns">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <button type="submit" class="shippingDetailsLightBtn">Wróc do koszyka</button>
                            </div>
                            <div class="col-12 col-md-6">
                                <button type="submit " class="shippingDetailsDarkBtn">Przejdź do wysyłki</button>
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
                            <p class="rightText">Obliczona w następnym kroku</p>
                        </div>
                        <div class="col-6">
                            <p>Wysyłka jednorazowa</p>
                        </div>
                        <div class="col-6">
                            <p class="rightText">Obliczona w następnym kroku</p>
                        </div>
                        <div class="col-6">
                            <p>Wysyłka z subskrypacja</p>
                        </div>
                        <div class="col-6">
                            <p class="rightText">Obliczona w następnym kroku</p>
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