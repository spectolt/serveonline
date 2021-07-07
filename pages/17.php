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
                        <div class="company__nav-container">
                            <ul class="company__nav company__nav--specialist">
                                <li class="active"><a href="#bendra-informacija">Bendra informacija</a></li>
                                <li><a href="#paslaugos">Paslaugos</a></li>
                                <li><a href="#darbo-grafikas">Darbo grafikas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="group__tab company__container" id="bendra-informacija">
                    <div class="specialist-profile__top">
                        <div class="specialist-profile__photo">
                            <div class="specialist-profile__photo-img"></div>
                            <button class="specialist-profile__photo-button small">Keisti nuotrauką</button>
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
                                <input class="about-datepicker" readonly>
                                <span class="datepicker-placeholder">Amžius:</span>
                                <span class="input-arrow"></span>
                            </div>
                            <div class="input-wrapper input-wrapper--experience">
                                <select data-placeholder="" data-minimum-results-for-search="Infinity">
                                    <option></option>
                                    <option>1990</option>
                                </select>
                                <span class="input-icon"></span>
                                <span class="datepicker-placeholder">Stažas nuo:</span>
                            </div>
                            <p>Veiklos administravimo kontaktai</p>
                            <div class="input-wrapper input-wrapper--envelope">
                                <input type="text" name="email" placeholder="Elektroninis paštas">
                            </div>
                            <div class="input-wrapper input-wrapper--phone">
                                <input type="text" name="phone" placeholder="+370 XXXXXXXX">
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
                                    <option selected>Visi</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                                <p>Antroje dienos pusėje rodyti laisvų laikų:</p>
                                <select data-placeholder="Pasirinkti">
                                    <option></option>
                                    <option selected>Visi</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                                <p>Leisti registruotis likus:</p>
                                <select data-placeholder="Pasirinkti">
                                    <option></option>
                                    <option selected><b>1</b> val.</option>
                                    <option><b>2</b> val.</option>
                                    <option><b>3</b> val.</option>
                                    <option><b>4</b> val.</option>
                                </select>
                            </div>
                        </div>
                        <div class="specialist-profile__choice specialist-profile__choice--last-hour company__offer">
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
                        <div class="timetable__datepicker-container">
                            <div class="timetable__datepicker timetable__datepicker--from">
                                <h3>Nuo</h3>
                                <input id="timetable-from" class="timetable__date-input" readonly>
                                <a class="ui-datepicker-prev ui-corner-all phone phone--back" data-handler="prev" data-event="click" title="<Atgal">
                                    <span class="ui-icon ui-icon-circle-triangle-w">&lt;Atgal</span>
                                </a>
                                <a class="ui-datepicker-next ui-corner-all phone" data-handler="next" data-event="click" title="Pirmyn>">
                                    <span class="ui-icon ui-icon-circle-triangle-e">Pirmyn&gt;</span>
                                </a>
                            </div>
                            <div class="timetable__datepicker timetable__datepicker--until">
                                <h3>Iki</h3>
                                <input id="timetable-until" class="timetable__date-input" readonly>
                                <a class="ui-datepicker-prev ui-corner-all phone phone--back" data-handler="prev" data-event="click" title="<Atgal">
                                    <span class="ui-icon ui-icon-circle-triangle-w">&lt;Atgal</span>
                                </a>
                                <a class="ui-datepicker-next ui-corner-all phone" data-handler="next" data-event="click" title="Pirmyn>">
                                    <span class="ui-icon ui-icon-circle-triangle-e">Pirmyn&gt;</span>
                                </a>
                            </div>
                        </div>
                        <div class="timetable__right">
                            <div class="timetable__choices">
                                <h3>Pažymėtame laikotarpyje sukurti grafiką</h3>
                                <div class="timetable__choice timetable__choice--time">
                                    <h4>Laikas</h4>
                                    <div class="timetable__time-grid">
                                        <div class="company__time time-inputs">
                                            <input type="number" name="hour" placeholder="00" max="23" length="2">
                                            <p>:</p>
                                            <input type="number" name="minute" placeholder="00" max="59" length="2">
                                        </div>
                                        <div class="company__time time-inputs">
                                            <input type="number" name="hour" placeholder="00" max="23" length="2">
                                            <p>:</p>
                                            <input type="number" name="minute" placeholder="00" max="59" length="2">
                                        </div>
                                        <div class="company__time time-inputs">
                                            <input type="number" name="hour" placeholder="00" max="23" length="2">
                                            <p>:</p>
                                            <input type="number" name="minute" placeholder="00" max="59" length="2">
                                        </div>
                                        <div class="company__time time-inputs">
                                            <input type="number" name="hour" placeholder="00" max="23" length="2">
                                            <p>:</p>
                                            <input type="number" name="minute" placeholder="00" max="59" length="2">
                                        </div>
                                    </div>
                                </div>
                                <div class="timetable__choice timetable__choice--periodicity">
                                    <h4>Periodiškumas</h4>
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
                            </div>
                            <div class="timetable__buttons-container">
                                <button class="orange transparent delete">Ištrinti</button>
                                <button class="generate">Sugeneruoti</button>
                            </div>
                        </div>
                    </div>
                    <div class="company__container">
                        <div class="timetable__container disable-scrollbars">
                            <?php for ($j = 0; $j < 15; $j++) { ?>
                                <div class="timetable__week <?php if ($j == 2) echo "selected-week selected-week--from ";
                                                            if ($j == 3) echo "selected-week selected-week--to " ?>">
                                    <?php for ($i = 0; $i < 7; $i++) { ?>
                                        <div class="timetable__day <?php if ($j >= 2 && $i >= 0 && $j <= 3 && $i <= 6) echo "active-from ";
                                                                    if ($j == 0 && $i < 1 || $j == 4 && $i > 4) echo "inactive "; ?>">
                                            <h4><b>Pr</b> 31 <span class="timetable__month-name"><?php if ($j == 0 && $i == 0) echo "GRUODIS";
                                                                                                    else if ($j == 0 && $i == 1) echo "SAUSIS";
                                                                                                    else if ($j == 4 && $i == 5) echo "VASARIS"; ?></span>
                                                <table class="timetable__table">
                                                    <tbody class="<?php if ($j == 0 && $i == 2) echo "active"; ?>">
                                                        <tr>
                                                            <td>
                                                                <div class="company__time time-inputs">
                                                                    <input type="number" name="hour" placeholder="00" max="23" length="2" <?php if ($j == 0 && $i == 2) echo "value='08'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                    <p class="<?php if ($j == 0 && $i == 2 || $j == 2 && $i == 0) echo "active"; ?>">:</p>
                                                                    <input type="number" name="minute" placeholder="00" max="59" length="2" <?php if ($j == 0 && $i == 2) echo "value='00'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="company__time time-inputs">
                                                                    <input type="number" name="hour" placeholder="00" max="23" length="2" <?php if ($j == 0 && $i == 2) echo "value='12'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                    <p class="<?php if ($j == 0 && $i == 2 || $j == 2 && $i == 0) echo "active"; ?>">:</p>
                                                                    <input type="number" name="minute" placeholder="00" max="59" length="2" <?php if ($j == 0 && $i == 2) echo "value='00'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="company__time time-inputs">
                                                                    <input type="number" name="hour" placeholder="00" max="23" length="2" <?php if ($j == 0 && $i == 2) echo "value='13'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                    <p class="<?php if ($j == 0 && $i == 2 || $j == 2 && $i == 0) echo "active"; ?>">:</p>
                                                                    <input type="number" name="minute" placeholder="00" max="59" length="2" <?php if ($j == 0 && $i == 2) echo "value='00'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="company__time time-inputs">
                                                                    <input type="number" name="hour" placeholder="00" max="23" length="2" <?php if ($j == 0 && $i == 2) echo "value='22'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                    <p class="<?php if ($j == 0 && $i == 2 || $j == 2 && $i == 0) echo "active"; ?>">:</p>
                                                                    <input type="number" name="minute" placeholder="00" max="59" length="2" <?php if ($j == 0 && $i == 2) echo "value='00'";
                                                                                                                                            else if ($j == 2 && $i == 0) echo "value='00'"; ?>>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="company__button-container company__button-container--timetable">
                        <button class="orange transparent">Atšaukti</button>
                        <button class="orange">Išsaugoti</button>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>