<?php $thisCat = "company";
$thisPage = "specialist-profile" ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiAutocomplete">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company specialist-profile">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <h2>Vardas Pavardė</h2>
                        </div>
                        <ul class="company__nav">
                            <li class="active"><a href="#bendra-informacija">Bendra informacija</a></li>
                            <li><a href="#paslaugos">Paslaugos</a></li>
                            <li><a href="#darbo-grafikas">Darbo grafikas</a></li>
                        </ul>
                    </div>
                </div>
                <section class="group__tab company__container" id="bendra-informacija">
                    <div class="specialist-profile__top">
                        <div class="specialist-profile__photo">
                            <div class="specialist-profile__photo-img"></div>
                            <button class="specialist-profile__photo-button">Keisti nuotrauką</button>
                        </div>
                        <div class="specialist-profile__info">
                            <h3>Įmonės pavadinimas</h3>
                            <div class="input-container input-container--profession">
                                <select data-placeholder="Profesija" class="select-input">
                                    <option></option>
                                    <option>Gydytojas</option>
                                </select>
                                <span class="input-icon"></span>
                            </div>
                            <div class="input-wrapper input-wrapper--age">
                                <span class="input-icon"></span>
                                <input class="about-datepicker">
                                <span class="datepicker-placeholder">Amžius:</span>
                                <span class="input-arrow"></span>
                            </div>
                            <div class="input-wrapper input-wrapper--experience">
                                <select>
                                    <option></option>
                                    <option>1990</option>
                                </select>
                                <span class="input-icon"></span>
                                <span class="datepicker-placeholder">Stažas nuo:</span>
                            </div>
                            <p>Veiklos administravimo kontaktai</p>
                            <div class="input-wrapper input-wrapper--phone">
                                <input type="text" name="phone" placeholder="+370 XXXXXXXX">
                                <!-- <span class="input-icon"></span> -->
                            </div>
                            <div class="input-wrapper input-wrapper--envelope">
                                <input type="text" name="email" placeholder="Elektroninis paštas">
                                <!-- <span class="input-icon"></span> -->
                            </div>
                            <p>Kalbos, kuriomis galite bendrauti</p>
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <div class="input-container input-container--language">
                                    <select data-placeholder="Pasirinkite" class="select-input">
                                        <option></option>
                                        <option>Lietuvių</option>
                                    </select>
                                    <span class="input-icon"></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="company__about">
                        <h3>Profesinis lygis</h3>
                        <ul class="languages">
                            <li class="paragraph active"><a href="#">LT</a></li>
                            <li class="paragraph"><a href="#">EN</a></li>
                            <li class="paragraph"><a href="#">RU</a></li>
                        </ul>
                        <textarea type="text" name="about-description" placeholder="" rows="1"></textarea>
                    </div>
                    <div class="specialist-profile__choices">
                        <div class="specialist-profile__choice specialist-profile__choice--payment">
                            <h3>Atsiskaitymo nustatymai</h3>
                            <div class="choice-wrapper">
                                <p>Atsiskaitymas už paslaugas:</p>
                                <div class="specialist-profile__payment-types">
                                    <div class="specialist-profile__payment specialist-profile__payment--card">
                                        <div class="checkbox">
                                            <input type="checkbox" name="payment" id="payment-card">
                                            <label for="payment-card">Kortele</label>
                                        </div>
                                    </div>
                                    <div class="specialist-profile__payment specialist-profile__payment--cash">
                                        <div class="checkbox">
                                            <input type="checkbox" name="payment" id="payment-cash">
                                            <label for="payment-cash">Grynais</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="specialist-profile__choice specialist-profile__choice--period">
                            <h3>Paslaugų periodiškumas</h3>
                            <div class="checkbox">
                                <input type="checkbox" name="periodicity" id="periodicity">
                                <label for="periodicity">
                                    <div class="choice-wrapper">
                                        <p>Paslaugų gavėjas gali registruotis dažniau nei nurodytas paslaugos periodiškumas.</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="specialist-profile__choice specialist-profile__choice--time">
                            <h3>Laikai rezervavimui</h3>
                            <div class="specialist-profile__time-options choice-wrapper">
                                <p>Pirmoje dienos pusėje rodyti laisvų laikų:</p>
                                <select data-placeholder="Pasirinkti">
                                    <option></option>
                                    <option>1</option>
                                    <option>Visus</option>
                                </select>
                                <p>Antroje dienos pusėje rodyti laisvų laikų:</p>
                                <select data-placeholder="Pasirinkti">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                                <p>Leisti registruotis likus:</p>
                                <select data-placeholder="Pasirinkti">
                                    <option></option>
                                    <option><b>30</b> min.</option>
                                    <option><b>1</b> val.</option>
                                </select>
                            </div>
                        </div>
                        <div class="specialist-profile__choice company__offer">
                            <h3>Paskutinės valandos pasiūlymas</h3>
                            <div class="checkbox">
                                <input name="offer" type="checkbox" id="offer" />
                                <label for="offer">
                                    <div class="company__offer-info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>Nuolaida:</p>
                                                    </td>
                                                    <td>
                                                        <div class="percent">
                                                            <input type="number" name="discount" value="10" max="99" length="2">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Iki darbo pabaigos likus:</p>
                                                    </td>
                                                    <td>
                                                        <div class="hours">
                                                            <input type="number" name="time-left" value="1" max="9" length="1">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="company__button-container">
                        <button class="orange transparent">Atšaukti</button>
                        <button class="orange">Saugoti</button>
                    </div>
                </section>
                <?php require_once("company/services.php") ?>
                <section class="group__tab timetable hidden" id="darbo-grafikas">
                    <div class="timetable__top">
                        <h2>2021 Sausis</h2>
                        <button class="arrow arrow--left"></button>
                        <button class="arrow arrow--right"></button>
                        <select>
                            <option>Kartoti pažymėtą dieną kas dieną</option>
                            <option>Kartoti pažymėtą dieną kas antrą dieną</option>
                            <option>Kartoti pažymėtą dieną kas savaitę</option>
                        </select>
                        <div class="checkbox">
                            <input name="exceptions" type="checkbox" id="holidays" />
                            <label for="holidays">
                                Išskyrus šventines d.
                            </label>
                        </div>
                        <div class="checkbox">
                            <input name="exceptions" type="checkbox" id="weekends" />
                            <label for="weekends">
                                Išskyrus nedarbo d.
                            </label>
                        </div>
                    </div>
                    <div class="company__container">
                        <div class="timetable__container">
                            <?php for ($i = 0; $i < 35; $i++) { ?>
                                <div class="timetable__day <?php if($i == 14) echo "active-from"; else if($i == 22) echo "active-to" ?>">
                                    <h4><b>Pr</b> 31 <span class="timetable__month">GRUODIS</span></h4>
                                    <table class="timetable__table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="company__time time-inputs">
                                                        <input type="number" name="hour" placeholder="00" max="23" length="2">
                                                        <p>:</p>
                                                        <input type="number" name="minute" placeholder="00" max="59" length="2">
                                                    </div>
                                                </td>
                                                <td>-</td>
                                                <td>
                                                    <div class="company__time time-inputs">
                                                        <input type="number" name="hour" placeholder="00" max="23" length="2">
                                                        <p>:</p>
                                                        <input type="number" name="minute" placeholder="00" max="59" length="2">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="company__time time-inputs">
                                                        <input type="number" name="hour" placeholder="00" max="23" length="2">
                                                        <p>:</p>
                                                        <input type="number" name="minute" placeholder="00" max="59" length="2">
                                                    </div>
                                                </td>
                                                <td>-</td>
                                                <td>
                                                    <div class="company__time time-inputs">
                                                        <input type="number" name="hour" placeholder="00" max="23" length="2">
                                                        <p>:</p>
                                                        <input type="number" name="minute" placeholder="00" max="59" length="2">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="company__button-container company__button-container--timetable">
                            <button class="orange transparent">Ištrinti grafiką</button>
                            <button class="orange">Sukurti grafiką</button>
                        </div>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>