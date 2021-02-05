<section class="company__tab hidden" id="nuotraukos">
    <div class="company__info company__photos">
        <button class="button orange small upload-image">Įkelti nuotraukas (iki 24)</button>
        <button class="button orange transparent small archive-image">Įkelti iš archyvo</button>
        <p>Nuotraukos vietą pakeiskite traukdami ją pele</p>
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