<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Veterinarijos klinikos', 'Grožio salonai ir kirpyklos', 'SPA ir masažo salonai', 'Sportas ir reabilitacija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/vet.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg');
$colors = array('#fec994', '#cce2ff', '#c1e1d2', '#fed9c9', '#ffefd8', '#e2c4ae');
$class = array('clinic', 'odontology', 'vet', 'beauty', 'spa', 'sport');
?>

<?php require_once('header-home.php'); ?>

<main class="site-main container">
    <section class="main-screen">
        <div class="main-screen__info">
            <h1 class="title title--home">Atrask savo<span style="display: block;">geriausią specialistą!</span></h1>
            <h2 class="subtitle subtitle--home">Įvairių paslaugų rezervacijos nemokamai</h2>
            <div class="main-screen__areas">
                <?php for ($y = 0; $y < 6; $y++) { ?>
                    <div class="main-screen__area">
                        <div class="main-screen__area-img main-screen__area-img--<?php echo "$class[$y]" ?>" style="background-color: <?php echo "$colors[$y]" ?>">
                            <img src="../img/icons/dantis 210303.svg" style="height: 50%; left: 52%; top: 48%;">
                        </div>
                        <h3 class="main-screen__area-title"><?php echo $areas[$y] ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="main-screen__image">
            <img src="../img/illustrations/home-main.svg" alt="">
        </div>
    </section>
    <section class="feature-screen">
        <div class="feature-screen__slides-container">
            <div class="feature-screen__slide">
                <div class="feature-screen__slide-content">
                    <div class="feature-screen__slide-image">
                        <img src="../img/illustrations/mob-1.png">
                    </div>
                    <div class="feature-screen__info">
                        <h3 class="feature-screen__title">Specialistų užimtumas realiu laiku</h3>
                        <ul class="feature-screen__list">
                            <li>greita paieška pagal vietą, datą ir paslaugos rūšį</li>
                            <li>duomenų atnaujinimas visą parą</li>
                            <li>asmeninio pasirinktų specialistų sąrašo sudarymas</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="feature-screen__slide">
                <div class="feature-screen__slide-content">
                    <div class="feature-screen__slide-image">
                        <img src="../img/illustrations/mob-2.png">
                    </div>
                    <div class="feature-screen__info">
                        <h3 class="feature-screen__title">Arčiausiai teikiamos paslaugos</h3>
                        <ul class="feature-screen__list">
                            <li>paieška pagal miestą, gatvę ir specialius pasiūlymus</li>
                            <li>teikiamų paslaugų pristatymas ir rezervacija</li>
                            <li>skambutis specialistui tiesiai iš programėlės</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="feature-screen__slide">
                <div class="feature-screen__slide-content">
                    <div class="feature-screen__slide-image">
                        <img src="../img/illustrations/mob-3.png">
                    </div>
                    <div class="feature-screen__info">
                        <h3 class="feature-screen__title">Išsami informacija apie specialistą</h3>
                        <ul class="feature-screen__list">
                            <li>profesinis lygis ir patirtis</li>
                            <li>realūs atsiliepimai ir rekomendacijos</li>
                            <li>pasirinktų specialistų rato sudarymas su sąrašu „Mano“</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="feature-screen__slide">
                <div class="feature-screen__slide-content">
                    <div class="feature-screen__slide-image">
                        <img src="../img/illustrations/mob-4.png">
                    </div>
                    <div class="feature-screen__info">
                        <h3 class="feature-screen__title">Viskas, ką reikia žinoti apie įstaigą</h3>
                        <ul class="feature-screen__list">
                            <li>kontaktiniai duomenys ir teikiamos paslaugos</li>
                            <li>specialistų užimtumas ir paslaugų kainos</li>
                            <li>specialūs pasiūlymai ir klientų atsiliepimai</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="feature-screen__slide">
                <div class="feature-screen__slide-content">
                    <div class="feature-screen__slide-image">
                        <img src="../img/illustrations/mob-5.png">
                    </div>
                    <div class="feature-screen__info">
                        <h3 class="feature-screen__title">Stebėk savo užsakymų istoriją</h3>
                        <ul class="feature-screen__list">
                            <li>išsaugota informacija apie apsilankymų vietą ir laiką</li>
                            <li>priminimai telefono kalendoriuje apie naujas rezervacijas</li>
                            <li>greita pasirinktų specialistų paieška pagal sąrašą „Mano“</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="feature-screen__slide">
                <div class="feature-screen__slide-content">
                    <div class="feature-screen__slide-image">
                        <img src="../img/illustrations/mob-6.png">
                    </div>
                    <div class="feature-screen__info">
                        <h3 class="feature-screen__title">Rinkis tada, kai Tau patogu</h3>
                        <ul class="feature-screen__list">
                            <li>surask reikiamą specialistą pasirinktą savaitės dieną</li>
                            <li>planuok laiką pagal savo užimtumą</li>
                            <li>sužinok apie realiu laiku – čia ir dabar laisvus specialistus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="information-screen">
        <div class="information-screen__left">
            <div class="information-screen__text">
                <h2 class="information-screen__title">Lengva išsirinkti, patogu užsisakyti</h2>
                <h3 class="information-screen__subtitle">Daugiau jokių ilgų paieškų, pokalbių telefonu ar susirašinėjimų žinutėmis</h3>
                <p>Rezervuok vizito laiką mėgstamoje estetinės medicinos ar odontologijos klinikoje, arčiau namų veikiančiame grožio, SPA ar masažo salone, populiariausiame sporto ir reabilitacijos centre.</p>
            </div>
        </div>
        <div class="information-screen__image">
            <img src="../img/illustrations/home-services.svg" alt="">
        </div>
    </section>
    <section class="business-screen">
        <div class="business-screen__image">
            <img src="../img/illustrations/home-business.svg" alt="">
        </div>
        <div class="business-screen__text">
            <h2 class="business-screen__title">Internetinė rezervacijos sistema verslui</h2>
            <h3 class="business-screen__subtitle">Didesni paslaugų pardavimai ir augantis klientų skaičius</h3>
            <p><b>Serve Online</b> internetinių rezervacijų įrankis - tik vienas iš sprendimų verslui. <br> Papildomai siūlome optimizuoti visus vidinius darbo procesus su unikalia verslo valdymo sistema <b>Serve Professionals</b>.</p>
            <button>Sprendimai</button>
        </div>
    </section>
        <?php require_once('footer-menu-homepage.php'); ?>

</main>

<?php require_once('footer.php'); ?>