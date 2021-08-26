<?php $thisCat = "about";
$thisPage = "contacts"; ?>

<?php require_once('header.php'); ?>
<main class="">
    <section class="contacts-container">
        <div class="contacts">
            <div class="contacts__form-container">
                <h2>Parašykite mums žinutę</h2>
                <div class="contacts__form">
                    <div class="input-container input-container--name">
                        <span class="input-icon"></span>
                        <input type="text" class="message-name" name="title" placeholder="Jūsų vardas ir pavardė">
                    </div>
                    <div class="input-container input-container--company">
                        <span class="input-icon"></span>
                        <input type="text" class="message-company" name="title" placeholder="Įmonė, prekės ženklas">
                    </div>
                    <div class="input-container input-container--email">
                        <span class="input-icon"></span>
                        <input type="text" class="message-email" name="title" placeholder="El. pašto adresas">
                    </div>
                    <div class="input-container input-container--phone">
                        <span class="input-icon"></span>
                        <input type="text" class="message-phone" name="title" placeholder="Telefono numeris">
                    </div>
                    <div class="input-container input-container--message">
                        <span class="input-icon"></span>
                        <textarea placeholder="Žinutė"></textarea>
                    </div>
                    <button type="submit" value="Siųsti" class="orange">Siųsti</button>
                </div>
            </div>
            <div class="contacts__form-information">
                <div class="information__form">
                    <h2>SERVE Online klientų aptarnavimo centras</h2>
                    <p class="phone">+37066561993</p>
                    <p class="email">info@serveonline.lt</p>

                    <h2>Darbo laikas</h2>
                    <p class="days">Darbo dienos: I - V</p>
                    <p class="hours">Darbo valandos: 08:00 - 20:00</p>
                    <img alt="" src="../img/illustrations/home-services.svg" class="ct-image">
                </div>
            </div>
        </div>
    </section>
    <?php require_once('footer-menu-homepage.php'); ?>
</main>

<?php require_once('footer.php'); ?>