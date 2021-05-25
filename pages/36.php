<?php $thisCat = "controls";
$thisPage = "general-controls"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasTable hasUiAutocomplete">
    <section class="page-content page-content--controls page-content--general">
        <div class="page-content__wrapper">
            <section class="controls general company">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <h2>Bendri nustatymai</h2>
                            <button class="darkblue">Publikuoti</button>
                        </div>
                        <div class="company__nav-container">
                            <ul class="company__nav company__nav--specialist">
                                <li class="active"><a href="#saliu-nustatymai">Šalių nustatymai</a></li>
                                <li><a href="#kainu-nustatymai">Pagrindinės funkcijos kainų planam</a></li>
                                <li><a href="#kainu-planai">Kainų planai</a></li>
                                <li><a href="#vertimai">Vertimai</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="group__tab" id="saliu-nustatymai">
                    <div class="controls__table-container-wrapper">
                        <div class="controls__table-container">
                            <table class="controls__table">
                                <thead>
                                    <tr>
                                        <th>Platformos kalbos</th>
                                        <th>Šalių aktyvacija</th>
                                        <th>www...</th>
                                    </tr>
                                </thead>
                                <tbody style="height: calc(410px);">
                                    <tr>
                                        <td>
                                            <button class="controls__add"></button>
                                            <button class="controls__trash"></button>
                                        </td>
                                        <td>
                                            <button class="controls__add"></button>
                                            <button class="controls__trash"></button>
                                        </td>
                                        <td>
                                            <button class="controls__add"></button>
                                            <button class="controls__trash"></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_1" type="checkbox">
                                                <label for="rights_0_1"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Lietuvių</p>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_2" type="checkbox">
                                                <label for="rights_0_2"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Lietuva</p>

                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">serveonline.lt</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_3" type="checkbox">
                                                <label for="rights_0_3"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Anglų</p>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_4" type="checkbox">
                                                <label for="rights_0_4"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Latvija</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">serve-online.lt</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_5" type="checkbox">
                                                <label for="rights_0_5"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Rusų</p>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_6" type="checkbox">
                                                <label for="rights_0_6"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Rusija</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">serve-online.eu</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_7" type="checkbox">
                                                <label for="rights_0_7"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Vokietija</p>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="checkbox">
                                                <input id="rights_0_8" type="checkbox">
                                                <label for="rights_0_8"></label>
                                            </div>
                                            <p class="controls__item controls__item--title">Kasakstanas</p>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <section class="group__tab hidden" id="kainu-nustatymai">
                    <div class="controls__table-container-wrapper">
                        <div class="controls__table-container">
                            <table class="controls__table">
                                <thead>
                                    <tr>
                                        <th>Pagrindinės funkcijos paslaugų gavėjui</th>
                                        <th>Pagrindinės funkcijos paslaugų teikėjui</th>
                                    </tr>
                                </thead>
                                <tbody style="height: calc(410px);">
                                    <tr>
                                        <td>
                                            <button class="controls__add"></button>
                                            <button class="controls__trash"></button>
                                            <button class="controls__edit"></button>
                                        </td>
                                        <td>
                                            <button class="controls__add"></button>
                                            <button class="controls__trash"></button>
                                            <button class="controls__edit"></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="controls__item controls__item--title">Priminimai apie rezervacijas ("Notifications").</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Fotosesija (objekto interjeras, darbuotojai - tik naujai prisijungusiems).</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="controls__item controls__item--title">Galimybė išsaugoti rezervaciją savo telefono kalendoriuje.</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Integracija su SERVE PROFESSIONALS sistema.</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="controls__item controls__item--title">Rezervacijų istorija.</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Pranešimai apie rezervacijas ("Notifications").</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Veiklos ataskaitos.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Paslaugų gavėjų administravimas verslui.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Paslaugų gavėjų administravimas specialistui.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">SERVE ONLINE registracijos knyga (Mobile WEB).</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Reitingai, atsiliepimų valdymas.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <section class="group__tab hidden" id="vertimai">
                    <div class="controls__table-container-wrapper">
                        <div class="controls__table-container">
                            <table class="controls__table">
                                <thead>
                                    <tr>
                                        <th>Lietuvių</th>
                                        <th>Anglų</th>
                                        <th>Rusų</th>
                                        <th>Latvių</th>
                                    </tr>
                                </thead>
                                <tbody style="height: calc(410px);">
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <button class="controls__edit"></button>
                                        </td>
                                        <td>
                                            <button class="controls__edit"></button>
                                        </td>
                                        <td>
                                            <button class="controls__edit"></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="controls__item controls__item--title">Klinikos ir estetinė medicina</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Clinics and aestetic medicine</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Клиники и эстетическая медицина</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title">Klīnikas un estētiskā medicīna</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="controls__item controls__item--title">Klinikos ir estetinė medicina</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="controls__item controls__item--title">Klinikos ir estetinė medicina</p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="controls__item controls__item--title">Klinikos ir estetinė medicina</p>
                                        </td>

                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                        <td>
                                            <p class="controls__item controls__item--title"></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </section>
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>