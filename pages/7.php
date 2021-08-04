<?php $thisCat = "company";
$thisPage = "specialist" ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiAutocomplete hasUiDatepicker">
    <div class="my-cart-container">
        <div class="ui-widget-overlay"></div>
        <section class="my-cart">
            <button class="product__close"></button>           
            <h2 class="title">Mano krepšelis</h2> 
            <div class="cart">
            <div class="cart__header">
                <div class="cart__about cart__about--time">
                    <h3 class="time">17:30</h3>
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
            <div class="confirm-overlay">
                <div class="confirm-overlay__item">
                    <h4>Laukiama patvirtinimo</h4>
                </div>
            </div>
            </div>
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
                    <button class="orange cart__reserve">Rezervuoti</button>
                </div>
                <div class="confirm-overlay">
                    <div class="confirm-overlay__item">
                        <h4>Laukiama patvirtinimo</h4>
                    </div>
                </div>
            </div> 
            <h2 class="user-profile__price">Iš viso: <span>225,00€</span></h2>
            <button class="orange small user-profile__reserve user-profile__reserve--cart">Rezervuoti viską</button>           
        </section>
    </div>
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company product specialist">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top product__block-top">
                            <div class="specialist__header-left">
                                <div class="specialist__photo" style="background-image: url(../img/1.jpg)">
                                    <div class="product__block-like-status hidden"></div>
                                </div>
                                <div class="specialist__name">
                                    <h3>Vardenis</h3>
                                    <h3>Pavardenis</h3>
                                    <h4>Pareigos</h4>
                                </div>
                            </div>
                            <button class="button small gray transparent product__block-like product__block-like--active">Mano</button>
                        </div>
                        <ul class="company__nav">
                            <li class="active"><a href="#registruokis">Registruokis nemokamai</a></li>
                            <li><a href="#apie-specialista">Apie specialistą</a></li>
                        </ul>
                    </div>
                </div>
                <section class="group__tab" id="apie-specialista">
                    <h3>Apie specialistą</h3>
                    <div class="details">
                        <div class="details__item details__item--experience">
                            <h4>19 metų</h4>
                            <p>Darbo patirtis</p>
                        </div>
                        <div class="details__item details__item--payment">
                            <h4>Grynais ir kortele</h4>
                            <p>Atsiskaitymas vietoje</p>
                        </div>
                        <div class="details__item details__item--languages">
                            <div class="details__languages">
                                <div class="details__languages-list">
                                    <h4>Lietuviškai | Angliškai | Rusiškai | Latviškai</h4>
                                </div>
                            </div>
                            <p>Kalba</p>
                        </div>
                        <div class="details__item details__item--last-hour">
                            <h4>-10% <span>02:02:05</span></h4>
                            <p>Paskutinės valandos pasiūlymas</p>
                        </div>
                    </div>
                    <h4>Profesinis lygis</h4>
                    <div class="specialist__profession">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet massa tempus, ornare nibh sed, euismod mauris. Pellentesque ut turpis lorem. Vivamus semper diam pellentesque tempus consequat. Phasellus volutpat, justo quis laoreet lacinia, quam felis eleifend risus, quis dapibus orci urna at augue. Curabitur non eros fringilla, fermentum tellus ut, lacinia magna. Aenean sed placerat neque, sit amet consequat dolor. Proin tincidunt dolor nec nunc vestibulum congue. Nam id semper magna, eget tempor mauris. Donec a aliquam metus, sollicitudin auctor urna. Ut sit amet orci sapien. Nunc vehicula elit justo, eget pharetra massa maximus vitae. Morbi ullamcorper fringilla felis, sit amet fringilla nibh pulvinar vitae. Aliquam volutpat dolor ex, ut facilisis risus fringilla sit amet. Integer vel scelerisque ipsum, at placerat nisi. Suspendisse et mi a turpis pretium porta at sit amet nisi. Nulla varius vitae justo nec vehicula.
                    </div>
                    <h4>Adresas</h4>
                    <div class="specialist__address">
                        <div class="specialist__address-slider">
                            <div class="photo-slider">
                                <div class="photo-slider__slide">
                                    <div class="photo-slider__slide-content">
                                        <img src="../img/photo-2.png">
                                    </div>
                                </div>
                                <div class="photo-slider__slide">
                                    <div class="photo-slider__slide-content">
                                        <img src="../img/photo-1.png">
                                    </div>
                                </div>
                            </div>
                            <span class="photo-slider__heart"></span>
                        </div>
                        <h4>Vasco by I.C.O.N.</h4>
                        <p class="specialist__address-street">M. Valančiaus g. 38, Kaunas</p>
                        <p class="specialist__address-distance"><span class="time">15 min</span> (5,6 km)</p>
                        <p class="specialist__address-phone">+370 000 00000</p>
                    </div>

                </section>
                <div class="specialist__overlay hidden"></div>
                <section class="group__tab" id="registruokis">
                    <div class="sticky">
                        <h3 class="register-title">Registruokis nemokamai</h3>
                        <div class="product__chosen">
                            <div class="autocomplete-product">
                                <div class="product-action__info">
                                    <h3>Moterų kirpimas</h3>
                                    <h4>Vidutinio ilgio plaukai</h4>
                                    <div class="product-action__duration">01:00</div>
                                    <div class="product-action__price">45€<strike>60€</strike></div>
                                    <div class="product-action__periodicity">6 sav.</div>
                                </div>
                                <button class="product__chosen-trash"></button>
                            </div>
                            <div class="autocomplete-product">
                                <div class="product-action__info">
                                    <h3>Moterų kirpimas</h3>
                                    <div class="product-action__duration">01:00</div>
                                    <div class="product-action__price">45€<strike>60€</strike></div>
                                    <div class="product-action__periodicity">6 sav.</div>
                                </div>
                                <button class="product__chosen-trash"></button>
                            </div>
                            <button class="product__chosen-add"></button>
                            <h4 class="product__chosen-final">Trukmė bendrai <span class="product__chosen-duration product__chosen-duration--final">01:30</span></h4>
                        </div>
                        <div class="product__search input-wrapper">
                            <input type="text" id="search-specialist" placeholder="Pasirinkite paslaugą">
                            <span class="input-icon"></span>
                        </div>
                        <div class="specialist__calendar-container">
                            <div class="specialist__datepicker js-datepicker">

                            </div>
                            <hr>
                            <table class="calendar disable-scrollbars disable-scrollbars::-webkit-scrollbar">
                                <thead>
                                    <tr>
                                        <th class="today">Pr<small>Lap30</small></th>
                                        <th>An<small>Gru01</small></th>
                                        <th class="active">Tr<small>Gru02</small></th>
                                        <th>Kt<small>Gru03</small></th>
                                        <th>Pn<small>Gru04</small></th>
                                        <th>Še<small>Gru05</small></th>
                                        <th>Se<small>Gru06</small></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 7; $i++) { ?>
                                        <tr>
                                            <td><p>09:15</p></td>
                                            <td>
                                                <p></p>
                                            </td>
                                            <td class="calendar__selected-day">
                                                <p>09:15</p>
                                            </td>
                                            <td>
                                                <p>09:15</p>
                                            </td>
                                            <td>
                                                <p>09:15</p>
                                            </td>
                                            <td>
                                                <p>09:15</p>
                                            </td>
                                            <td>
                                                <p>09:15</p>
                                            </td>
                                        </tr>
                                </tbody>
                            <?php } ?>

                            </table>
                        </div>
                        <div class="company__button-container">
                            <button>Saugoti krepšelyje</button>
                        </div>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>