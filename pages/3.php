<?php $thisCat = "about";
$thisPage = "about-us"; ?>

<?php
$areas = array('Odontologijos klinikos', 'Klinikos ir estetinė medicina', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija', '???', '???');
$icons = array('../img/icons/odontology.svg', '../img/icons/clinic.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg', '../img/icons/cars.svg', '../img/icons/clean.svg');
$areasClass = array("odontology", "clinic", "beauty", "spa", "sport", "vet", "cars", "clean");
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main about-us parallax">
    <section class="opportunities parallax__group">
        <div class="background parallax__layer parallax__layer--deeper">
            <div class="backdrop"></div>
            <div class="circle circle--1"></div>
            <div class="circle circle--2"></div>
            <div class="circle circle--3"></div>
            <div class="overlay"></div>
        </div>
        <div class="opportunities__content parallax__layer parallax__layer--base">
            <h1>Galimybės verslui</h1>
            <h3>Valdyk savo verslą išmaniai, patogiai ir saugiai!</h3>
            <p>Rezervacijos internetu padeda efektyviau parduoti savo paslaugas:</p>
            <ul>
                <li>išlaidos mažėja;</li>
                <li>pajamos auga.</li>
            </ul>
            <button class="about-us__button darkblue">Prisijunk ir išbandyk!</button>
        </div>
        <div class="opportunities__photo parallax__layer parallax__layer--back">
            <img src="../img/specialistė-kirpėja-2.png">
        </div>
    </section>
    <section class="solutions parallax__group">
        <div class="background">
            <div class="backdrop"></div>
            <div class="circle circle--static"></div>
            <div class="overlay"></div>
        </div>
        <div class="solutions__content">
            <h2>Sprendimai</h2>
            <p>Potencialūs paslaugų pirkėjai – vienoje SERVE ONLINE platformoje. <br>
                Paprasta įsidiegti į savo svetainę, socialinius tinklus – </br>
                gera stebėti didėjančius pardavimus. </p>
        </div>
    </section>
    <section class="features parallax__group">
        <div class="background parallax__layer parallax__layer--deeper">
            <div class="backdrop-bg"></div>
            <div class="backdrop"></div>
            <div class="circle circle--4"></div>
            <div class="circle circle--5"></div>
            <div class="circle circle--6"></div>
            <div class="overlay"></div>
        </div>
        <!-- <div class="features__content parallax__layer parallax__layer--back"> -->
        <div class="features__content features__content--left parallax__layer parallax__layer--base">
            <img src="../img/icons/specialist.svg" alt="" class="features__icon features__icon--main">
            <h3>Mus vertina įvairias<br>
                paslaugas teikiantys<br>
                specialistai</h3>
            <button class="about-us__button darkblue">Prisijunk ir išbandyk!</button>
        </div>
        <div class="features__content features__content--right parallax__layer parallax__layer--base">
            <div class="features__item features__item--clients">
                <img src="../img/icons/people.svg" alt="" class="features__icon">
                <h3>Klientų ratas nuolat plečiasi</h3>
                <p>Patogu ir greita užsisakyti dominančią paslaugą, atlikti rezervaciją, lanksčiai koreguoti vizito laiką ir datą.</p>
            </div>
            <div class="features__item features__item--timetable">
                <img src="../img/icons/calendar-2.svg" alt="" class="features__icon">
                <h3>Jokių „tuščių langų“</h3>
                <p>Darbo grafikas užsipildys, nes iki 50 % rezervacijų per „Serve Online” sistemą atliekama likus 48 val. iki planuojamo užsakymo pradžios.</p>
            </div>
            <div class="features__item features__item--tools">
                <img src="../img/icons/computer.svg" alt="" class="features__icon">
                <h3>Šiuolaikiniai įrankiai</h3>
                <p>Įdiegta paslaugų rezervacijos sistema puikiai tinka bet kokio dydžio verslui ir savarankiškai dirbantiems specialistams.</p>
            </div>
            <div class="features__item features__item--reputation">
                <img src="../img/icons/star.svg" alt="" class="features__icon">
                <h3>Šiuolaikiniai įrankiai</h3>
                <p>Patenkinti ir laimingi klientai – geriausia reklama, sklindanti iš lūpų į lūpas. Mūsų sistemoje kaupsite tikrus atsiliepimus ir nuoširdžias rekomendacijas.</p>
            </div>
        </div>
        <!-- </div> -->

    </section>
    <section class="tools parallax__group">
        <div class="tools__content">
            <h2>Dar daugiau įrankių</h2>
            <p>
                „Serve Online“ – naujausia funkcija, papildžiusi įvairių paslaugų segmentams pritaikytą verslo valdymo sistemą

                <a href="#">„Serve Professionals“.</a>

                Nuo 2008 m. siūlome Lietuvoje veikiantiems specialistams personalizuotas galimybes. Subūrėme didelę verslo bendruomenę, vienijančią per 3 000 įvairių paslaugų teikėjus.
            </p>
        </div>
    </section>
    <section class="professionals parallax__group">
        <div class="professionals__about">
            <div class="background">
                <div class="circle circle--static"></div>
            </div>
            <h2>Serve Professionals galimybės</h2>
            <p>Potencialūs paslaugų pirkėjai – vienoje SERVE ONLINE platformoje.<br />
                Paprasta įsidiegti į savo svetainę, socialinius tinklus – <br />
                gera stebėti didėjančius pardavimus. </p>
        </div>
        <div class="professionals__slider vert-slider">
            <div class="vert-slider__aside">
                <ul class="vert-slider__items">
                    <li class="active">Registracijų kalendorius</li>
                    <li>Kliento kortelė</li>
                    <li>SMS priminimai</li>
                    <li>Duomenų kaupimas</li>
                    <li>Valdymo integracijos</li>
                    <li>Medicinos įstaigoms</li>
                </ul>
            </div>
            <div class="vert-slider__slides">
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Registracijų kalendorius</h3>
                        <ul>
                            <li>Darbo planavimas ir klientų aptarnavimas - iš bet kokio įrenginio, nepriklausomai nuo Jūsų buvimo vietos.</li>
                            <li>Visos telefonu ar internetu gautos klientų registracijos matomos viename tvarkaraščio lange.</li>
                            <li>Galimybė kalendoriuje sudaryti laukiančiųjų sąrašą.</li>
                            <li>Skirtingų prieigų personalui suteikimas pagal darbuotojų veiklos sritį.</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/priimamasis@2x.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Kliento kortelė</h3>
                        <ul>
                            <li>Asmeninio ryšio su klientais kūrimui - elektroninės kortelės opcija. </li>
                            <li>Galimybė kaupti kitą būtiną informaciją apie registracijas, svarbius dokumentus, mokėjimų istoriją.</li>
                            <li>Duomenų saugumas debesyse arba Jūsų pasirinktose laikmenose.</li>
                            <li>Klientų segmentavimo funkcija ir automatizuotas asmeninių pasiūlymų priskyrimas. </li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/prof-1.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>SMS priminimai</h3>
                        <ul>
                            <li>Trumpųjų tekstinių žinučių siuntimas klientams: priminimai apie suplanuotą veiksmą, sveikinimai, specialūs pasiūlymai.</li>
                            <li>Vienkartinių ar pakartotinių automatinių SMS siuntimo rezervacijų sistemoje nustatymas.</li>
                            <li>Galimybė informuoti darbuotojus apie pasikeitimus darbo kalendoriuje, išsiųsti vadovui darbo suvestines..</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/prof-2.png">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Duomenų kaupimas</h3>
                        <ul>
                            <li>Neribotas dokumentų kiekis Jūsų verslui: skaičiuoklės, paslaugų teikimo sutartys, gydymo planai, veiklos ataskaitos, grafikai. </li>
                            <li>Susikurkite reikalingas formas, išsaugokite ir sumažinkite kasdien pasikartojančių darbų apimtis.</li>
                            <li>Automatizuotas pardavimų, pelningumo duomenų kaupimas ir analizė, segmentavimo įrankiai (visos įmonės veikla, individualūs darbuotojų rodikliai). </li>
                            <li>Personalo skatinimo nustatymai.</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/prof-4.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Valdymo integracijos</h3>
                        <ul>
                            <li>Sandėlis: automatizuotas informacijos atnaujinimas apie prekių atsargas realiu laiku, įvykus pardavimui arba jas nurašius.</li>
                            <li>Kasa: avansinės įmokos, mokėjimai grynaisiais, kreditinėmis kortelėmis, atsiskaitymas dovanų kuponais, lojalumo taškais ir visų operacijų apskaita.</li>
                            <li>Sąsaja su buhalterine programa „Rivilė“.</li>
                            <li>Jūsų valdomų filialų kontrolė - realiu laiku, iš bet kurio taško pasaulyje, duomenų analizė.</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/prof-3.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Medicinos įstaigoms</h3>
                        <ul>
                            <li>Automatizuota integracija su sistema „E-sveikata“: elektroninė sveikatos istorija gydytojams ir pacientams.</li>
                            <li>Teritorinių ligonių kasų pacientų administravimas.</li>
                            <li>Gydymo planų sudarymas pacientams, veiklos ataskaitų formos ir kiti reikalingi dokumentai. </li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/prof-5.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="calc">
        <div class="background">
            <div class="backdrop"></div>
            <div class="circle circle--1"></div>
            <div class="circle circle--2"></div>
            <div class="circle circle--3"></div>
            <div class="overlay"></div>
        </div>
        <div class="calc__desc">
            <h2>Kainos skaičiuoklė</h2>
            <p>Pasirinkite paslaugų sritį ir specialistų skaičių, norėdami apskaičiuoti geriausio pasiūlymo kainą.<br>
                Jokių papildomų mokesčių nėra.</p>
            <div class="calc__areas">
                <?php for ($y = 0; $y < count($areas); $y++) { ?>
                    <div class="calc__area calc__area--<?php echo $areasClass[$y] ?>">
                        <div class="calc__area-img" tabindex="0" style="background-color: <?php echo $colors[$y] ?>"><img src=<?php echo "$icons[$y]" ?> alt=<?php echo $areas[$y] ?>></div>
                        <div class="calc__area-desc">
                            <p><?php echo $areas[$y] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="calc__input">
                Specialistų skaičius
                <input type="number" name="specialists" value="0" min="0" max="999" size="3">
                <div class="number-button-container">
                    <button class="number-up"></button>
                    <button class="number-down"></button>
                </div>
            </div>
        </div>
        <div class="calc__plan">
            <h2 class="calc__plan-title">BASIC</h2>
            <div class="calc__plan-content">
                <h2 class="calc__plan-price">7€<span>/mėn.</span></h2>
                <div class="checkbox">
                    <input type="checkbox" name="reservations" id="reservations">
                    <label for="reservations">Paslaugų rezervacijos internetu</label>
                </div>
                <ul>
                    <li><p>Paslaugų rezervacijos internetu 24 val. per parą, 7 dienos per savaitę <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Reklama: Google, soc. tinkluose, el. paštu <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Integracija su SERVE PROFESSIONALS sistema <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li class="expandable"><p>Automatiniai: priminimai, kvietimai, informavimai <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <ul>
                        <li><p>Rezervacijos patvirtinimas paslaugų gavėjui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li><p>Priminimas apie vizitą prieš 1 d. paslaugų gavėjui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li><p>Priminimas apie periodines paslaugas prieš 10 - 30 d. paslaugų gavėjui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li><p>Pranešimas apie naują rezervaciją specialistui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                    </ul>
                    <li><p>Rezervacijos įkėlimas į telefono kalendorių (Apple, Google, Windows) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Galimybė palikti rekomendaciją paslaugų gavėjui <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li class="expandable"><p>Atskaitos paslaugų gavėjui <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <ul>
                        <li><p>Lorem ipsum <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li><p>Lorem ipsum <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                    </ul>
                    <li class="expandable"><p>Atskaitos specialistui, įmonei <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <ul>
                        <li><p>Lorem ipsum <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li><p>Lorem ipsum <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p>Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                    </ul>
                    <li><p>Personalo valdymas <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Fotosesija (objekto interjeras, darbuotojai – tik naujai prisijungusiems) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Rezervacijų mygtukas BOOK NOW (Facebook, Instagram, jūsų internetinėje svetainėje) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Įmonės profilio individualus spalvinis dizainas (už papildomą kainą) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Paslaugų apmokėjimas (kuriama) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Reitingai, atsiliepimų valdymas (kuriama) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li><p>Palaikymas <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p>Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                </ul>
                <button class="calc__plan-order darkblue" type="button">Užsakyti</button>
            </div>
        </div>
    </section>
    <?php require_once('footer-menu-homepage.php'); ?>
</main>

<?php require_once('footer.php'); ?>