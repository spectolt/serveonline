<?php $thisCat = "about";
$thisPage = "contacts"; ?>

<?php require_once('header.php'); ?>
<main class="">
    <section class="contacts-container">
        <div class="contacts">
            <div class="contacts__form-container">
                <h2>Parašykite mums žinutę</h2>
                <div class="contacts__form">
                    <input type="text" class="message-name" name="title" placeholder="Jūsų vardas ir pavardė">
                    <input type="text" class="message-company" name="title" placeholder="Įmonė, prekės ženklas">
                    <input type="text" class="message-email" name="title" placeholder="El. pašto adresas">
                    <input type="text" class="message-phone" name="title" placeholder="Telefono numeris">
                    <textarea placeholder="Žinutė"></textarea>
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
                    <p class="hours">Darbo valandos: 08:00 - 17:00</p>
                    <img id="image-18-87" alt="" src="https://specto.lt/1/serve/wp-content/uploads/2021/08/kontaktai-210809.svg" class="ct-image">
                </div>
            </div> 
        </div>
    </section>
    <?php require_once('footer-menu-homepage.php'); ?>
</main>

<?php require_once('footer.php'); ?>