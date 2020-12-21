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
                <th>Spalva</th>
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
        <tr>
            <td>
                Klinikos ir estetinė medicina
            </td>
            <td>
                fec994
            </td>
            <td>
                <img class="areas__image" src="../img/icons/clinic.svg">
            </td>
        </tr>
        <tr>
            <td>
                Klinikos ir estetinė medicina
            </td>
            <td>
                fec994
            </td>
            <td>
                <img class="areas__image" src="../img/icons/clinic.svg">
            </td>
        </tr>
        <tr>
            <td>
                Klinikos ir estetinė medicina
            </td>
            <td>
                fec994
            </td>
            <td>
                <img class="areas__image" src="../img/icons/clinic.svg">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="Pavadinimas">
            </td>
            <td>
                <input placeholder="Pasirinkite spalvą">
            </td>
            <td>
            <input id="upload-icon" class="custom-file-input" type="file" id="img" name="img" accept=".svg" onchange="readURL(this);">
            </td>
        </tr>
    </table>
    </section>
    <?php require_once('product-sidebar.php'); ?>
    <?php require_once('footer-menu.php'); ?>
</div>
</main>
<?php require_once('footer.php'); ?>