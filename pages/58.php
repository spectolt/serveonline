<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('fec994', 'cce2ff', 'fed9c9', 'ffefd8', 'e2c4ae', 'c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <div class="page-content page-content--flexible">
        <section class="areas">
            <h1 class="title">Sritys</h1>
            <ul class="areas__languages">
                <li class="paragraph active"><a href="#">LT</a></li>
                <li class="paragraph"><a href="#">EN</a></li>
                <li class="paragraph"><a href="#">RU</a></li>
            </ul>
            <div class="areas__table-container">
                <table class="areas__table">
                    <thead>
                        <tr>
                            <th>Paslaugų sritis</th>
                            <th>Spalva #</th>
                            <th>Paveikslėlis .svg</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="3">
                            <button class="areas__add"></button>
                            <button class="areas__trash"></button>
                            <button class="areas__edit"></button>
                        </td>
                    </tr>
                    <?php for ($y = 0; $y < 6; $y++) { ?>
                        <tr class="areas__area">
                            <td>
                                <p class="areas__item areas__item--title"><?php echo $areas[$y] ?></p>
                            </td>
                            <td>
                                <p class="areas__item areas__color"><?php echo $colors[$y] ?></p>
                            </td>
                            <td>
                                <img class="areas__item areas__item--image" src="<?php echo $icons[$y] ?>">
                            </td>
                        </tr>
                    <?php } ?>
                    <tr class="areas__inputs">
                        <td>
                            <input placeholder="Pavadinimas" class="areas__item">
                        </td>
                        <td>
                            <input placeholder="Spalva" class="areas__item color-input">
                        </td>
                        <td>
                            <label for="upload-icon" class="areas__item icon-label">Paveikslėlis</label>
                            <input id="upload-icon" class="custom-file-input areas-item" type="file" id="img" name="img" accept=".svg" onchange="readURL(this);" hidden>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="areas__table areas__table--menu">
                    <thead>
                        <tr>
                            <th>Meniu pavadinimai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><p class="areas__item">Gydytojai</p></td>
                        </tr>
                        <tr>
                            <td><p class="areas__item">Klinikos</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php require_once('product-sidebar.php'); ?>
        <?php require_once('footer-menu.php'); ?>
    </div>
</main>
<?php require_once('footer.php'); ?>