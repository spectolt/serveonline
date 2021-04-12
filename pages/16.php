<?php $thisCat = "controls";
$thisPage = "company-profiles"; ?>

<?php require_once ('header.php'); ?>

<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls profiles">
                <div class="controls__header">
                    <h1 class="title">Specialistų profiliai</h1>
                    <div class="controls__top">
                        <div class="controls__group">
                            <button class="controls__group-btn controls__group-btn--city darkblue small paragraph">Grupuoti miestus</button>
                            <button class="controls__group-btn controls__group-btn--profession darkblue small paragraph">Grupuoti profesijas</button>
                        </div>
                        <div class="controls__buttons-container">
                            <button class="controls__button controls__button--activate darkblue small transparent paragraph" disabled>Aktyvuoti</button>
                            <button class="controls__button controls__button--send darkblue small transparent paragraph" disabled>Siųsti SMS</button>
                            <button class="controls__button controls__button--print darkblue small transparent paragraph" disabled>Spausdinti</button>
                            <button class="controls__button controls__button--trash darkblue small transparent paragraph" disabled>Trinti</button>
                            <button class="controls__button controls__button--new darkblue small transparent paragraph">Nauja</button>
                        </div>
                    </div>
                </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <!-- <div class="controls__table-border"> -->
                        <table class="controls__table profiles__table profiles__table--specialists">
                            <thead>
                                <tr>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        <div class="checkbox"><input name="select_all" type="checkbox" id="select-all" />
                                            <label for="select-all"></label>
                                        </div>
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        A/N
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Registracijos data, laikas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Specialistas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Grupė
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Sritis
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Įmonė
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Profesija
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Miestas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Veiklos adresas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Tel. numeris
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        El. paštas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Amžius
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Stažas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Lytis
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Kalbos
                                    </th>
                                    <th colspan="2">
                                        Paskutinės valandos pasiūlymas
                                    </th>
                                    <th colspan="3">
                                        Laikai rezervavimui
                                    </th>
                                    <th rowspan="2">
                                    </th>
                                </tr>
                                <tr>
                                    <th>nuolaida</th>
                                    <th>likus</th>
                                    <th>I d. pusė</th>
                                    <th>II d. pusė</th>
                                    <th>likus</th>
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
                                        <td>Vardenis Pavardenis</td>
                                        <td>UAB „Grožio meistrų grupė“</td>
                                        <td>Grožio salonai</td>
                                        <td>UAB „Grožio meistrai 1“</td>
                                        <td>Plaukų stilistas</td>
                                        <td>Klaipėda</td>
                                        <td>Kipro Petrausko g. 12-108</td>
                                        <td>+370 000 00000</td>
                                        <td>vardasilgas.pavardeilgalabai@gmail.com</td>
                                        <td>28</td>
                                        <td>12</td>
                                        <td>Moteris</td>
                                        <td>3</td>
                                        <td>-10%</td>
                                        <td>2 val</td>
                                        <td>Visi</td>
                                        <td>2</td>
                                        <td>1 val.</td>
                                        <td class="left-arrow"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>9999999</td>
                                    <td>9999999</td>
                                    <td></td>
                                    <td>9999999</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- </div> -->
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