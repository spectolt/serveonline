<?php $thisCat = "login";
$thisPage = "login"; ?>

<?php
$areas = array('Klinikos ir estetinė medicina', 'Odontologijos klinikos', 'Grožio salonai', 'SPA ir masažo kabinetai', 'Sportas ir reabilitacija', 'Veterinarija');
$icons = array('../img/icons/clinic.svg', '../img/icons/odontology.svg', '../img/icons/beauty.svg', '../img/icons/spa.svg', '../img/icons/sport.svg', '../img/icons/vet.svg');
$colors = array('#fec994', '#cce2ff', '#fed9c9', '#ffefd8', '#e2c4ae', '#c1e1d2')
?>

<?php require_once('header.php'); ?>
<div class="warning-popup-container warning-popup-container--login">
    <div class="warning-popup">
        <div class="warning-popup__header">
            <h4>Tel. numerio patvirtinimas</h4>
            <!-- <button class="warning-popup__close"> -->
        </div>
        <div class="warning-popup__content">
            <p>Jums SMS žinute išsiųstas patvirtinimo kodas, prašome suvesti jį čia</p>
            <div class="code-inputs-container">
                <?php for ($y = 0; $y < 4; $y++) { ?>
                    <input type="number" max="9" length="1" class="code-input">
                <?php } ?>
            </div>
            <div class="warning-popup__button-container">
                <button class='orange'>Atsiųsti kodą pakartotinai</button>
            </div>
        </div>
    </div>
</div>
<div class="warning-popup-container warning-popup-container--login warning-popup-container--forgot hidden">
    <div class="warning-popup">
        <div class="warning-popup__header">
            <h4>Slaptažodžio atkūrimas</h4>
            <button class="warning-popup__close">
        </div>
        <div class="warning-popup__content">
            <p>Įveskite savo el. pašto adresą</p>
            <div class="input-wrapper input-wrapper--envelope input-wrapper--email-forgot">
                <input type="email" name="email" placeholder="El. paštas" />
            </div>
            <div class="warning-popup__button-container">
                <button class='orange'>Atkurti slaptažodį</button>
            </div>
        </div>
    </div>
</div>
<main class="site-main container">
    <section class="login">
        <div class="login__blocks">
            <div class="login__block">
                <h2 class="title">Prisijungti</h2>
                <form class="login__form">
                    <div class="input-wrapper input-wrapper--envelope input-wrapper--email">
                        <input type="email" name="email" placeholder="El. paštas" />
                    </div>
                    <div class="input-wrapper input-wrapper--eye">
                        <input type="password" name="password" placeholder="Slaptažodis" />
                    </div>
                    <div class="input-wrapper login__forgot">
                        <button type="button" class="">Pamiršai slaptažodį?</button>
                    </div>

                    <div class="login__button-container">
                        <button type="submit" class="button orange login__button--half login__button--submit">Prisijungti</button>
                        <button type="button" class="button blue login__button--half login__button--fb">Prisijungti per <div class="login__button-fb"></div></button>
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
                        <!-- <input type="text" name="city" placeholder="Miestas" /> -->
                        <select id="city" data-placeholder="Miestas">
                            <option></option>
                            <option>Vilnius</option>
                            <option>Kaunas</option>
                        </select>
                    </div>
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
                    <button class="button orange small login__button login__button--register">Registruotis</button>
                </form>
            </div>
        </div>
    </section>
    <?php require_once('footer-menu.php'); ?>
</main>

<?php
require_once('footer.php');
?>