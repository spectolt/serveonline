<?php $thisCat = "controls";
$thisPage = "general-controls"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls page-content--general">
        <div class="page-content__wrapper">
            <section class="controls general company">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <h2>Bendri nustatymai</h2>
                            <button class="darkblue">Publikuoti</button>
                        </div>
                        <div class="company__nav-container">
                            <ul class="company__nav company__nav--specialist">
                                <li class="active"><a href="#saliu-nustatymai">Šalių nustatymai</a></li>
                                <li><a href="#kainu-nustatymai">Kainų nustatymai</a></li>
                                <li><a href="#kainu-planai">Kainų planai</a></li>
                                <li><a href="#vertimai">Vertimai</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="group__tab" id="saliu-nustatymai">
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table">
                            <thead>
                                <tr>
                                    <th>Platformos kalbos</th>
                                    <th>Šalių aktyvacija</th>
                                    <th>www...</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </section>
            </section>
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>