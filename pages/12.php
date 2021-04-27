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
                                <button class="orange cart__reserve">Rezervuoti</button>
                            </div>
                        </div>
                    <?php } ?>
                    <h2 class="user-profile__price">Bendra kaina: <span>260,00€</span></h2>
                    <button class="orange small user-profile__reserve">Rezervuoti viską</button>
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
                                <button class="cyan cart__change-time-register">Keisti laiką</button>
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
                                <button class="cyan transparent history__button <?php if ($i == 0) echo "cyan-text";
                                                                else if ($i == 1) echo "orange-text";
                                                                else if ($i == 2) echo "red-text" ?>"><?php if ($i == 0) echo "Atliktas";
                                                                                                        else if ($i == 1) echo "Atšauktas";
                                                                                                        else if ($i == 2) echo "Neatvykote" ?></button>
                                <button class="cyan cart__change-time-register history__button--register">Registruotis vėl</button>
                            </div>
                        </div>
                    <?php } ?>
                </section>
                <section class="group__tab hidden" id="rekomendacijos">
                    <p class="recommendations-p">Mano specialistai rekomenduoja pas juos registruoti šias paslaugas</p>
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
                            <button class="cyan recommendations">Registruotis</button>
                        </div>
                    </div>
                </section>
                <section class="group__tab company__container hidden company__container--info" id="bendra-informacija">
                    <div class="user-profile__inputs-container">
                        <div class="input-wrapper input-wrapper--user">
                            <input type="text" name="name" placeholder="Vardas Pavardė">
                        </div>
                        <div class="input-wrapper input-wrapper--age">
                            <span class="input-icon"></span>
                            <input class="about-datepicker">
                            <span class="input-arrow"></span>
                        </div>
                        <div class="specialist-profile__gender">
                            <p>Lytis:</p>
                            <div class="radio">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Moteris</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="gender" id="male">
                                <label for="male">Vyras</label>
                            </div>
                        </div>
                        <div class="input-wrapper input-wrapper--envelope">
                            <input type="text" name="email" placeholder="El. paštas">
                        </div>
                        <div class="input-wrapper input-wrapper--phone">
                            <input type="text" name="phone" placeholder="+370 XX XXXXX">
                        </div>
                        <div class="input-container input-container--city">
                            <select class="select-input" data-placeholder="Pasirinkite">
                                <option></option>
                                <option>Vilnius</option>
                            </select>
                            <span class="input-icon">
                        </div>
                    </div>
                    <h4>Patvirtinimai</h4>
                    <div class="checkbox">
                        <input type="checkbox" name="confirmation" id="privacy">
                        <label for="privacy">Patvirtinu, kad susipažinau su <a href="#">Privatumo politika</a> ir sutinku, kad mano asmens duomenys būtų naudojami joje numatytais duomenų tvarkymo tikslais ir sąlygomis.</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="confirmation" id="suggestions">
                        <label for="suggestion">Sutinku gauti pasiūlymus bei informaciją apie naujas paslaugas.</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="confirmation" id="reminder">
                        <label for="reminder">Sutinku gauti priminimus apie rezervacijas.</label>
                    </div>
                    <div class="company__button-container">
                        <button class="orange transparent">Atšaukti</button>
                        <button class="orange">Saugoti</button>
                    </div>
                </section>
                <section class="group__tab company__container company__container--login hidden" id="prisijungimas">
                    <div class="user-profile__inputs-container">
                        <div class="login-details login-details--name">
                            <p>Prisijungimo vardas</p>
                            <div class="input-container input-container--password-eye">
                                <input type="password" name="login" value="1234" readonly>
                                <span class="input-icon"></span>
                            </div>
                        </div>
                        <div class="login-details login-details--pass login-details--old-pass">
                            <p>Prisijungimo slaptažodis</p>
                            <div class="input-container input-container--password-eye">
                                <input type="password" name="login" value="1234" readonly>
                                <span class="input-icon"></span>
                            </div>
                        </div>
                        <div class="login-details login-details--pass login-details--new-pass hidden">
                            <p>Įveskite esamą slaptažodį</p>
                            <div class="input-container input-container--password-eye">
                                <input type="password" name="login">
                                <span class="input-icon input-icon--toggled-eye"></span>
                            </div>
                        </div>
                        <button class="orange small change-login">Keisti prisijungimo duomenis</button>
                    </div>
                    <div class="company__button-container">
                        <button class="orange transparent">Atšaukti</button>
                        <button class="orange">Saugoti</button>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>