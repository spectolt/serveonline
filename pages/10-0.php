<?php $thisCat = "login";
$thisPage = "login"; ?>

<?php require_once('header.php'); ?>
<main class="site-main container container--cart-login">
    <section class="login-cart">
        <section class="login login--column">
            <div class="login__blocks login__blocks--column">
                <div class="login__block">
                    <h2 class="title">Prisijungti</h2>
                    <form class="login__form">
                        <div class="input-wrapper input-wrapper--envelope">
                            <input type="email" name="email" placeholder="El. paštas" />
                        </div>
                        <div class="input-wrapper input-wrapper--eye">
                            <input type="password" name="password" placeholder="Slaptažodis" />
                        </div>
                        <div class="input-wrapper login__forgot">
                            <a href="#" class="">Pamiršai slaptažodį?</a>
                        </div>

                        <div class="login__button-container">
                            <button class="button orange login__button--half login__button--submit">Prisijungti</button>
                            <button class="button blue login__button--half login__button--fb">Prisijungti per <div class="login__button-fb"></div></button>
                        </div>
                    </form>
                </div>
                <div class="login__block login__block--register">
                    <h2 class="title">Registruotis pirmą kartą</h2>
                    <form class="login__form">
                        <div class="input-wrapper input-wrapper--user">
                            <input type="text" name="name" placeholder="Vardas Pavardė" />
                        </div>
                        <div class="input-wrapper input-wrapper--envelope">
                            <input type="email" name="email" placeholder="El. paštas" />
                        </div>
                        <div class="input-wrapper input-wrapper--half input-wrapper--phone">
                            <input type="tel" name="phone" placeholder="+370 XXXXXXXX" />
                        </div>
                        <div class="input-wrapper input-wrapper--half input-wrapper--city">
                            <input type="text" name="city" placeholder="Miestas" />
                        </div>
                        <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                            <input type="password" name="password" placeholder="Slaptažodis" />
                        </div>
                        <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                            <input type="password" name="password2" placeholder="Pakartokite slaptažodį" />
                        </div>
                        <label class="login__passwords">Slaptažodis, ne mažiau 8 simbolių, kuriuos sudaro: skaičiai, raidės, bent viena didžioji raidė.</label>
                        <div class="login__checkboxes">
                            <div class="checkbox">
                                <input name="privacy_policy" type="checkbox" id="privacy_policy" class="" value="1" required />
                                <label for="privacy_policy">Patvirtinu, kad susipažinau su <a href="#">Privatumo politika</a> ir sutinku, kad mano asmens duomenys būtų naudojami joje numatytais duomenų tvarkymo tikslais ir sąlygomis.</label>
                            </div>
                            <div class="checkbox">
                                <input name="newsletter" type="checkbox" id="newsletter" class="" value="1" required />
                                <label for="newsletter">Sutinku gauti pasiūlymus bei informaciją apie naujas paslaugas.</label>
                            </div>
                            <div class="checkbox">
                                <input name="sms" type="checkbox" id="sms" class="" value="1" required />
                                <label for="sms">Sutinku gauti priminimus apie rezervacijas.</label>
                            </div>
                            <p>Užpildydami šią formą, sutinkate su mūsų <a href="#">Naudojimosi taisyklėmis</a>.</p>
                        </div>
                        <button class="button orange small login__button login__button--register">Registruotis</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="cart-container">
            <h2>Pasirinktos paslaugos</h2>
            <?php for ($i = 0; $i < 2; $i++) { ?>
                <div class="cart cart--login">
                    <div class="cart__header">
                        <div class="cart__about cart__about--time">
                            <h3>17:30</h3>
                            <h4>2020 Vasario 4, ketvirtadienis</h4>
                        </div>
                        <div class="cart__about cart__about--company">
                            <h3>East Islan Spa centras</h3>
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
                            <?php if ($i == 1) { ?>
                                <div class="product-action product__block-action">
                                <div class="product-action__info">
                                    <h4>Visų pl. dažymas ir kirpimas</h4>
                                    <div class="product-action__duration">01:00</div>
                                    <div class="product-action__price">45€</div>
                                    <div class="product-action__periodicity">6 sav.</div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <h3>Bendra kaina: <span>260,00 €</span></h3>
            <div class="cart__buttons">
                <button class="orange transparent">Atsisakyti</button>
                <button class="orange">Rezervuoti</button>
            </div>
        </section>
    </section>
    <?php require_once('footer-menu.php'); ?>
</main>

<?php
require_once('footer.php');
?>