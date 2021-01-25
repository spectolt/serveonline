<!doctype html>

<html lang="lt" class="force-show-scrollbars">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Serve.lt</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Sen:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css?v=1.0">

</head>

<body>
    <div id="page">
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
        <header class="site-header site-header--show">
            <button class="site-header__hamburger"></button>
            <img src="../img/logo.svg" class="site-header__logo" alt="" />
            <ul class="site-header__menu site-header__menu--items">
                <li class="site-header__item paragraph <?php if ($thisCat == "services") echo "site-header__item--active"; ?>"><a href="#">Specialistai</a></li>
                <li class="site-header__item paragraph"><a href="#">Įstaigos</a></li>
                <?php if ($thisCat == "controls") { ?>
                <li class="site-header__item paragraph <?php if ($thisCat == "controls") echo "site-header__item--active"; ?>"><a href="#">Valdymas</a></li>
                <li class="site-header__item paragraph"><a href="#">Mano Serve</a></li>

                <?php } ?>
                <li class="site-header__item paragraph"><a href="#"><?php if ($thisCat == "controls") echo "Atsijungti"; else echo "Prisijungti" ?></a></li>
            </ul>
            <ul class="site-header__menu site-header__menu--main">

                <li class="site-header__item site-header__item--search"><a href="#"></a></li>
            </ul>
        </header>