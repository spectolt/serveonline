<?php $thisCat = "controls";
$thisPage = "areas"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('fec994', 'cce2ff', 'fed9c9', 'ffefd8', 'e2c4ae', 'c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasTable">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls areas">
            <div class="controls__header">
                <h1 class="title">Sritys</h1>
                <div class="controls__top">
                    <button class="controls__restore orange transparent small paragraph">Atstatyti</button>
                    <button class="controls__save orange small paragraph">Saugoti</button>
                </div>
            </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table areas__table areas__table--main">
                            <thead>
                                <tr>
                                    <th>Paslaugų sritis</th>
                                    <th>Spalva #</th>
                                    <th>svg</th>
                                    <th>URL</th>
                                    <th>Meniu pavadinimai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="fixed-row">
                                    <td colspan="4">
                                        <button class="controls__add"></button>
                                        <button class="controls__trash" disabled></button>
                                        <button class="controls__edit" disabled></button>
                                        <button class="controls__switch"></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="controls__table-body">
                                <?php for ($y = 0; $y < 6; $y++) { ?>
                                    <tr class="controls__area areas__area">
                                        <td>
                                            <p class="controls__item controls__item--title"><?php echo $areas[$y] ?></p>
                                        </td>
                                        <td>
                                            <p class="controls__item areas__color"><?php echo $colors[$y] ?></p>
                                        </td>
                                        <td>
                                            <div class="controls__item controls__item--image">
                                                <img src="<?php echo $icons[$y] ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"><?php echo $areas[$y] ?></p>
                                        </td>
                                        <td class="controls__menu-title">
                                            <p class="controls__item controls__item--menu">Specialistai</p>
                                        </td>
                                        <td class="controls__menu-title">
                                            <p class="controls__item controls__item--menu">Klinikos</p>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr class="areas__inputs">
                                    <td>
                                        <input class="controls__item">
                                    </td>
                                    <td>
                                        <input class="controls__item color-input">
                                    </td>
                                    <td>
                                        <label for="upload-icon" class="controls__item icon-label"></label>
                                        <input id="upload-icon" class="custom-file-input areas-item" type="file" id="img" name="img" accept=".svg" hidden>
                                    </td>
                                    <td>
                                        <input class="controls__item">
                                    </td>
                                    <td>
                                        <input class="controls__item">
                                    </td>
                                    <td>
                                        <input class="controls__item">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="controls__table areas__table areas__table--menu">
                            <thead>
                                <tr>
                                    <th>Profesijos</th>
                                </tr>
                            </thead>
                            <tbody class="controls__table-body hidden">
                                <tr class="fixed-row">
                                    <td colspan="1">
                                        <button class="controls__add"></button>
                                        <button class="controls__trash"></button>
                                        <button class="controls__edit"></button>
                                        <button class="controls__switch"></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="controls__table-body hidden">
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--profession">Ginekologas</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--profession">Urologas</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--profession">Dermatologas</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--profession">Venerologas</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--profession">Chirurgas</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--profession">Terapeutas</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>