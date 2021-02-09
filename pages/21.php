<?php $thisCat = "company"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <h2>Pavadinimas</h2>
                        </div>
                        <ul class="company__nav">
                            <li class="active"><a href="#bendra-informacija">Bendra informacija</a></li>
                            <li><a href="#imoniu-profiliai">Įmonių profiliai</a></li>
                            <li><a href="#prisijungimas">Prisijungimas</a></li>
                        </ul>
                    </div>
                </div>
                <?php require_once("company/main-tab.php") ?>
                <section class="group__tab hidden" id="imoniu-profiliai">
                    <div class="company__selection">
                        <ul>
                            <?php for ($y = 1; $y <= 5; $y++) { ?>
                                <li>
                                    <div class="radio">
                                        <input name="company" type="radio" id="company_<?php echo "$y" ?>" class="" <?php if ($y == 1) { ?> checked <?php } ?> />
                                        <label for="company_<?php echo "$y" ?>">UAB Grožio salonas <?php echo "$y" ?></label>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="company__header company__header--company">
                        <h2>Grožio salonas 1</h2>
                        <ul class="company__nav">
                            <li class="active"><a href="#imones-bendra-informacija">Bendra informacija</a></li>
                            <li><a href="#nuotraukos">Nuotraukos</a></li>
                            <li><a href="#produktai">Produktai</a></li>
                            <li><a href="#specialistai">Specialistai</a></li>
                            <li><a href="#paslaugos">Paslaugos</a></li>
                            <li><a href="#mokejimo-planai">Mokėjimo planai</a></li>
                        </ul>
                    </div>
                    <?php require_once("company/company-info.php") ?>
                    <?php require_once("company/photos.php") ?>
                    <?php require_once("company/products.php") ?>
                    <?php require_once("company/specialists.php") ?>
                    <?php require_once("company/services.php") ?>
                    <?php require_once("company/payments.php") ?>
                </section>
                <?php require_once("company/login.php") ?>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>