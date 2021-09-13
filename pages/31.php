<?php $thisCat = "controls";
$thisPage = "messages-inbox"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasTable">
    <section class="page-content page-content--controls page-content--messages">
        <div class="page-content__wrapper">
            <section class="controls messages-settings">
                <div class="controls__header">
                    <h1 class="title">Gautos SMS</h1>
                    <div class="controls__top">
                        <button class="controls__delete darkblue transparent small paragraph">Trinti</button>
                    </div>
                </div>
                <div class="controls__table-container-wrapper">
                    <button class="expand-button"></button>
                    <div class="controls__table-container">
                        <table class="controls__table messages-settings__table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Gavimo data, laikas</th>
                                    <th>Siuntėjo tipas</th>
                                    <th>Siuntėjas</th>
                                    <th>Tel. numeris</th>
                                    <th>SMS tekstas (19897)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($y = 0; $y < 10; $y++) { ?>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input name="distance" type="checkbox" id="product_<?php echo $y ?>" />
                                                <label for="product_<?php echo $y ?>"></label>
                                            </div>
                                        </td>
                                        <td>2020 05 01</td>
                                        <td>Specialistas</td>
                                        <td>Vardas pavardė</td>
                                        <td>+37000000000</td>
                                        <td class="messages__text">
                                            Aromatherapy Associates eterinių aliejų masažas, tai
                                            specializuotas masažas, sudarytas iš Rytų ir Vakarų tradicijų,
                                            dėmesį skiriant nugarai, galvai, kaklui, pečiams ir pėdoms,
                                            praturtintas grynų eterinių aliejų kvapais ir naudingosiomis
                                            savybėmis.
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
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