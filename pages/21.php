<?php $thisCat = "company"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiAutocomplete">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <h2>Pavadinimas</h2>
                        </div>
                        <ul class="company__nav">
                            <li class="active"><a href="#imones">Įmonės</a></li>
                            <li><a href="#imoniu-profiliai">Įmonių profiliai</a></li>
                            <li><a href="#prisijungimas">Administratoriai ir teisės</a></li>
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
                    <section class="company__tab hidden" id="nuotraukos">
                        <div class="company__info company__photos">
                            <div class="company__photos-button-container">
                                <button class="button orange small upload-image">Įkelti nuotraukas <span>(iki 24)<span></button>
                                <button class="button orange transparent small archive-image">Įkelti iš archyvo</button>
                            </div>
                            <button class="orange transparent small switch-image">Pakeisti nuotraukos vietą</button>
                            <ul class="sortable">
                                <?php for ($i = 0; $i < 24; $i++) { ?>
                                    <li class=<?php if ($i == 0) echo "hide-after" ?>>
                                        <?php if ($i == 0) { ?>
                                            <div class="company__photo">
                                                <img src="../img/Layer-2.png">
                                                <button class="darkblue small photo-rotate"></button>
                                                <button class="darkblue small photo-remove"></button>
                                            </div>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="company__button-container">
                            <button class="orange transparent">Atšaukti pakeitimus</button>
                            <button class="orange">Saugoti pakeitimus</button>
                        </div>
                    </section>
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