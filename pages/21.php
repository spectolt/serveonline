<?php $thisCat = "company"; ?>
<?php require_once('header.php'); ?>
<main class="site-main site-main--aside">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company">
                <div class="company__header">
                    <div class="company__header-content">
                        <h2>FIGARO</h2>
                        <ul class="company__nav">
                            <li class="active"><a href="#">Bendra informacija</a></li>
                            <li><a href="#">Įmonių profiliai</a></li>
                            <li><a href="#">Prisijungimas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="company__info">
                    <h3>Grupės savininkas</h3>
                    <div class="company__inputs-container company__inputs-group-owner">
                        <input type="text" name="name" placeholder="Vardas Pavardė">
                        <input type="text" name="phone" placeholder="+370 XXXXXX">
                        <input type="text" name="email" placeholder="Elektroninis paštas">
                        <input type="text" name="address" placeholder="Adresas">
                    </div>
                </div>
                <div class="company__group">
                    <button class="js-create-group">Sukurti grupę</button>
                </div>
                <div class="company__companies">
                    <button class="js-create-company">Nauja įmonė</button>
                    <div class="company__items">
                    </div>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>