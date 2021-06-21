<?php $thisCat = "services"; ?>

<?php
$pfp = array('../img/1.jpg', '../img/2.jpg', '../img/3.jpg', '../img/4.jpg', '../img/5.jpg');
?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiDatepicker">
    <?php require_once('product-sidebar.php'); ?>
    <section class="page-content page-content--sidebar">
        <section class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li class="back-button">
                    <a href="#">Atgal</a>
                </li>
            </ul>
            <button class="breadcrumbs__cart"><span>2</span></button>
        </section>
        <div class="page-content__wrapper">
            <section class="company company-profile">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <div class="photo-slider">
                                <div class="photo-slider__slide">
                                    <div class="photo-slider__slide-content">
                                        <img src="../img/photo-1.png">
                                    </div>
                                </div>
                                <div class="photo-slider__slide">
                                    <div class="photo-slider__slide-content">
                                        <img src="../img/photo-2.png">
                                    </div>
                                </div>
                                <div class="photo-slider__slide">
                                    <div class="photo-slider__slide-content">
                                        <img src="../img/photo-3.png">
                                    </div>
                                </div>
                            </div>
                            <h2 class="company__header-title">Grožio salonas Jos ir Jo Kapriziukai</h2>
                            <div class="company__header-left">
                                <h3 class="company__header-address">Kalvarijų g. 25, Vilnius</h3>
                                <p class="company__header-phone">+370 000 00000</p>
                                <p class="company__header-hours">Atidaryta <span>08:00</span> - <span>20:00</span></p>
                                <p class="company__header-last-hour">Paskutinės valandos pasiūlymas <span class="percentage"> -10%</span> <span class="time-left"><span class="hours">02</span>:<span class="minutes">02</span>:<span class="seconds">02</span></span> </p>
                            </div>
                            <div class="company__header-right">
                                <div class="read-more">
                                    <p class="read-more__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat nibh in lorem vulputate sagittis.
                                        Praesent id libero sit amet felis feugiat auctor at at dui.
                                        Sed maximus nulla pharetra est condimentum fermentum. Duis hendrerit metus ac mattis pharetra.
                                        Nunc aliquet dui quis massa lacinia, non mattis enim elementum.
                                        Suspendisse fermentum mi ut elit congue eleifend. Fusce sed gravida erat.
                                        Suspendisse dignissim eleifend nisi ut euismod. Pellentesque rhoncus porttitor erat at luctus.
                                        Sed vulputate sapien quis venenatis bibendum. Integer volutpat luctus odio, ac laoreet odio mattis et.
                                        Aliquam erat volutpat. Aliquam euismod sollicitudin bibendum. Maecenas ac est tristique, dapibus est a,
                                        placerat sem.</p>
                                    <span class="read-more__button">Skaityti daugiau</span>
                                </div>
                                <span class="signature">Jūratė</span>
                            </div>
                        </div>
                        <div class="social-media">
                            <a href="#" class="social-media__icon social-media__icon--facebook"></a>
                            <a href="#" class="social-media__icon social-media__icon--instagram"></a>
                            <a href="#" class="social-media__icon social-media__icon--linkedin"></a>
                            <a href="#" class="social-media__icon social-media__icon--youtube"></a>
                        </div>
                        <ul class="company__nav company__nav--specialist">
                            <li class="active"><a href="#registruokis">Registracija</a></li>
                            <li><a href="#paslaugos">Paslaugos</a></li>
                            <li><a href="#produktai">Produktai</a></li>
                            <li><a href="#apie-mus">Apie mus</a></li>
                        </ul>
                    </div>
                </div>
                <section class="group__tab" id="registruokis">
                    <section class="product">
                        <div class="product__header">
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
                                <div class="product__block">
                                    <div class="product__block-top">
                                        <div class="product__block-person">
                                            <div class="product__block-photo" style="background-image: url(<?php echo "$pfp[$y]" ?>)">
                                                <div class="product__block-like-status hidden"></div>
                                            </div>
                                            <div class="product__block-info">
                                                <h2>Ramunė Varnaliauskienė</h2>
                                                <span>Dermatologė</span>
                                                <p>Klinika “Lazerinė praktika”<br />
                                                    <a href="#">M. Valančiaus g. 23, Kaunas</a><br />
                                                </p>
                                                <div class="product__block-distance distance"><b>15 min</b> (5,6 km)</div>

                                                <div class="product__block-info-actions">
                                                    <button class="button small orange product__block-more">Plačiau</button>
                                                    <button class="button small gray transparent product__block-like product__block-like--active">Mano</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="calendar-container">
                                            <div class="product__nav product__nav--person">
                                                <button class="product__nav-button product__nav-button--prev"></button>
                                                <div>
                                                    <span class="product__nav-icon"></span>
                                                    <input type="text" name="date" class="product__nav-input" readonly />
                                                </div>
                                                <button class="product__nav-button product__nav-button--next"></button>
                                            </div>
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
                                                                <p><?php if ($y !== 1) { ?>09:15<?php } ?></p>
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
                                                            <p><?php if ($y !== 1) { ?>09:15<?php } ?></p>
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
                                            <?php if ($y == 1) { ?><div class="calendar__next-time">Sekantis laikas 2020 birželio 19</div><?php } ?>
                                        </div>
                                    </div>
                                    <?php if ($y === 0) { ?>
                                        <h3 class="product__block-recommend">Specialistas Jums rekomenduoja užsiregistruoti šiai procedūrai</h3>
                                        <div class="product-action product__block-action">
                                            <div class="product-action__info">
                                                <h4>Greitasis odos atjauninimas lazeriu</h4>
                                                <div class="product-action__duration">01:00</div>
                                                <div class="product-action__price">45€<strike>60€</strike></div>
                                            </div>
                                            <button class="button cyan transparent small product-action__order">Registruotis</button>
                                        </div>
                                    <?php } ?>
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
                </section>
                <section class="group__tab hidden" id="paslaugos">
                    <h2>Plaukų priežiūra</h2>
                    <h3>Kirpimai moterims</h3>
                    <div class="services-list services-list--company-profile">
                        <div class="services-list__blocks">
                            <div class="services-list__block">
                                <h4><span>Paprastas kirpimas</span> <span class="more-button">Plačiau</span></h4>
                                <p class="more-description hidden">Galvos plovimas, modelinis kirpimas, dieninis sušukavimas.</p>
                                <div class="product-action">
                                    <div class="product-action__info">
                                        <div class="product-action__duration">01:00</div>
                                        <div class="product-action__price">45€<strike>60€</strike></div>
                                        <div class="product-action__periodicity">6 sav.</div>
                                    </div>
                                    <button class="button cyan transparent small product-action__order">Registruotis</button>
                                </div>
                            </div>
                            <div class="services-list__block services-list__block--choices">
                                <h4><span>Balayage / Ombre dažymas</span> <span class="more-button">Plačiau</span></h4>
                                <span class="product-expand"></span>
                                <p class="more-description hidden">
                                    Konsultacija. Dažymui atlikti nenaudojamos jokios pagalbinės priemonės. Jų nereikia todėl, kad siekiama išgauti ypatingą sruogų formą, kuri primena natūraliai nušviesėjusias sruogas. Dažai ant plaukų tepami laisvai rankomis, švelniai braukiant per plaukus. Dažniausiai nėra naudojama ir folija, bet yra visokių technikų.
                                </p>
                                <p class="more-description hidden">
                                    Plaukų sruogos dažomos laisvai, dažymo šepetėliu tapšnojant per pasirinktas plaukų sruogas, stengiamasi, kad viršuje jos būtų siauresnės, o į apačią išplatėtų. Dažoma taip, kad krentant plaukų sruogoms, dažytos vietos atrodytų kuo natūraliau - tarsi nubučiuotos saulės. Žinoma, tam, kad būtų tinkamai išgautas natūralus efektas Jums dažymą turėtų atlikti įgudusi plaukų stilistė.
                                <p class="more-description hidden">
                                    Plaukų dažymas balayage technika suteikia daugybę privalumų. Plaukai yra daug mažiau pažeidžiami, kadangi šviesinama tik dalis plaukų, bet to, parenkami tonai, kurie nenutolsta per daug nuo Jūsų natūralios plaukų spalvos. Dažniausiai tai būna keliais tonais šviesesni atspalviai. Žinoma, visada yra ir išimčių, kartais parenkamos labai kontrastingos spalvos, bet jos atrodo pakankamai natūraliai dėl pačios dažymo technikos. Dažymui naudojami tik profesionalūs dažai, kurie ne tik padeda išgauti norimą atspalvį, bet ir apsaugo plaukus nuo stipresnių pažeidimų. Plaukai išliks sveikai atrodantys ir gyvybingi.
                                </p>
                                <p class="more-description hidden">
                                    Dažant plaukus balayage technika pas kirpėją lankysitės tikrai daug rečiau - juk priešingai nei pilnu sruogų dažymu nuo šaknų, šiuo atveju nesimatys kiek plaukai nuaugo. Jei Jūsų plaukų galai yra išplonėję, balayage dažymas Jums suteiks apimties. Kadangi šviesesni plaukų galai atrodys pilnesni bei puresni. Balayage technika gražiausiai atrodo ilgaplaukėms, bet puikiai tiks ir toms, kurios turi trumpesnius plaukus.
                                </p>
                                <p class="more-description hidden">
                                    Paslaugos kaina gali keistis pagal sunaudotų dažų kiekį.
                                </p>
                                <div class="product-choice hidden">
                                    <h4>Trumpi plaukai</h4>
                                    <div class="product-action">
                                        <div class="product-action__info">
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€<strike>60€</strike></div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                        <button class="button cyan transparent small product-action__order">Registruotis</button>
                                    </div>
                                </div>
                                <div class="product-choice hidden">
                                    <h4>Vidutinio ilgio plaukai</h4>
                                    <div class="product-action">
                                        <div class="product-action__info">
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€<strike>60€</strike></div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                        <button class="button cyan transparent small product-action__order">Registruotis</button>
                                    </div>
                                </div>
                                <div class="product-choice hidden">
                                    <h4>Ilgi plaukai</h4>
                                    <div class="product-action">
                                        <div class="product-action__info">
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€<strike>60€</strike></div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                        <button class="button cyan transparent small product-action__order">Registruotis</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>Plaukų priežiūra</h2>
                    <h3>Kirpimai moterims</h3>
                    <div class="services-list services-list--company-profile">
                        <div class="services-list__blocks">
                            <div class="services-list__block">
                                <h4><span>Paprastas kirpimas</span> <span class="more-button">Plačiau</span></h4>
                                <p class="more-description hidden">Galvos plovimas, modelinis kirpimas, dieninis sušukavimas.</p>
                                <div class="product-action">
                                    <div class="product-action__info">
                                        <div class="product-action__duration">01:00</div>
                                        <div class="product-action__price">45€<strike>60€</strike></div>
                                        <div class="product-action__periodicity">6 sav.</div>
                                    </div>
                                    <button class="button cyan transparent small product-action__order">Registruotis</button>
                                </div>
                            </div>
                            <div class="services-list__block services-list__block--choices">
                                <h4><span>Balayage / Ombre dažymas</span> <span class="more-button">Plačiau</span></h4>
                                <span class="product-expand"></span>
                                <p class="more-description hidden">
                                    Konsultacija. Dažymui atlikti nenaudojamos jokios pagalbinės priemonės. Jų nereikia todėl, kad siekiama išgauti ypatingą sruogų formą, kuri primena natūraliai nušviesėjusias sruogas. Dažai ant plaukų tepami laisvai rankomis, švelniai braukiant per plaukus. Dažniausiai nėra naudojama ir folija, bet yra visokių technikų.
                                </p>
                                <p class="more-description hidden">
                                    Plaukų sruogos dažomos laisvai, dažymo šepetėliu tapšnojant per pasirinktas plaukų sruogas, stengiamasi, kad viršuje jos būtų siauresnės, o į apačią išplatėtų. Dažoma taip, kad krentant plaukų sruogoms, dažytos vietos atrodytų kuo natūraliau - tarsi nubučiuotos saulės. Žinoma, tam, kad būtų tinkamai išgautas natūralus efektas Jums dažymą turėtų atlikti įgudusi plaukų stilistė.
                                <p class="more-description hidden">
                                    Plaukų dažymas balayage technika suteikia daugybę privalumų. Plaukai yra daug mažiau pažeidžiami, kadangi šviesinama tik dalis plaukų, bet to, parenkami tonai, kurie nenutolsta per daug nuo Jūsų natūralios plaukų spalvos. Dažniausiai tai būna keliais tonais šviesesni atspalviai. Žinoma, visada yra ir išimčių, kartais parenkamos labai kontrastingos spalvos, bet jos atrodo pakankamai natūraliai dėl pačios dažymo technikos. Dažymui naudojami tik profesionalūs dažai, kurie ne tik padeda išgauti norimą atspalvį, bet ir apsaugo plaukus nuo stipresnių pažeidimų. Plaukai išliks sveikai atrodantys ir gyvybingi.
                                </p>
                                <p class="more-description hidden">
                                    Dažant plaukus balayage technika pas kirpėją lankysitės tikrai daug rečiau - juk priešingai nei pilnu sruogų dažymu nuo šaknų, šiuo atveju nesimatys kiek plaukai nuaugo. Jei Jūsų plaukų galai yra išplonėję, balayage dažymas Jums suteiks apimties. Kadangi šviesesni plaukų galai atrodys pilnesni bei puresni. Balayage technika gražiausiai atrodo ilgaplaukėms, bet puikiai tiks ir toms, kurios turi trumpesnius plaukus.
                                </p>
                                <p class="more-description hidden">
                                    Paslaugos kaina gali keistis pagal sunaudotų dažų kiekį.
                                </p>
                                <div class="product-choice hidden">
                                    <h4>Trumpi plaukai</h4>
                                    <div class="product-action">
                                        <div class="product-action__info">
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€<strike>60€</strike></div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                        <button class="button cyan transparent small product-action__order">Registruotis</button>
                                    </div>
                                </div>
                                <div class="product-choice hidden">
                                    <h4>Vidutinio ilgio plaukai</h4>
                                    <div class="product-action">
                                        <div class="product-action__info">
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€<strike>60€</strike></div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                        <button class="button cyan transparent small product-action__order">Registruotis</button>
                                    </div>
                                </div>
                                <div class="product-choice hidden">
                                    <h4>Ilgi plaukai</h4>
                                    <div class="product-action">
                                        <div class="product-action__info">
                                            <div class="product-action__duration">01:00</div>
                                            <div class="product-action__price">45€<strike>60€</strike></div>
                                            <div class="product-action__periodicity">6 sav.</div>
                                        </div>
                                        <button class="button cyan transparent small product-action__order">Registruotis</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="group__tab hidden" id="produktai">
                    <h2>Mūsų partneriai</h2>
                    <div class="photo-grid">
                        <ul>
                            <?php for ($i = 0; $i < 16; $i++) { ?>
                                <li>
                                    <div class="photo-grid__item photo-grid__item--logo">
                                        <img src="../img/matrix.png">
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
                <section class="group__tab hidden" id="apie-mus">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et mi egestas, congue dui id, sollicitudin felis.
                        Suspendisse potenti. Praesent volutpat magna ac felis egestas, sed auctor diam posuere. Etiam vitae suscipit velit.
                        Curabitur ornare massa at vehicula ornare. Aliquam feugiat tristique commodo. Proin aliquam tempor convallis.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Maecenas lobortis rhoncus ultricies.</p>
                    <p>Suspendisse lectus sem, eleifend at posuere a, maximus id libero. Integer congue placerat placerat.
                        Etiam nec arcu id eros pellentesque elementum et vitae felis. Cras dignissim cursus ipsum id aliquet.
                        Nunc sollicitudin dignissim arcu, blandit consequat mi tempor et. Pellentesque id nibh tristique,
                        pellentesque tortor mollis, tristique mi. Vivamus accumsan quis libero eget lobortis. Etiam eget mi tempus,
                        cursus ipsum non, lobortis turpis. Nulla tempus ornare elementum. Suspendisse tempor sagittis mattis.
                        Fusce tempor elit orci, eu laoreet sapien congue sed. Proin maximus magna libero, in vehicula orci suscipit sed.</p>
                    <div class="company-profile__about">
                        <div class="company-profile__work-hours">
                            <h3>Darbo laikas</h3>
                            <table>
                                <tr>
                                    <td class="day">Pirmadienis</td>
                                    <td class="hours"><span class="hours__from">08:00</span> - <span class="hours__to">20:00</span></td>
                                </tr>
                                <tr>
                                    <td class="day">Antradienis</td>
                                    <td class="hours"><span class="hours__from">08:00</span> - <span class="hours__to">20:00</span></td>
                                </tr>
                                <tr>
                                    <td class="day">Trečiadienis</td>
                                    <td class="hours hours--today"><span class="hours__from">08:00</span> - <span class="hours__to">20:00</span></td>
                                </tr>
                                <tr>
                                    <td class="day">Ketvirtadienis</td>
                                    <td class="hours"><span class="hours__from">08:00</span> - <span class="hours__to">20:00</span></td>
                                </tr>
                                <tr>
                                    <td class="day">Penktadienis</td>
                                    <td class="hours"><span class="hours__from">08:00</span> - <span class="hours__to">20:00</span></td>
                                </tr>
                                <tr>
                                    <td class="day">Šeštadienis</td>
                                    <td class="hours"><span class="hours__from">08:00</span> - <span class="hours__to">20:00</span></td>
                                </tr>
                                <tr>
                                    <td class="day">Sekmadienis</td>
                                    <td class="hours">Nedirba</td>
                                </tr>
                            </table>
                        </div>
                        <div class="company-profile__place">
                            <h3>Mus rasite</h3>
                            <div class="company-profile__place-info">
                                <h4>M. Valančiaus g. 23, Kaunas</h4>
                                <h4 class="distance"><span class="orange">15min</span> (5.6km)</h4>
                                <h4 class="phone">+370 000 00000</h4>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18437.91025396692!2d25.250708695385747!3d54.71421878262784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1slt!2slt!4v1619517592895!5m2!1slt!2slt" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>