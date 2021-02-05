<section class="company__tab hidden" id="specialistai">
    <div class="company__info company__specialists">
        <?php for ($i = 0; $i < 7; $i++) { ?>
            <div class="company__specialist-card">
                <div class="company__specialist-photo" style="background-image:url(../img/1.jpg)">
                </div>
                <div class="company__specialist-info">
                    <h4>Saulė</h4>
                    <h4>Brašiškienėnienė</h4>
                    <p>Stilistė</p>
                    <button class="button darkblue transparent small">Profilis</button>
                    <button class="button orange small company__specialist-activate">Deaktyvuoti</button>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="company__button-container">
        <button class="orange transparent">Atšaukti pakeitimus</button>
        <button class="orange">Saugoti pakeitimus</button>
    </div>
</section>