<?php $thisCat = "controls";
$thisPage = "reservations"; ?>

<?php require_once('header.php'); ?>

<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls reservations">
                <div class="controls__header">
                    <h1 class="title">Rezervacijos</h1>
                    <div class="controls__top controls__top--profiles">
                        <div class="controls__group">
                            <button class="controls__group-btn controls__group-btn--recipient darkblue small paragraph">Grupuoti pagal psl. gavėjus</button>
                            <button class="controls__group-btn controls__group-btn--recipient darkblue small paragraph">Grupuoti pagal specialistus</button>
                        </div>
                        <div class="controls__buttons-container">
                            <button class="controls__button controls__button--print darkblue small transparent paragraph">Spausdinti</button>
                            <button class="controls__button controls__button--send darkblue small transparent paragraph">Siųsti SMS</button>
                        </div>
                    </div>
                </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <!-- <div class="controls__table-border"> -->
                        <table class="controls__table profiles__table">
                            <thead>
                                <tr>
                                    <th>
                                        Registracijos data,
                                        laikas
                                    </th>
                                    <th>
                                        Užsakymo
                                        <br>
                                        būsena
                                    </th>
                                    <th>
                                        Užsakymo
                                        <br>
                                        Nr.
                                    </th>
                                    <th>
                                        Paslaugų gavėjas
                                        <br>
                                        (6879)
                                    </th>
                                   
                                    <th>
                                        Specialistas
                                        <br>
                                        (19897)
                                    </th>
                                    <th>
                                        Įmonių grupė
                                        <br>
                                        (19897)
                                    </th>
                                    <th>
                                        Įmonė / Filialas
                                        <br>
                                        (19897)
                                    </th>
                                    <th>
                                        Miestas
                                        <br>
                                        (67)
                                    </th>
                                    <th>
                                        Paslauga
                                        <br>
                                        (9897)
                                    </th>
                                    
                                    <th>
                                        Suma
                                        <br>
                                        (99 000 000,00)
                                    </th>
                                    <th>
                                        G/N
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($y = 0; $y < 15; $y++) { ?>
                                    <tr>
                                        <td>2020 02 20 12:20</td>
                                        <td>Patvirtintas</td>
                                        <td>234567</td>
                                        <td>Vardas<br>Pavardė</td>
                                        <td>Vardas<br>Pavardė</td>
                                        <td>UAB "Brožio meistrų grupė"</td>
                                        <td>Grožio salonas 1</td>
                                        <td>Vilnius</td>
                                        <td>Modelinis kirpimas, plovimas, fenavimas, dažymas sruogelėmis, atspalvio suteikimas</td>
                                        <td>123.45</td>
                                        <td>G</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <!-- <tfoot>
                                <tr>
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
                            </tfoot> -->
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