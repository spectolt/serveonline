<?php $thisCat = "company"; ?>
<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
?>

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
                <div class="company__container">
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
                            <div class="company__item"> 
                                <h3>1 Įmonė</h3> 
                                <div class="company__inputs-container company__inputs-companies">
                                    <select class="company__select">
                                        <option data-image="../img/icons/clinic.svg"></option>
                                        <?php for ($y = 0; $y < 6; $y++) { ?>
                                            <option data-image=<?php echo "$icons[$y]" ?>><?php echo "$areas[$y]" ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="text" name="title" placeholder="Pavadinimas">
                                    <input type="text" name="name" placeholder="Vardas Pavardė">
                                    <input type="text" name="phone" placeholder="+370 XXXXXX">
                                    <input type="text" name="email" placeholder="Elektroninis paštas">
                                    <h4>Teisės</h4>
                                    <div class="checkbox">
                                        <input name="rights" type="checkbox" id="rights1" class="" value="1" />
                                        <label for="rights1">Gali matyti tik savo įmonę</label>
                                    </div>
                                    <div class="checkbox">
                                        <input name="rights" type="checkbox" id="rights2" class="" value="1" />
                                        <label for="rights2">Gali matyti grupę</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="company__button-container">
                        <button class="orange transparent">Atšaukti pakeitimus</button>
                        <button class="orange">Saugoti pakeitimus</button>
                    </div>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>