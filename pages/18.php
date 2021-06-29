<?php $thisCat = "controls";
$thisPage = "report"; ?>

<?php require_once ('header.php'); ?>

<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls report">
                <div class="controls__header">
                    <h1 class="title">Ataskaita specialistui</h1>
                    <div class="controls__top controls__top--report">
                        <div class="controls__buttons-container">
                            <button class="controls__button controls__button--pdf darkblue small transparent paragraph">Siųsti PDF ataskaitą el.p.</button>
                            <button class="controls__button controls__button--print darkblue small transparent paragraph">Spausdinti</button>
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
                                        Specialistas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Sritis
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Įmonių grupė
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
                                    <th colspan="2">
                                        Grįžusių klientų registracijų
                                    </th>
                                    <th colspan="2">
                                        Naujų klientų registracijų
                                    </th>
                                    <th colspan="2">
                                        Bendrai klientų registracijų
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Profilio<br>peržiūrų
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Nepavyko<br>registruotis
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Pasinaudojo<br>rekomendacijom
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Atšaukė<br>registraciją
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Pažymėjo<br>Mano
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Registracijos<br>dažnumas
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Pakartotinai<br>registravosi
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Vidutinė<br>kaina
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Moterų
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Vyrų
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Sugrįžę<br>klientai
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Vienkartinai<br>užsiregistravo
                                    </th>
                                    <th class="bottom-arrow top-arrow" rowspan="2">
                                        Unikalių<br>klientų
                                    </th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th class="bottom-arrow top-arrow">vnt.</th>
                                    <th class="bottom-arrow top-arrow">€</th>
                                    <th class="bottom-arrow top-arrow">vnt.</th>
                                    <th class="bottom-arrow top-arrow">€</th>
                                    <th class="bottom-arrow top-arrow">vnt.</th>
                                    <th class="bottom-arrow top-arrow">€</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($y = 0; $y < 22; $y++) { ?>
                                    <tr>
                                        <td>
                                            <div class="checkbox"><input name="select_all" type="checkbox" id="select_<?php echo $y ?>" />
                                                <label for="select_<?php echo $y ?>"></label>
                                            </div>
                                        </td>
                                        <td>Vardenis Pavardenis</td>
                                        <td>Grožio salonai</td>
                                        <td>FIGARO</td>
                                        <td>UAB „Grožio meistrai 1“</td>
                                        <td>Plaukų stilistas</td>
                                        <td>Klaipėda</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td class="left-arrow"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td>9999924</td>
                                    <td></td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td></td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td></td>
                                    <td>9999924</td>
                                    <td></td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
                                    <td>9999924</td>
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