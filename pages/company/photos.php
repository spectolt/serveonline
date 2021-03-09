<section class="company__tab hidden" id="nuotraukos">
    <div class="company__info company__photos">
        <div class="company__photos-button-container">
        <button class="button orange small upload-image">Įkelti nuotraukas <span>(iki 24)<span></button>
        <button class="button orange transparent small archive-image">Įkelti iš archyvo</button>
        </div>
        <button class="orange transparent small switch-image">Pakeisti nuotraukos vietą</button>
        <ul class="sortable">
            <?php for ($i = 0; $i < 24; $i++) { ?>
                <li class=<?php if ($i == 0) echo "hide-after" ?>>
                    <?php if ($i == 0) { ?>
                        <div class="company__photo">
                            <img src="../img/Layer-2.png">
                            <button class="darkblue small photo-rotate"></button>
                            <button class="darkblue small photo-remove"></button>
                        </div>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="company__button-container">
        <button class="orange transparent">Atšaukti pakeitimus</button>
        <button class="orange">Saugoti pakeitimus</button>
    </div>
</section>