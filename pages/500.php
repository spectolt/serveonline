<?php $thisCat="error"; $thisPage="error-500" ?>

<?php require_once('header.php'); ?>

<main class="site-main site-main--aside">
    <div class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="err err--500">
                <div class="err__content">
                    <h1>500</h1>
                    <h2>Ups, įvyko klaida. Ji užregistruota ir netrukus bus pašalinta.</h2>
                    <a href="#" class="button">Grįžti</a>
                </div>
                <div class="err__image">
                    <img src="../img/illustrations/serve-superman.svg" alt="" />
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </div>
</main>

<?php require_once('footer.php'); ?>