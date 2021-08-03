<?php $thisCat = "services";
$thisPage = "specialists"; ?>

<?php
$pfp = array('../img/1.jpg', '../img/2.jpg', '../img/3.jpg', '../img/4.jpg', '../img/5.jpg');
?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>

<main class="site-main site-main--aside hasUiDatepicker hasUiAutocomplete hasSelect2">
    <?php require_once('product-sidebar.php'); ?>
    <div class="page-content">
        <section class="breadcrumbs">
            <div class="breadcrumbs__selected">
                <img src="../img/icons/beauty.svg">
            </div>
            <button class="breadcrumbs__change paragraph">Grožio salonai ir kirpyklos</button>
            <button class="cart-icon"><span>2</span></button>
        </section>
        <div class="breadcrumbs__more">
            <ul>
                <?php for ($y = 0; $y < 6; $y++) { ?>
                    <li <?php if ($y === 2) { ?> style="display:none" <?php } ?>>
                        <div class="breadcrumbs__area-img" style="background-color: <?php echo "$colors[$y]" ?>">
                            <img src=<?php echo "$icons[$y]" ?>>
                        </div>
                        <p><?php echo $areas[$y] ?></p>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="page-content__wrapper page-content__wrapper--register">
            <section class="product">
                <div class="product__header">
                    <h1 class="title">Registruokis</h1>
                    <div class="product__nav">
                        <button class="product__nav-button product__nav-button--prev"></button>
                        <div>
                            <button class="product__nav-icon"></button>
                            <input type="text" name="date" class="product__nav-input js-datepicker" readonly />
                            <span id="value"></span>
                        </div>
                        <button class="product__nav-button product__nav-button--next"></button>
                    </div>
                </div>
                <div class="product__list">
                    <?php for ($y = 0; $y < 5; $y++) { ?>
                        <div class="product__block product__block--company">
                            <div class="product__block-top">
                                <div class="product__block-photo">
                                    <div class="product__block-slider">
                                        <img src="../img/photo-2.png">
                                        <img src="../img/photo-1.png">
                                    </div>
                                    <div class="product__block-like-status <?php if($y != 0) echo "hidden"?>"></div>
                                </div>
                                <div class="product__block-info">
                                    <h2>Grožio salonas Jos Kaprizai</h2>
                                    <div class="product__block-address">
                                        <a href="#">Dariaus ir Girėno g. 23, Klaipėda</a><br />
                                        <div class="product__block-distance"><b>15 min</b> (5,6 km)</div>
                                    </div>
                                    <div class="product__block-bottom">
                                        <div class="product__block-info-details">
                                            <p class="product__block-info-phone">+370 000 00000</p>
                                            <p class="product__block-info-hours">Atidaryta 08:00 - 20:00</p>
                                            <p class="product__block-last-hour">Paskutinės valandos pasiūlymas <span class="percentage"> -10%</span> <span class="time-left"><span class="hours">02</span>:<span class="minutes">02</span>:<span class="seconds">02</span></span> </p></p>
                                        </div>
                                        <div class="product__block-info-actions">
                                            <button class="button small gray transparent product__block-like <?php if ($y != 0) echo "product__block-like--active"; else echo "product__block-like--greyed-out" ?>">Mano</button>
                                            <button class="button small darkblue product__block-more">Plačiau</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="pagination">
                        <div class="pagination__list">
                            <a href="#" class="pagination__button pagination__button--first"></a>
                            <a href="#" class="pagination__button pagination__button--prev"></a>

                            <a href="#" class="pagination__button">1</a>
                            <a href="#" class="pagination__button">2</a>
                            <a href="#" class="pagination__button pagination__button--active">3</a>
                            <a href="#" class="pagination__button">4</a>
                            <a href="#" class="pagination__button">...</a>
                            <a href="#" class="pagination__button">10</a>
                            <a href="#" class="pagination__button">12</a>

                            <a href="#" class="pagination__button pagination__button--next"></a>
                            <a href="#" class="pagination__button pagination__button--last"></a>
                        </div>
                        <div class="pagination__info">
                            Rodomos eilutės nuo <b>1 - 22</b> iš <b>9678</b>
                        </div>
                        <div class="pagination__info">
                            Viso puslapių <b>999</b>
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </div>
</main>
<?php require_once('footer.php'); ?>