<?php $thisCat = "controls";
$thisPage = "company-profiles"; ?>

<?php require_once('header.php'); ?>

<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls profiles">
                <div class="controls__header">
                    <h1 class="title">Įmonių profiliai</h1>
                    <div class="controls__top">
                        <div class="controls__group">
                            <button class="controls__group-btn controls__group-btn--city darkblue small paragraph">Grupuoti miestus</button>
                            <button class="controls__group-btn controls__group-btn--company darkblue small paragraph">Grupuoti įmones</button>
                        </div>
                        <div class="controls__buttons-container">
                            <button class="controls__button controls__button--activate darkblue small transparent paragraph">Aktyvuoti</button>
                            <button class="controls__button controls__button--send darkblue small transparent paragraph" disabled>Siųsti SMS</button>
                            <button class="controls__button controls__button--print darkblue small transparent paragraph">Spausdinti</button>
                            <button class="controls__button controls__button--trash darkblue small transparent paragraph" disabled>Trinti</button>
                            <button class="controls__button controls__button--new darkblue small transparent paragraph">Nauja</button>
                        </div>
                    </div>
                </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table profiles__table">
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
                                        Grupė
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Sritis
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Įmonė
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Specialistų kiekis
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Miestas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Veiklos adresas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Tel. numeris
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        El. paštas
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Licencijos numeris
                                    </th>
                                    <th class="bottom-arrow top-arrow">
                                        Licencijos pavadinimas
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
                                        <td><span>2020-05-01</span> <span>12:35</span></td>
                                        <td>GRUPĖ 1</td>
                                        <td>Grožio salonai ir kirpyklos</td>
                                        <td>Grožio meistrai</td>
                                        <td>24</td>
                                        <td>Klaipėda</td>
                                        <td>Kipro Petrausko g. 12-108</td>
                                        <td>+370 688 12345</td>
                                        <td>vardasilgas.pavardeilgalabai@gmail.com</td>
                                        <td>342352352352asdasdasdasfasf</td>
                                        <td>Jos kaprizų kaprizai, UAB</td>
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
                                    <td>9999999</td>
                                    <td>9999999</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>9999999</td>
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