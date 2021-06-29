<?php $thisCat = "controls";
$thisPage = "messages-sent"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--controls page-content--messages">
        <div class="page-content__wrapper">
            <section class="controls messages-settings">
                <h1 class="title">Išsiųstos SMS</h1>
                <div class="controls__top">
                    <button class="controls__delete darkblue transparent small paragraph">Trinti</button>
                    <button class="controls__cancel darkblue transparent small paragraph">Atšaukti siuntimą</button>
                </div>
                <div class="controls__table-container">
                    <table class="controls__table messages__table">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="top-arrow bottom-arrow">Sukūrimo data</th>
                                <th class="top-arrow bottom-arrow">Gavėjo tipas</th>
                                <th class="top-arrow bottom-arrow">Žinutės tipas</th>
                                <th class="top-arrow bottom-arrow">Tel. numeris</th>
                                <th class="top-arrow bottom-arrow">SMS tekstas (19897)</th>
                                <th class="top-arrow bottom-arrow">Siuntimo data</th>
                                <th class="top-arrow bottom-arrow">Būsena</th>
                                <th class="top-arrow bottom-arrow">Būsenos data</th>
                                <th>Siuntimo klaida</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($y = 0; $y < 4; $y++) { ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input name="distance" type="checkbox" id="product_<?php echo $y ?>" />
                                            <label for="product_<?php echo $y ?>"></label>
                                        </div>
                                    </td>
                                    <td>2020 05 01</td>
                                    <td>Specialistas</td>
                                    <td>Reklama</td>
                                    <td>+370 000 00000</td>
                                    <td class="messages__text">
                                        Aromatherapy Associates eterinių aliejų masažas, tai
                                            specializuotas masažas, sudarytas iš Rytų ir Vakarų tradicijų,
                                            dėmesį skiriant nugarai, galvai, kaklui, pečiams ir pėdoms,
                                            praturtintas grynų eterinių aliejų kvapais ir naudingosiomis
                                            savybėmis.
                                    </td>
                                    <td>2020 05 01</td>
                                    <td>Paruošta</td>
                                    <td>2020 05 01</td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
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
            <?php require_once('controls-sidebar.php'); ?>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>