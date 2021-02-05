<?php require_once('head.php'); ?>

<body>
    <div id="page">
        <?php if ($thisCat != "company" && $thisCat != "controls") { ?>
            <div class="search-container">
                <form class="search-panel">
                    <input type="text" name="search" placeholder="Specialistas, įstaiga, įmonių grupė..." />
                </form>
                <div class="search-product">
                    <div class="product__search product__search--header input-wrapper">
                        <input type="text" id="search-product" placeholder="Paslauga. Įveskite kelis simbolius paieškai" />
                        <button type="button" class="search-container__submit"><span>Ieškoti</span></button>
                    </div>
                </div>
                <button type="button" class="search-container__close"></button>
            </div>
        <?php } else if ($thisCat == "controls") { ?>
            <div class="search-container">
                <form class="search-panel search-panel--wide">
                    <input type="text" name="search" placeholder="Paieška" />
                </form>
                <button type="button" class="search-container__submit"><span>Ieškoti</span></button>
                <button type="button" class="search-container__close"></button>
            </div>
        <?php } ?>
        <header class="site-header site-header--show">
            <?php if ($thisCat != "company") { ?>
                <button class="site-header__hamburger"></button>
            <?php } ?>
            <img src="../img/logo.svg" class="site-header__logo" alt="" />
            <?php if ($thisCat != "company") { ?>
                <ul class="site-header__menu site-header__menu--items">
                    <li class="site-header__item paragraph <?php if ($thisCat == "services") echo "site-header__item--active"; ?>"><a href="#">Specialistai</a></li>
                    <li class="site-header__item paragraph"><a href="#">Įstaigos</a></li>
                    <?php if ($thisCat == "controls") { ?>
                        <li class="site-header__item paragraph <?php if ($thisCat == "controls") echo "site-header__item--active"; ?>"><a href="#">Valdymas</a></li>
                        <li class="site-header__item paragraph"><a href="#">Mano Serve</a></li>
                    <?php } ?>
                    <li class="site-header__item paragraph"><a href="#"><?php if ($thisCat == "controls") echo "Atsijungti";
                                                                        else echo "Prisijungti" ?></a></li>
                </ul>
                <ul class="site-header__menu site-header__menu--main">
                    <li class="site-header__item site-header__item--search"><a href="#"></a></li>
                </ul>
            <?php } else if($thisCat == "company") { ?>
                <ul class="site-header__menu site-header__menu--main">
                    <li class="site-header__item site-header__item--back"><a href="#">Atgal</a></li>
                </ul>
            <?php } ?>
        </header>