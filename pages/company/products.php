<section class="company__tab hidden" id="produktai">
    <div class="company__info company__photos">
    <div class="company__photos-button-container">
        <button class="button orange small upload-image">Įkelti gamintojo logotipą (iki 15)</button>
    </div>
        <button class="orange transparent small switch-image">Pakeisti nuotraukos vietą</button>
        <ul class="sortable">
            <?php for ($i = 0; $i < 15; $i++) { ?>
                <li class=<?php if ($i == 0 || $i == 1) echo "hide-after" ?>>
                    <?php if ($i == 0) { ?>
                        <div class="company__photo company__photo--logo">
                            <img src="../img/matrix.png">
                            <button class="darkblue small photo-rotate"></button>
                            <button class="darkblue small photo-remove"></button>
                        </div>
                    <?php } ?>
                    <?php if ($i == 1) { ?>
                        <div class="company__photo company__photo--logo">
                            <img src="../img/ysl-logo.png">
                            <button class="darkblue small photo-rotate"></button>
                            <button class="darkblue small photo-remove"></button>
                        </div>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="company__button-container">
        <button class="orange transparent">Atšaukti</button>
        <button class="orange">Saugoti</button>
    </div>
</section>