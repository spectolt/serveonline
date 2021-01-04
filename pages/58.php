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
    <ul>
        <li class="paragraph"><a href="#">LT</a></li>
        <li class="paragraph"><a href="#">EN</a></li>
        <li class="paragraph"><a href="#">RU</a></li>
    </ul>
    <table class="areas__table">
        <thead>
            <tr>
                <th>Paslaugų sritis</th>
                <th>Spalva #</th>
                <th>Paveikslėlis .svg</th>
                <th>Meniu pavadinimai</th>
            </tr>
        </thead>
        <tr>
            <td>
                <button>1</button>
                <button>2</button>
                <button>3</button>
            </td>
        </tr>
        <?php for($y=0;$y<6;$y++) { ?>
        <tr>
            <td>
            <p class="areas__item"><?php echo $areas[$y] ?></p>
            </td>
            <td>
            <p class="areas__item areas__color"><?php echo $colors[$y] ?></p>
            </td>
            <td>
                <img class="areas__item areas__item--image" src="<?php echo $icons[$y] ?>">
            </td>
        </tr>
        <?php } ?>
        <tr>
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
    </table>
    </section>
    <?php require_once('product-sidebar.php'); ?>
    <?php require_once('footer-menu.php'); ?>
</div>
</main>
<?php require_once('footer.php'); ?>