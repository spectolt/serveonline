<?php $thisCat = "controls";
$thisPage = "services"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasTable">
    <section class="page-content page-content--controls">
        <div class="page-content__wrapper">
            <section class="controls services">
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
                <div class="controls__top">
                    <ul class="controls__languages">
                        <li class="paragraph active"><a href="#">LT</a></li>
                        <li class="paragraph"><a href="#">EN</a></li>
                        <li class="paragraph"><a href="#">RU</a></li>
                    </ul>
                    <button class="controls__print darkblue transparent small paragraph">Spausdinti</button>
                    <button class="controls__restore orange transparent small paragraph">Atstatyti pakeitimus</button>
                    <button class="controls__save orange small paragraph">Saugoti pakeitimus</button>
                </div>
                <div class="controls__table-container">
                    <table class="controls__table services__table">
                        <thead>
                            <tr>
                                <th>Paslaugų grupė</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                </td>
                            </tr>
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
                        </tbody>
                    </table>
                    <table class="controls__table services__table">
                        <thead>
                            <tr>
                                <th>Pogrupis</th>
                            </tr>
                        </thead>
                        <tbody class="hidden">
                            <tr>
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                </td>
                            </tr>
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
                    </table>
                    <table class="controls__table services__table services__table--service-title">
                        <thead>
                            <tr>
                                <th>Paslaugos pavadinimas</th>
                            </tr>
                        </thead>
                        <tbody class="hidden">
                        <tr class="fixed-row">
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                    <h4>Jei paslauga neužsakoma,<br />nuimkite varnelę</h4>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="hidden">
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
                            <tr class="controls__area areas__area">
                                <td>
                                    <div class="checkbox controls__item controls__item--title controls__item--service-title">
                                        <p>Visų plaukų dažymas sruogelėmis</p>
                                        <input name="product" type="checkbox" id="product_2" checked />
                                        <label for="product_2"></label>
                                    </div>
                                    <div class="controls__item-content">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                    </div>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <div class="checkbox controls__item controls__item--title controls__item--service-title">
                                        <p>Visų plaukų dažymas sruogelėmis</p>
                                        <input name="product" type="checkbox" id="product_3" checked />
                                        <label for="product_3"></label>
                                    </div>
                                    <div class="controls__item-content">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                    </div>
                                </td>
                            </tr>
                            <tr class="controls__area areas__area">
                                <td>
                                    <div class="checkbox controls__item controls__item--title controls__item--service-title">
                                        <input type="text" name="product-title" placeholder="Paslaugos pavadinimas">
                                        <input name="product" type="checkbox" id="product_4" checked />
                                        <label for="product_4"></label>
                                    </div>
                                    <div class="controls__item-content">
                                    <textarea type="text" name="product-description" placeholder="Paslaugos aprašymas" rows="1"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="controls__table services__table">
                        <thead>
                            <tr>
                                <th>Pasalugos detalizavimas</th>
                            </tr>
                        </thead>
                        <tbody class="hidden">
                            <tr>
                                <td colspan="1" class="controls__buttons">
                                    <button class="controls__add"></button>
                                    <button class="controls__trash"></button>
                                    <button class="controls__edit"></button>
                                    <h4>Jei paslauga neužsakoma,<br />nuimkite varnelę</h4>
                                </td>
                            </tr>
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
                    </table>
                </div>
            </section>
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>