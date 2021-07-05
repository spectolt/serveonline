<?php $thisCat = "controls";
$thisPage = "employee-profiles"; ?>

<?php require_once ('header.php'); ?>

<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls employee-profiles">
                <div class="controls__header">
                    <h1 class="title">Darbuotojų profiliai</h1>
                    <div class="controls__top controls__top--profiles">
                        <div class="controls__group">
                        </div>
                        <div class="controls__buttons-container">
                            <button class="controls__button controls__button--new darkblue small transparent paragraph">Naujas</button> 
                            <button class="controls__button controls__button--trash darkblue small transparent paragraph">Trinti</button>
                            <button class="controls__button controls__button--activate darkblue small transparent paragraph">Aktyvuoti</button>
                            <button class="controls__button controls__button--print darkblue small transparent paragraph">Spausdinti</button>
                            <button class="controls__button controls__button--send darkblue small transparent paragraph">Siųsti SMS</button>
                        </div>
                    </div>
                </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table profiles__table profiles__table--specialists">
                            <thead>
                                <tr>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Įdarbinimo<br>data
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Išdarbinimo<br>data
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Darbuotojas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Tel. numeris
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        El. paštas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Būsena<br>(A/N)
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($y = 0; $y < 14; $y++) { ?>
                                    <tr tabindex="0">
                                        <td>
                                            <div class="checkbox"><input name="select_all" type="checkbox" id="select_<?php echo $y ?>" />
                                                <label for="select_<?php echo $y ?>"></label>
                                            </div>
                                        </td>
                                        <td>2020 05 01</td>
                                        <td>2020 05 01</td>
                                        <td>Vardenis Pavardenis</td>
                                        <td>+370 000 00000</td>
                                        <td>vardasilgas.pavardeilgalabai@gmail.com</td>
                                        <td>A</td>
                                        <td class="left-arrow"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>999999</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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