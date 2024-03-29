<?php $thisCat = "about";
$thisPage = "about-us"; ?>

<?php
$areas = array('Odontologijos klinikos', 'Klinikos ir estetinė medicina', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija', '???', '???');
$icons = array('../img/icons/odontology.svg', '../img/icons/clinic.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg', '../img/icons/cars.svg', '../img/icons/clean.svg');
$areasClass = array("odontology", "clinic", "beauty", "spa", "sport", "vet", "cars", "clean");
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<div class="ui-widget-overlay hidden"></div>
<section class="join-and-try-container hidden">
    <div class="join-and-try">
        <div class="try">
            <h2>Prisijunk ir išbandyk</h2>
            <form class="">
                <div class="radio">
                    <input name="specialist-type" type="radio" id="person" class="" value="1" required="" checked>
                    <label for="person">Juridinis asmuo</label>
                </div>
                <div class="radio">
                    <input name="specialist-type" type="radio" id="specialist" class="" value="1" required="">
                    <label for="specialist">Savarankiškas specialistas</label>
                </div>
                <div class="input-container input-container--company">
                    <input type="text" class="company-name" name="title" placeholder="Įmonės pavadinimas">
                    <span class="input-icon"></span>
                </div>
                <div class="input-container input-container--name">
                    <input type="text" class="company-name" name="name" placeholder="Jūsų vadas, pavardė">
                    <span class="input-icon"></span>
                </div>
                <div class="input-container input-container--phone">
                    <input type="text" class="company-name" name="phone" placeholder="Tel. numeris">
                    <span class="input-icon"></span>
                </div>
                <div class="input-container input-container--email">
                    <input type="text" class="company-name" name="email" placeholder="El. pašto adresas">
                    <span class="input-icon"></span>
                </div>
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
                <div class="input-container input-container--other">
                    <input type="text" class="other" name="title" placeholder="Jeigu užsiimate kita veiklos sritimi &#8211; prašome įrašyti čia">
                    <span class="input-icon"></span>
                </div>
                <div class="calc__input">
                    Specialistų skaičius
                    <input type="number" name="specialists" value="1" min="0" max="999" size="3">
                    <div class="number-button-container">
                        <button type="button" class="number-up"></button>
                        <button type="button" class="number-down"></button>
                    </div>
                </div>
                <button type="submit" value="Submit" class="calc__plan-order orange">Užsakyti</button>
            </form>
        </div>
        <div>
</section>
<main class="site-main about-us">
    <section class="about-us__section opportunities parallax__group">

        <div class="opportunities__content parallax__layer parallax__layer--base">
            <h1>Modernios galimybės verslui</h1>
            <h3>Perkelk savo verslą ten, kur potencialūs klientai.</h3>
            <p>Su Serve Online greitai ir paprastai valdyk visą informaciją, apdorok duomenis ir priimk teisingus sprendimus.</p>
            <button class="about-us__button darkblue">Prisijunk ir išbandyk!</button>
        </div>
        <div class="background parallax__layer">
            <div class="backdrop"></div>
            <div class="circle circle--1"></div>
            <div class="circle circle--2"></div>
            <div class="circle circle--3"></div>
            <div class="overlay"></div>
            <div class="opportunities__photo">
                <img src="../img/specialistė-kirpėja-2.png">
            </div>
        </div>
    </section>
    <section class="about-us__section solutions parallax__group">
        <div class="background">
            <div class="backdrop"></div>
            <div class="circle circle--static"></div>
            <div class="overlay"></div>
        </div>
        <div class="solutions__content">
            <h2>Patogūs sprendimai</h2>
            <p>Serve Online platformoje apjunk visus savo potencialius klientus. Paprasta įdiegti į savo svetainę ir į socialinius tinklus. Stebėk, kaip auga pardavimai!</p>
        </div>
    </section>
    <section class="about-us__section features parallax__group">
        <div class="background parallax__layer parallax__layer--deeper">
            <div class="backdrop-bg"></div>
            <div class="backdrop"></div>
            <div class="circle circle--4"></div>
            <div class="circle circle--5"></div>
            <div class="circle circle--6"></div>
            <div class="overlay"></div>
        </div>
        <!-- <div class="features__content parallax__layer parallax__layer--back"> -->
        <div class="features__content features__content--left">
            <img src="../img/icons/specialist.svg" alt="" class="features__icon features__icon--main">
            <h3>Mus vertina įvairias<br>
                paslaugas teikiantys<br>
                specialistai</h3>
            <button class="about-us__button darkblue">Prisijunk ir išbandyk!</button>
        </div>
        <div class="features__content features__content--right">
            <div class="features__item features__item--clients">
                <img src="../img/icons/people.svg" alt="" class="features__icon">
                <h3>Klientų nuolat daugėja</h3>
                <p>Patogu greitai užsisakyti paslaugą, lanksčiai koreguoti vizito laiką ir datą, stebėti asmeninius pasiūlymus ir kitų klientų atsiliepimus, registruotis socialiniuose tinkluose.</p>
            </div>
            <div class="features__item features__item--timetable">
                <img src="../img/icons/calendar-2.svg" alt="" class="features__icon">
                <h3>Jokių „tuščių langų“</h3>
                <p>Darbo grafikas sėkmingai užsipildo, kai didėja verslo žinomumas ir kontroliuojamos išankstinės registracijos.</p>
            </div>
            <div class="features__item features__item--tools">
                <img src="../img/icons/computer.svg" alt="" class="features__icon">
                <h3>Šiuolaikiniai įrankiai</h3>
                <p>Parduokite teikiamas paslaugas efektyviai. Naujausi sprendimai pritaikyti bet kokio dydžio verslui ir savarankiškai dirbantiems specialistams.</p>
            </div>
            <div class="features__item features__item--reputation">
                <img src="../img/icons/star.svg" alt="" class="features__icon">
                <h3>Patikimas įvaizdis</h3>
                <p>Geriausia reklama - patenkinti ir laimingi klientai. Sistemoje kaupsite realių žmonių atsiliepimus ir nuoširdžias rekomendacijas.</p>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <section class="about-us__section calc parallax__group">
        <div class="background parallax__layer parallax__layer--deeper">
            <div class="backdrop"></div>
            <div class="circle circle--1"></div>
            <div class="circle circle--2"></div>
            <div class="circle circle--3"></div>
            <div class="overlay"></div>
        </div>
        <div class="calc__plan">
            <h2 class="calc__plan-title">BASIC</h2>
            <div class="calc__plan-content">
                <h2 class="calc__plan-price">7€<span>/mėn.</span></h2>
                <!-- <div class="checkbox">
                    <input type="checkbox" name="reservations" id="reservations">
                    <label for="reservations">Paslaugų rezervacijos internetu</label>
                </div> -->
                <ul>
                    <li>
                        <p class="calc__plan-def">Paslaugų registracija internetu 24/7 <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Reklama internete: Google, socialinuose tinkluose, elektroniniu paštu<span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Integracija su SERVE PROFESSIONALS sistema <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li class="expandable">
                        <p class="calc__plan-def">Automatinė komunikacija: informacinės žinutės, priminimai, kvietimai<span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <ul>
                        <li>
                            <p class="calc__plan-def">Rezervacijos patvirtinimas paslaugų gavėjui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Priminimas apie vizitą prieš 1 d. paslaugų gavėjui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Priminimas apie periodines paslaugas prieš 10 - 30 d. paslaugų gavėjui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Pranešimas apie naują rezervaciją specialistui <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                    </ul>
                    <li>
                        <p class="calc__plan-def">Registracijos įkėlimas į telefono kalendorių<span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Galimybė pateikti rekomendaciją paslaugų gavėjui<span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li class="expandable">
                        <p class="calc__plan-def">Ataskaitos paslaugų gavėjui <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <ul>
                        <li>
                            <p class="calc__plan-def">Laukiančios rezervacijos <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Buvusių rezervacijų istorija <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">„Mano“ specialistų paliktos rekomendacijos <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                    </ul>
                    <li class="expandable">
                        <p class="calc__plan-def">Atskaitos specialistui, įmonei <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <ul>
                        <li>
                            <p class="calc__plan-def">Naujų ir grįžusių klientų ataskaita bei finansiniai rodikliai <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Profilio peržiūrų ir nepavykusių rezervacijų ataskaita <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Pažymėjo „Mano“ ataskaita <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Klientų, pasinaudojusių specialisto rekomendacijom, ataskaita <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">TOP klientų atskaita <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                    </ul>
                    <li class="expandable">
                        <p class="calc__plan-def">Personalo valdymas <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <ul>
                        <li>
                            <p class="calc__plan-def">Skirtinga darbuotų priega prie duomenų <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                        <li>
                            <p class="calc__plan-def">Darbo grafikai, individualios paslaugos, kainos, trukmės <span class="question-mark">?</span></p>
                            <div class="plan-desc">
                                <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                                <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                    nobis est eligendi optio cumque
                                    nihil impedit quo minus id quod
                                    maxime placeat facere possimus, ty
                                    omnis voluptas assumenda est,
                                    omnis dolor repellendus.
                                    Temporibus autem quibusdam et
                                    aut officiis debitis.</p>
                                <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                            </div>
                        </li>
                    </ul>
                    <li>
                        <p class="calc__plan-def">Fotosesija (interjeras, darbuotojai – tik naujai prisijungusiems) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Registracijų mygtukas BOOK NOW (Soc. tinkluose, jūsų svetainėje)<span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Įmonės profilio individualus spalvinis dizainas (už papildomą kainą) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Paslaugų apmokėjimas (kuriama) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Reitingai, atsiliepimų valdymas (kuriama) <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                    <li>
                        <p class="calc__plan-def">Palaikymas <span class="question-mark">?</span></p>
                        <div class="plan-desc">
                            <h3 class="plan-desc__title">Reitingai, atsiliepimų valdymas</h3>
                            <p class="plan-desc__desc">Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque
                                nihil impedit quo minus id quod
                                maxime placeat facere possimus, ty
                                omnis voluptas assumenda est,
                                omnis dolor repellendus.
                                Temporibus autem quibusdam et
                                aut officiis debitis.</p>
                            <button class="plan-desc__more small darkblue transparent">Plačiau</button>
                        </div>
                    </li>
                </ul>
                <button class="calc__plan-order calc__plan-order--main darkblue about-us__button" type="button">Užsakyti</button>
            </div>
        </div>
        <div class="calc__desc">
            <h2>Skaičiuoklė</h2>
            <p>Kainos apskaičiavimui pasirinkite paslaugų sritį ir specialistų skaičių. Jokių papildomų mokesčių.</p>
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
    </section>
    <section class="about-us__section tools parallax__group">
        <div class="tools__content">
            <h2>Papildomi įrankiai</h2>
            <p>Internetinė registracija Serve Online platformoje – papildoma verslo valdymo sistemos Serve Professionals funkcija.

                <a href="#">„Serve Professionals“.</a>

                Nuo 2008 m. siūlome suasmenintas verslo plėtojimo galimybes Lietuvoje veikiantiems specialistams. Subūrėme didelę verslo bendruomenę, vienijančią per 3 000 įvairių paslaugų teikėjų.
            </p>
        </div>
    </section>
    <section class="about-us__section professionals parallax__group">
        <div class="background">
            <div class="circle circle--static"></div>
        </div>
        <div class="professionals__about">
            <h2>Šiuolaikinės galimybės</h2>
            <p>Nuolat tobuliname Serve Professionals verslo valdymo sistemos saugumą ir plečiame galimybes. Integracija su E.sveikata, buhalterine programa, papildoma technine įranga.</p>
        </div>
        <div class="professionals__slider vert-slider">
            <div class="vert-slider__aside">
                <ul class="vert-slider__items">
                    <li class="active">Registracijų kalendorius</li>
                    <li>Kliento kortelė</li>
                    <li>SMS priminimai</li>
                    <li>Duomenų kaupimas</li>
                    <li>Integruotas valdymas</li>
                    <li>Medicinos įstaigoms</li>
                </ul>
            </div>
            <div class="vert-slider__slides">
                <div class="vert-slider__slide visible">
                    <div class="vert-slider__slide-content">
                        <h3>Registracijų kalendorius</h3>
                        <ul>
                            <li>Planuokite darbus ir aptarnaukite klientus bet kur ir bet kada, naudodamiesi Jums patogia įranga - kompiuteriu ar telefonu.</li>
                            <li>Visas klientų registracijas internete matysite ir valdysite viename tvarkaraščio lange, yra galimybė suskirstyti užklausas bei užsakymus pagal geografines verslo veiklos vietas.</li>
                            <li>Suteikite skirtingas prieigos teises darbuotojams pagal jų atsakomybių laipsnį.</li>
                            <!-- <li>Skirtingų prieigų personalui suteikimas pagal pareigas.</li> -->
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/3-1.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Kliento kortelė</h3>
                        <ul>
                            <li>Svarbius duomenis apie klientus kaupkite elektroninių kortelių formatu.</li>
                            <li>Vizitų ir medicininė istorija, paslaugų planai, kompensacijų ir mokėjimų duomenys, sutartys, nuotraukos ir kiti būtini dokumentai.</li>
                            <li>Klientų segmentacija ir aptarnavimas su personalizuotomis nuolaidomis.</li>
                            <li>Saugus duomenų kaupimas Jūsų pačių pasirinktose laikmenose ar serveriuose.</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/3-2.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>SMS komunikacija</h3>
                        <ul>
                            <li>Priminimai prieš vizitą registracijai patvirtinti, asmeniniai sveikinimai, specialūs pasiūlymai, grįžtamojo ryšio apklausos po apsilankymo.</li>
                            <li>Periodiniai SMS kvietimai klientų pakartotiniams vizitams skatinti.</li>
                            <li>Artėjančios darbo dienos informacija darbuotojams apie dienotvarkę, registracijas, apyvartos duomenys vadovui.</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/3-3.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Duomenų kaupimas</h3>
                        <ul>
                            <li>Automatizuotas pardavimų, pelningumo duomenų kaupimas ir analizė, segmentavimo įrankiai (visos įmonės veikla, filialų veikla, individualūs darbuotojų rodikliai).</li>
                            <li>Neribotas dokumentų kiekis Jūsų verslui skaitmeniniu formatu: skaičiuoklės, paslaugų teikimo sutartys, anketos, gydymo planai ir nuotraukos, veiklos ataskaitos, grafikai, kita.</li>
                            <li>Išankstinis dokumentų formų kūrimas pasikartojantiems veiksmams.</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/3-4.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Integruotas valdymas</h3>
                        <ul>
                            <li>Serve Online patogiai ir greitai susiejamas su internetine registracija, socialinių tinklų paskyromis, svetaine.</li>
                            <li>Realiu laiku ir per nuotolį galite kontroliuoti verslą, analizuoti duomenis, konfigūruoti nustatymus visai informacijai gauti arba pagal atskirus veiklos vienetus.</li>
                            <li>Prekių sandėlio veikla: neribojamas sandėlių kiekis, įdiegtas FIFO principas, pritaikyta mažmeninei ir didmeninei prekybai. Prekių pardavimo informacija pateikiama realiu laiku, likučių kontrolė, pardavimų skatinimas darbuotojų motyvavimo programoje.</li>
                            <li>Kasa: mokėjimai grynaisiais, kortelėmis, bankiniu pavedimu, avansinės įmokos, dovanų kuponai, abonimentai. Kasos orderiai, kvitai, sąskaitos faktūros, klientų lojalumo programa, visų operacijų apskaita.</li>
                            <li>Sąsaja su buhalterine programa „Rivilė“.</li>
                            <li>Dokumentų pasirašymas elektroniniu rašytiniu parašu planšetėse (kuriama).</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/3-5.jpg">
                    </div>
                </div>
                <div class="vert-slider__slide">
                    <div class="vert-slider__slide-content">
                        <h3>Medicinos įstaigoms</h3>
                        <ul>
                            <li>Automatizuota integracija su E.sveikata: elektroninė sveikatos istorija gydytojams ir pacientams (kuriama).</li>
                            <li>Teritorinių ligonių kasų kompensacijų administravimas.</li>
                            <li>Gydymo planų sudarymas, receptai, gydytojų įrašų formos, medicininiai dokumentai, veiklos ataskaitos.</li>
                        </ul>
                    </div>
                    <div class="vert-slider__slide-image">
                        <img src="../img/3-6.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('footer-menu-homepage.php'); ?>
</main>

<?php require_once('footer.php'); ?>