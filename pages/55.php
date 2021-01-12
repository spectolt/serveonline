<?php $thisCat = "controls";
$thisPage = "messages-settings"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--controls page-content--messages">
        <div class="page-content__wrapper">
            <section class="controls messages-settings">
                <h1 class="title">Žinučių nustatymai</h1>
                <div class="controls__top">
                    <ul class="controls__languages">
                        <li class="paragraph active"><a href="#">LT</a></li>
                        <li class="paragraph"><a href="#">EN</a></li>
                        <li class="paragraph"><a href="#">RU</a></li>
                    </ul>
                    <button class="controls__new darkblue transparent small paragraph">Nauja SMS žinutė</button>
                    <button class="controls__new darkblue transparent small paragraph">Nauja notification žinutė</button>
                </div>
                <div class="controls__table-container">
                    <table class="controls__table messages__table">
                        <thead>
                            <tr>
                                <th>Sukūrimo data</th>
                                <th>Žinutės tipas</th>
                                <th>Žinutės ID</th>
                                <th>Žinutės tema</th>
                                <th>Žinutės tekstas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($y = 0; $y < 4; $y++) { ?>
                                <tr>
                                    <td>2020 05 01</td>
                                    <td>SMS</td>
                                    <td>12345678</td>
                                    <td>Užsakymo patvirtinimas</td>
                                    <td class="messages__text">
                                        <p>Aromatherapy Associates eterinių aliejų masažas, tai
                                            specializuotas masažas, sudarytas iš Rytų ir Vakarų tradicijų,
                                            dėmesį skiriant nugarai, galvai, kaklui, pečiams ir pėdoms,
                                            praturtintas grynų eterinių aliejų kvapais ir naudingosiomis
                                            savybėmis.</p>
                                        <button class="controls__trash">
                                            <button class="controls__edit">
                                            </button>
                                    </td>
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