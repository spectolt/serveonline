<?php $thisCat = "controls";
$thisPage = "service-profiles"; ?>

<?php require_once ('header.php'); ?>

<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls profiles">
                <div class="controls__header controls__header--service">
                    <h1 class="title">Paslaugų gavėjų profiliai</h1>
                    <div class="controls__top controls__top--profiles">
                        <div class="controls__group">
                            <button class="controls__group-btn controls__group-btn--city darkblue small paragraph">Grupuoti miestus</button>
                        </div>
                        <div class="controls__buttons-container">
                            <button class="controls__button controls__button--activate darkblue small transparent paragraph" disabled>Aktyvuoti</button>
                            <button class="controls__button controls__button--send darkblue small transparent paragraph" disabled>Siųsti SMS</button>
                            <button class="controls__button controls__button--print darkblue small transparent paragraph" disabled>Spausdinti</button>
                            <button class="controls__button controls__button--trash darkblue small transparent paragraph" disabled>Trinti</button>
                        </div>
                    </div>
                </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table profiles__table profiles__table--service">
                            <thead>
                                <tr>
                                    <th class="bottom-arrow top-arrow">
                                        <div class="checkbox"><input name="select_all" type="checkbox" id="select-all" />
                                            <label for="select-all"></label>
                                        </div>
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        A/N
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Registracijos data, laikas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Miestas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Paslaugų gavėjas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Tel. numeris
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        El. paštas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Būsimų užsakymų
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Praeities užsakymų
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Krepšelyje užsakymų
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Rekomendacijos
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Administratorius
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Specialistas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Darbuotojas
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($y = 0; $y < 15; $y++) { ?>
                                    <tr>
                                        <td>
                                            <div class="checkbox"><input name="select_all" type="checkbox" id="select_<?php echo $y ?>" />
                                                <label for="select_<?php echo $y ?>"></label>
                                            </div>
                                        </td>
                                        <td><b>A</b></td>
                                        <td><span>2020-05-01</span><br/><span>12:35</span></td>
                                        <td>Vilnius</td>
                                        <td>Vardenis pavardenis</td>
                                        <td>+370 688 12345</td>
                                        <td>vardasilgas.pavardeilgalabai@gmail.com</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td class="tick-arrow"></td>
                                        <td class="tick-arrow"></td>
                                        <td class="tick-arrow"></td>
                                        <td class="left-arrow"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>7</td>
                                    <td></td>
                                    <td></td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td></td>
                                </tr>
                            </tfoot>
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