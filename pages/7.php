<?php $thisCat = "company"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiAutocomplete hasUiDatepicker">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company product specialist">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top product__block-top">
                            <div class="specialist__header-left">
                                <div class="specialist__photo" style="background-image: url(../img/1.jpg)">
                                    <!-- <img src="../img/1.jpg"> -->
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
                        <div class="details__item details__item--languages">
                            <h4>Lietuvių | Anglų | Rusų</h4>
                            <p>Kalba</p>
                        </div>
                        <div class="details__item details__item--payment">
                            <h4>Grynais ir kortele</h4>
                            <p>Atsiskaitymas vietoje</p>
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
                        <h4>Vasco by I.C.O.N.</h4>
                        <p class="specialis__address-street">M. Valančiaus g. 38, Kaunas</p>
                        <p class="specialis__address-distance">15 min (5,6 km)</p>
                        <p class="specialis__address-phone">+370 000 00000</p>
                    </div>

                </section>
                <section class="group__tab" id="registruokis">
                    <div class="sticky">
                        <h3>Rezervuok nemokamai</h3>
                        <div class="product__search input-wrapper">
                            <input type="text" id="search-specialist" placeholder="Pasirinkite paslaugą">
                        </div>
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
                                    <?php for ($i = 0; $i < 4; $i++) { ?>
                                        <tr>
                                            <td><?php if ($i === 3) { ?><p class="calendar__more-button">DAR</p><?php } else { ?> <p>09:15</p> <?php } ?></td>
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

                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                <tbody class="calendar__more-times calendar__more-times--hidden">
                                    <tr>
                                        <td>
                                            <p>09:15</p>
                                        </td>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td class="calendar__selected-day">
                                            <p>09:15</p>
                                        </td>
                                        <td>
                                            <p>08:15</p>
                                        </td>
                                        <td>
                                            <p>11:15</p>
                                        </td>
                                        <td>
                                            <p>12:15</p>
                                        </td>
                                        <td>
                                            <p>13:15</p>
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