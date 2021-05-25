<?php $thisCat = "company"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--company hasUiDatepicker">
        <div class="page-content__wrapper">
            <section class="statistics">
                <div class="statistics__header">
                    <div class="statistics__top">
                        <div class="statistics__photo" style="background-image: url(../img/1.jpg)">
                        </div>
                        <div class="statistics__name">
                            <h2>Vardas Pavarde</h2>
                            <h3>Plauku stilistas</h3>
                            <p>UAB grozio salonas</p>
                            <p>Vilnius, Naugarduko g. 24-1</p>
                        </div>
                    </div>
                    <div class="statistics__date">
                        <p class="statistics__day statistics__day--from">Nuo <input class="statistics__datepicker"></p>
                        <p class="statistics__day statistics__day--to">Nuo <input class="statistics__datepicker"></p>
                    </div>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>