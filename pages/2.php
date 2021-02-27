
<?php $thisCat="login"; $thisPage="login"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>

<section class="breadcrumbs">
    <div class="breadcrumbs__selected">
        <img src="../img/icons/beauty.svg">
    </div>
    <button class="breadcrumbs__change paragraph">Grožio salonai ir kirpyklos</button>
    <button class="breadcrumbs__cart"><span>2</span></button>
</section>
<div class="breadcrumbs__more">
    <ul>
        <?php for ($y = 0; $y < 6; $y++) { ?>
            <li <?php if ($y === 2) { ?> style="display:none" <?php } ?>>
                <div class="breadcrumbs__area-img" style="background-color: <?php echo "$colors[$y]" ?>">
                    <img src=<?php echo "$icons[$y]" ?>>
                </div>
                <p><?php echo $areas[$y] ?></p>
            </li>
        <?php } ?>
    </ul>
</div>
<main class="site-main container">
    <section class="login">
        <div class="login__blocks">
            <div class="login__block">
                <h2 class="title">Prisijungti</h2>
                <form class="login__form">
                    <div class="input-wrapper input-wrapper--envelope">
                        <input type="email" name="email" placeholder="El. paštas" />
                    </div>
                    <div class="input-wrapper input-wrapper--eye">
                        <input type="password" name="password" placeholder="Slaptažodis" />
                    </div>
                    <div class="input-wrapper login__forgot">
                        <a href="#" class="">Pamiršai slaptažodį?</a>
                    </div>

                    <button class="button orange login__button--half">Prisijungti</button>
                    <button class="button blue login__button--half login__button--fb">Prisijungti per <div class="login__button-fb"></div></button>
                </form>
            </div>
            <div class="login__block login__block--register">
                <h2 class="title">Registruotis pirmą kartą</h2>
                <form class="login__form">
                    <div class="input-wrapper input-wrapper--user">
                        <input type="text" name="name" placeholder="Vardas Pavardė" />
                    </div>
                    <div class="input-wrapper input-wrapper--envelope">
                        <input type="email" name="email" placeholder="El. paštas" />
                    </div>
                    <div class="input-wrapper input-wrapper--half input-wrapper--phone">
                        <input type="tel" name="phone" placeholder="+370 XXXXXXXX" />
                    </div>
                    <div class="input-wrapper input-wrapper--half input-wrapper--marker">
                        <input type="text" name="city" placeholder="Miestas" />
                    </div>
                    <label class="login__passwords">Slaptaždis, ne mažiau 8 simbolių.</label>
                    <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                        <input type="password" name="password" placeholder="Slaptažodis" />
                    </div>
                    <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                        <input type="password" name="password2" placeholder="Pakartokite slaptažodį" />
                    </div>
                    <div class="login__checkboxes">
                        <div class="checkbox">
                            <input name="privacy_policy" type="checkbox" id="privacy_policy" class="" value="1" required />
                            <label for="privacy_policy">Patvirtinu, kad susipažinau su <a href="#">Privatumo politika</a> ir sutinku, kad mano asmens duomenys būtų naudojami joje numatytais duomenų tvarkymo tikslais ir sąlygomis.</label>
                        </div>
                        <div class="checkbox">
                            <input name="newsletter" type="checkbox" id="newsletter" class="" value="1" required />
                            <label for="newsletter">Pažymėkite, jei nenorite gauti el. laiškų apie naujausius pasiūlymus bei naujienas iš Serve Online.</label>
                        </div>
                        <div class="checkbox">
                            <input name="sms" type="checkbox" id="sms" class="" value="1" required />
                            <label for="sms">Pažymėkite, jei sutinkate, kad įstaiga, kurioje registruojatės, siųstų jums el. laiškus bei SMS apie jų paslaugas.</label>
                        </div>
                    </div>
                    <button class="button orange">Registruotis</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
require_once('footer-menu.php');
require_once('footer.php');
?>