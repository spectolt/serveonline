<?php $thisCat = "controls";
$thisPage = "messages-settings"; ?>

<?php require_once('header.php'); ?>

<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls messages--settings">
                <div class="controls__header">
                    <h1 class="title">Žinučių nustatymai</h1>
                    <div class="controls__top">
                        <!-- <ul class="languages">
                            <li class="paragraph active"><a href="#">LT</a></li>
                            <li class="paragraph"><a href="#">EN</a></li>
                            <li class="paragraph"><a href="#">RU</a></li>
                        </ul> -->
                        <button class="controls__new darkblue transparent small paragraph">Nauja SMS</button>
                        <!-- <button class="controls__new darkblue transparent small paragraph">Nauja notification</button> -->
                    </div>
                </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table messages__table">
                            <thead>
                                <tr>
                                    <th class="top-arrow bottom-arrow">Žinutės tipas</th>
                                    <th class="top-arrow bottom-arrow">Žinutės tema</th>
                                    <th class="top-arrow bottom-arrow">Gavėjas</th>
                                    <th class="top-arrow bottom-arrow">Kalba</th>
                                    <th>Žinutės tekstas</th>
                                    <th>Simbolių skaičius</th>
                                    <th>ID</th>
                                    <th class="top-arrow bottom-arrow">Sukūrimo data</th>
                                    <th class="top-arrow bottom-arrow">Sukūrė</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($y = 0; $y < 3; $y++) { ?>
                                    <tr>
                                        <td>Automatinė notification</td>
                                        <td>Patvirtinimas</td>
                                        <td>Įmonės administratorius</td>
                                        <td>Lietuvių</td>
                                        <td class="messages__text">
                                            <p>Jūsų rezervacija patvirtinta: #data# #valanda#, #specialistas#, #adresas#, #tel. nr.#. Pasikeitus planams, galite ją atšaukti savo profilio puslapyje “Registracijos”. Ar norite išsaugoti ją savo kalendoriuje?</p>
                                        </td>
                                        <td>340</td>
                                        <td>12345678</td>
                                        <td>2020 05 01</td>
                                        <td>Vardas Pavardė</td>
                                        <td>
                                            <button class="controls__edit"></button>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Automatinė notification</td>
                                        <td>Patvirtinimas</td>
                                        <td>Įmonės administratorius</td>
                                        <td>Anglų</td>
                                        <td class="messages__text">
                                            <p>Jūsų rezervacija patvirtinta: #data# #valanda#, #specialistas#, #adresas#, #tel. nr.#. Pasikeitus planams, galite ją atšaukti savo profilio puslapyje “Registracijos”. Ar norite išsaugoti ją savo kalendoriuje?</p>
                                        </td>
                                        <td>340</td>
                                        <td>12345678</td>
                                        <td>2020 05 01</td>
                                        <td>Vardas Pavardė</td>
                                        <td>
                                            <button class="controls__edit"></button>
                                        </td>
                                        <td><button class="controls__trash"></button></td>
                                    </tr>
                                    <tr>
                                        <td>Automatinė notification</td>
                                        <td>Patvirtinimas</td>
                                        <td>Įmonės administratorius</td>
                                        <td>Rusų</td>
                                        <td class="messages__text">
                                            <p>Jūsų rezervacija patvirtinta: #data# #valanda#, #specialistas#, #adresas#, #tel. nr.#. Pasikeitus planams, galite ją atšaukti savo profilio puslapyje “Registracijos”. Ar norite išsaugoti ją savo kalendoriuje?</p>
                                        </td>
                                        <td>340</td>
                                        <td>12345678</td>
                                        <td>2020 05 01</td>
                                        <td>Vardas Pavardė</td>
                                        <td>
                                            <button class="controls__edit"></button>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination">
                    <div class="pagination__list">
                        <a href="#" class="pagination__button pagination__button--first"></a>
                        <a href="#" class="pagination__button pagination__button--prev"></a>

                        <a href="#" class="pagination__button">1</a>
                        <a href="#" class="pagination__button">2</a>
                        <a href="#" class="pagination__button pagination__button--active">3</a>
                        <a href="#" class="pagination__button">4</a>
                        <a href="#" class="pagination__button">...</a>
                        <a href="#" class="pagination__button">10</a>
                        <a href="#" class="pagination__button">12</a>

                        <a href="#" class="pagination__button pagination__button--next"></a>
                        <a href="#" class="pagination__button pagination__button--last"></a>
                    </div>
                    <div class="pagination__info">
                        Rodomos eilutės nuo <b>1 - 22</b> iš <b>9678</b>
                    </div>
                    <div class="pagination__info">
                        Viso puslapių <b>999</b>
                    </div>
                </div>
            </section>
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>