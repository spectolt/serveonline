<?php $thisCat = "company";
$thisPage = "specialist-profile" ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiAutocomplete">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company specialist-profile">
                <section class="group__tab company__container">
                    <div class="company__inputs-container">
                        <div class="input-wrapper">
                            <input type="text">
                        </div>
                    </div>
                    <div class="company__button-container">
                        <button class="orange transparent">Atšaukti</button>
                        <button class="orange">Saugoti</button>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>