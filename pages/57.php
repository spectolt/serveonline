<?php $thisPage = "services"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('fec994', 'cce2ff', 'fed9c9', 'ffefd8', 'e2c4ae', 'c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls services">
                <h1 class="title">Paslaugos</h1>
                <div class="controls__top">
                    <ul class="controls__languages">
                        <li class="paragraph active"><a href="#">LT</a></li>
                        <li class="paragraph"><a href="#">EN</a></li>
                        <li class="paragraph"><a href="#">RU</a></li>
                    </ul>
                    <button class="controls__restore orange transparent small paragraph">Atstatyti pakeitimus</button>
                    <button class="controls__save orange small paragraph">Saugoti pakeitimus</button>
                </div>
                <div class="controls__table-container">
                    <table class="controls__table services__table">
                        <thead>
                            <tr>
                                <th>Paslaugų grupė</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Plaukų priežiūra</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Rankų priežiūra</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Pėdų priežiūra</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="controls__table services__table">
                        <thead>
                            <tr>
                                <th>Pogrupis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Kirpimai moterims</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Kirpimai vyrams</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Šukavimai moterims</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="controls__table services__table">
                        <thead>
                            <tr>
                                <th>Paslaugos pavadinimas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Visų plaukų dažymas sruogelėmis</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Visų plaukų dažymas sruogelėmis</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Visų plaukų dažymas sruogelėmis</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="controls__table services__table">
                        <thead>
                            <tr>
                                <th>Pasalugos detalizavimas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Plaukų priežiūra</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Rankų priežiūra</p>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <p class="controls__item controls__item--title">Pėdų priežiūra</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>