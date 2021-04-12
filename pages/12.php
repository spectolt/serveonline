<?php $thisCat = "company";
$thisPage = "specialist-profile" ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiAutocomplete">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company specialist-profile user-profile">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <h2>Vardas Pavardė</h2>
                        </div>
                        <ul class="company__nav">
                            <li class="active"><a href="#krepselis">Krepšelis</a></li>
                            <li><a href="#registracijos">Registracijos</a></li>
                            <li><a href="#registraciju-istorija">Registracijų istorija</a></li>
                            <li><a href="#rekomendacijos">Rekomendacijos</a></li>
                            <li><a href="#bendra-informacija">Bendra informacija</a></li>
                            <li><a href="#prisijungimas">Prisijungimas</a></li>
                        </ul>
                    </div>
                </div>
                <section class="group__tab" id="krepselis">
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <div class="cart">
                            <div class="cart__header">
                                <div class="cart__about cart__about--time">
                                    <h3>17:30</h3>
                                    <h4>2020 Vasario 4, ketvirtadienis</h4>
                                </div>
                                <div class="cart__about cart__about--company">
                                    <h3>East Islan Spa centras</h3>
                                    <h4>M. Valančiaus g. 23, Kaunas</h4>
                                </div>
                            </div>
                            <div class="cart__info">
                                <div class="cart__specialist">
                                    <div class="cart__photo"></div>
                                    <div class="cart__name">
                                        <h3>Vardas Pavardė</h3>
                                        <h4>Pareigos</h4>
                                    </div>
                                </div>
                                <div class="cart__products">
                                    <div class="product-action product__block-action">
                                        <div class="product-action__info">
                                            <h4>Visų pl. dažymas ir kirpimas</h4>
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€</div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__buttons company__button-container">
                                <button class="cyan transparent cart__trash">Pašalinti</button>
                                <button class="cyan cart__change-time">Keisti laiką</button>
                                <button class="orange">Rezervuoti</button>
                            </div>
                        </div>
                    <?php } ?>
                    <h2 class="user-profile__price">Bendra kaina: <span>260,00€</span></h2>
                    <button class="orange user-profile__reserve">Rezervuoti viską</button>
                </section>
                <section class="group__tab hidden" id="registracijos">
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <div class="cart">
                            <div class="cart__header">
                                <div class="cart__about cart__about--time">
                                    <h3>17:30</h3>
                                    <h4>2020 Vasario 4, ketvirtadienis</h4>
                                </div>
                                <div class="cart__about cart__about--company">
                                    <h3>East Islan Spa centras</h3>
                                    <h4>M. Valančiaus g. 23, Kaunas</h4>
                                </div>
                            </div>
                            <div class="cart__info">
                                <div class="cart__specialist">
                                    <div class="cart__photo"></div>
                                    <div class="cart__name">
                                        <h3>Vardas Pavardė</h3>
                                        <h4>Pareigos</h4>
                                    </div>
                                </div>
                                <div class="cart__products">
                                    <div class="product-action product__block-action">
                                        <div class="product-action__info">
                                            <h4>Visų pl. dažymas ir kirpimas</h4>
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€</div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                    </div>
                                    <div class="product-action product__block-action">
                                        <div class="product-action__info">
                                            <h4>Visų pl. dažymas ir kirpimas</h4>
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€</div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__buttons company__button-container">
                                <button class="cyan transparent cart__trash">Pašalinti</button>
                                <button class="cyan cart__change-time">Keisti laiką</button>
                            </div>
                        </div>
                    <?php } ?>
                </section>
                <section class="group__tab hidden" id="registraciju-istorija">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <div class="cart">
                            <div class="cart__header">
                                <div class="cart__about cart__about--time">
                                    <h3>17:30</h3>
                                    <h4>2020 Vasario 4, ketvirtadienis</h4>
                                </div>
                                <div class="cart__about cart__about--company">
                                    <h3>East Islan Spa centras</h3>
                                    <h4>M. Valančiaus g. 23, Kaunas</h4>
                                </div>
                            </div>
                            <div class="cart__info">
                                <div class="cart__specialist">
                                    <div class="cart__photo"></div>
                                    <div class="cart__name">
                                        <h3>Vardas Pavardė</h3>
                                        <h4>Pareigos</h4>
                                    </div>
                                </div>
                                <div class="cart__products">
                                    <div class="product-action product__block-action">
                                        <div class="product-action__info">
                                            <h4>Visų pl. dažymas ir kirpimas</h4>
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€</div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__buttons company__button-container">
                                <button class="cyan transparent <?php if ($i == 0) echo "cyan-text";
                                                                else if ($i == 1) echo "orange-text";
                                                                else if ($i == 2) echo "red-text" ?>"><?php if ($i == 0) echo "Atliktas";
                                                                                                                                                                                else if ($i == 1) echo "Atšauktas";
                                                                                                                                                                                else if ($i == 2) echo "Neatvykote" ?></button>
                                <button class="cyan cart__change-time">Keisti laiką</button>
                            </div>
                        </div>
                    <?php } ?>
                </section>
                <section class="group__tab hidden" id="rekomendacijos">
                    <p>Mano specialistai rekomenduoja pas juos registruoti šias paslaugas</p>
                    <div class="cart">
                        <div class="cart__header">
                            <div class="cart__about cart__about--time">
                                <h3>17:30</h3>
                                <h4>2020 Vasario 4, ketvirtadienis</h4>
                            </div>
                            <div class="cart__about cart__about--company">
                                <h3>East Islan Spa centras</h3>
                                <h4>M. Valančiaus g. 23, Kaunas</h4>
                            </div>
                        </div>
                        <div class="cart__info">
                            <div class="cart__specialist">
                                <div class="cart__photo"></div>
                                <div class="cart__name">
                                    <h3>Vardas Pavardė</h3>
                                    <h4>Pareigos</h4>
                                </div>
                            </div>
                            <div class="cart__products">
                                <div class="product-action product__block-action">
                                    <div class="product-action__info">
                                        <h4>Visų pl. dažymas ir kirpimas</h4>
                                        <div class="product-action__duration">01:00</div>
                                        <div class="product-action__price">45€</div>
                                        <div class="product-action__periodicity">6 sav.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart__buttons company__button-container">
                            <button class="cyan">Registruotis</button>
                        </div>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>