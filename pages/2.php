<?php $thisCat = "login";
$thisPage = "login"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
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

                    <div class="login__button-container">
                        <button class="button orange login__button--half login__button--submit">Prisijungti</button>
                        <button class="button blue login__button--half login__button--fb">Prisijungti per <div class="login__button-fb"></div></button>
                    </div>
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
                    <div class="input-wrapper input-wrapper--half input-wrapper--city">
                        <input type="text" name="city" placeholder="Miestas" />
                    </div>
                    <!-- <div class="login__gender">
                        <p>Lytis:</p>
                        <div class="radio">
                            <input name="gender" type="radio" id="gender-female" class="" />
                            <label for="gender-female">Moteris</label>
                        </div>
                        <div class="radio">
                            <input name="gender" type="radio" id="gender-male" class="" />
                            <label for="gender-male">Vyras</label>
                        </div>
                    </div> -->
                    <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                        <input type="password" name="password" placeholder="Slaptažodis" />
                    </div>
                    <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                        <input type="password" name="password2" placeholder="Pakartokite slaptažodį" />
                    </div>
                    <label class="login__passwords">Slaptažodis, ne mažiau 8 simbolių, kuriuos sudaro: skaičiai, raidės, bent viena didžioji raidė.</label>
                    <div class="login__checkboxes">
                        <div class="checkbox">
                            <input name="privacy_policy" type="checkbox" id="privacy_policy" class="" value="1" required />
                            <label for="privacy_policy">Patvirtinu, kad susipažinau su <a href="#">Privatumo politika</a> ir sutinku, kad mano asmens duomenys būtų naudojami joje numatytais duomenų tvarkymo tikslais ir sąlygomis.</label>
                        </div>
                        <div class="checkbox">
                            <input name="newsletter" type="checkbox" id="newsletter" class="" value="1" required />
                            <label for="newsletter">Sutinku gauti pasiūlymus bei informaciją apie naujas paslaugas.</label>
                        </div>
                        <div class="checkbox">
                            <input name="sms" type="checkbox" id="sms" class="" value="1" required />
                            <label for="sms">Sutinku gauti priminimus apie rezervacijas.</label>
                        </div>
                        <p>Užpildydami šią formą, sutinkate su mūsų <a href="#">Naudojimosi taisyklėmis</a>.</p>
                    </div>
                    <button class="button orange login__button login__button--register">Registruotis</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
require_once('footer-menu.php');
require_once('footer.php');
?>