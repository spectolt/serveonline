<?php $thisCat = "about";
$thisPage = "about-us"; ?>

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
        <div class="features__content features__content--right parallax__layer parallax__layer--back">
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
                <p>Įdiegta paslaugų rezervacijos sistema puikiai tinka bet kokio dydžio verslui ir savarankiškai dirbantiems specialistams.</p>
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
    <?php require_once('footer-menu-homepage.php'); ?>
</main>

<?php require_once('footer.php'); ?>