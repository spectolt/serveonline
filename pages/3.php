<?php $thisCat = "about";
$thisPage = "about-us"; ?>

<?php require_once('header.php'); ?>
<main class="site-main about-us">
    <section class="opportunities">
        <div class="background">
            <div class="backdrop"></div>
            <div class="circle circle--1"></div>
            <div class="circle circle--2"></div>
            <div class="circle circle--3"></div>
            <div class="overlay"></div>
        </div>
        <div class="opportunities__content">
            <h1>Galimybės verslui</h1>
            <h3>Valdyk savo verslą išmaniai, patogiai ir saugiai!</h3>
            <p>Rezervacijos internetu padeda efektyviau parduoti savo paslaugas:</p>
            <ul>
                <li>išlaidos mažėja;</li>
                <li>pajamos auga.</li>
            </ul>
            <button class="darkblue">Prisijunk ir išbandyk!</button>
        </div>
        <div class="opportunities__photo">
            <img src="../img/specialistė-kirpėja-2.png">
        </div>
    </section>
    <section class="solutions">
    <div class="background">
            <div class="circle circle--4"></div>
            <div class="overlay"></div>
        </div>
        <div class="solutions__content">
            <h2>Sprendimai</h2>
            <p>Potencialūs paslaugų pirkėjai – vienoje SERVE ONLINE platformoje. <br>
                Paprasta įsidiegti į savo svetainę, socialinius tinklus – </br>
                gera stebėti didėjančius pardavimus. </p>
        </div>

    </section>
    <?php require_once('footer-menu-homepage.php'); ?>
</main>

<?php require_once('footer.php'); ?>