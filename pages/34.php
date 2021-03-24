<?php $thisCat = "controls";
$thisPage = "services"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls services">
            <div class="controls__header">
                <h1 class="title">Paslaugos</h1>
                <div class="services__areas-list">
                    <?php for ($y = 0; $y < 6; $y++) { ?>
                        <div class="services__area-div <?php if ($y == 2) echo "active" ?>">
                            <div class="services__area-img" style="background-color: <?php echo "$colors[$y]" ?>">
                                <img src=<?php echo "$icons[$y]" ?>>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="controls__top controls__top--services">
                    <button class="controls__print darkblue transparent small paragraph">Spausdinti</button>
                    <!-- <div class="controls__buttons-cancel-save"> -->
                        <button class="controls__restore orange transparent small paragraph">Atstatyti</button>
                        <button class="controls__save orange small paragraph">Saugoti</button>
                    <!-- </div> -->
                </div>
            </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table services__table">
                            <thead>
                                <tr>
                                    <th>Paslaugų grupė</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="fixed-row">
                                    <td colspan="1" class="controls__buttons">
                                        <button class="controls__add"></button>
                                        <button class="controls__trash" disabled></button>
                                        <button class="controls__edit" disabled></button>
                                        <button class="controls__switch"></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Plaukų priežiūra</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Rankų priežiūra</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Pėdų priežiūra</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Veido priežiūra</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Kūno priežiūra</p>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>5</td>
                                </tr>
                            </tfoot>
                        </table>
                        <!--
                    -->
                        <table class="controls__table services__table">
                            <thead>
                                <tr>
                                    <th>Pogrupis</th>
                                </tr>
                            </thead>
                            <tbody class="hidden">
                                <tr class="fixed-row">
                                    <td colspan="1" class="controls__buttons">
                                        <button class="controls__add"></button>
                                        <button class="controls__trash"></button>
                                        <button class="controls__edit"></button>
                                        <button class="controls__switch"></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="hidden">
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Kirpimai moterims</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Kirpimai vyrams</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Šukavimai moterims</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Šukavimai vyrams</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Plaukų dažymai</p>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <p class="controls__item controls__item--title">Plaukų gydymai</p>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="hidden">
                                <tr>
                                    <td>5</td>
                                </tr>
                            </tfoot>
                        </table>
                        <!--
                    -->
                        <table class="controls__table services__table services__table--service-title">
                            <thead>
                                <tr>
                                    <th class="top-arrow bottom-arrow">Paslaugos pavadinimas <span>Varnelė - galima rezervuoti online</span></th>
                                </tr>
                            </thead>
                            <tbody class="hidden">
                                <tr class="fixed-row">
                                    <td colspan="1" class="controls__buttons">
                                        <button class="controls__add"></button>
                                        <button class="controls__trash"></button>
                                        <button class="controls__edit"></button>
                                        <button class="controls__switch"></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="hidden">
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <tr class="controls__area areas__area">
                                        <td>
                                            <div class="checkbox controls__item controls__item--title controls__item--service-title">
                                                <p>Visų plaukų dažymas sruogelėmis</p>
                                                <input name="product" type="checkbox" id="product_1" checked />
                                                <label for="product_1"></label>
                                            </div>
                                            <div class="controls__item-content">
                                                Aromatherapy Associates eterinių aliejų masažas, tai
                                                specializuotas masažas, sudarytas iš Rytų ir Vakarų tradicijų,
                                                dėmesį skiriant nugarai, galvai, kaklui, pečiams ir pėdoms,
                                                praturtintas grynų eterinių aliejų kvapais ir naudingosiomis
                                                savybėmis. Papildomai švediškos ir nervų bei raumenų masažo
                                                technikos sureguliuoja sveiką cirkuliaciją ir nuramina raumenų ir
                                                sąnarių maudimą bei skausmą po treniruočių, o drenažo judesiai
                                                skatina veiksmingą jų panaikinimą.

                                                Aromatherapy Associates viso kūno masažas yra 30-ties masažo
                                                ekspertų darbas, kurie ištobulino masažą, kad šis patiktų
                                                šiuolaikiniams klientams. Masažas yra giluminis – jo metu
                                                dėmesys yra skiriamas skirtingiems masažų lygiams, įtraukiant
                                                švelnius prisilietimus ir spaudimus. Tai bene vienintelis masažas,
                                                kuris malšina visus streso simptomus.
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr class="controls__area">
                                    <td>
                                        <div class="checkbox controls__item controls__item--title controls__item--service-title">
                                            <input type="text" name="product-title" placeholder="Paslaugos pavadinimas">
                                            <input name="product" type="checkbox" id="product_input" checked />
                                            <label for="product_input"></label>
                                        </div>
                                        <div class="controls__item-content">
                                            <textarea type="text" name="product-description" placeholder="Paslaugos aprašymas" rows="1"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="hidden">
                                <tr>
                                    <td>5</td>
                                </tr>
                            </tfoot>
                        </table>
                        <!--
                    -->
                        <table class="controls__table services__table services__table--service-detail">
                            <thead>
                                <tr>
                                    <th class="top-arrow bottom-arrow">Paslaugos detalizavimas <span>Varnelė - galima rezervuoti online</span></th>
                                </tr>
                            </thead>
                            <tbody class="hidden">
                                <tr class="fixed-row">
                                    <td colspan="1" class="controls__buttons">
                                        <button class="controls__add"></button>
                                        <button class="controls__trash"></button>
                                        <button class="controls__edit"></button>
                                        <button class="controls__switch"></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="hidden">
                                <tr class="controls__area areas__area">
                                    <td>
                                        <div class="checkbox controls__item controls__item--title">
                                            <p>Trumpi plaukai</p>
                                            <input name="distance" type="checkbox" id="detail_1" checked />
                                            <label for="detail_1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <div class="checkbox controls__item controls__item--title">
                                            <p>Vidutinio ilgio plaukai</p>
                                            <input name="distance" type="checkbox" id="detail_2" checked />
                                            <label for="detail_2"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="controls__area areas__area">
                                    <td>
                                        <div class="checkbox controls__item controls__item--title">
                                            <p>Ilgi plaukai</p>
                                            <input name="distance" type="checkbox" id="detail_3" checked />
                                            <label for="detail_3"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="hidden">
                                <tr>
                                    <td>5</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>